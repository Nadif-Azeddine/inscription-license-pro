<?php

namespace App\Http\Controllers\inscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidatRequest;
use App\Models\Candidat;
use App\Models\Candidature;
use App\Models\Etablissement;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatController extends Controller
{
    public function index()
    {
        $villes = Ville::select('id', 'nom_ville')->get();
        $etablissements = Etablissement::select('id', 'nom_etablissement')->orderBy('nom_etablissement')->get();
        return view('inscription.candidat', [
            'villes' => $villes,
            'etablissements' => $etablissements,
        ]);
    }
    // save candidat infos
    public function save(CandidatRequest $request)
    {
        try {
            $validated = $request->validated();

            $candidat = Candidat::updateOrCreate(
                ['user_id' => Auth::id()],
                [
                    'user_id' => Auth::id(),
                    'ville_id' => $validated['ville'],
                    'etablissement_id' => $validated['etablissement'],
                    'adresse' => $validated['address'],
                    'CIN' => $validated['cin'],
                    'CNE' => $validated['cne'],
                    'num_apoge' => $validated['num_apoge'],
                ]
            );

            if ($candidat) {
               return redirect()->route('bac');
            }

        } catch (\Exception $e) {
            return dd($e->getMessage());
        }
    }

    // bac infos
    public function bac()
    {
        return view('inscription.bac');
    }

}
