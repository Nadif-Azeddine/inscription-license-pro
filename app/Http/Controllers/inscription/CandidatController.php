<?php

namespace App\Http\Controllers\inscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\BacPdRequest;
use App\Http\Requests\BacRequest;
use App\Http\Requests\CandidatRequest;
use App\Models\Bac;
use App\Models\BacOption;
use App\Models\BacPd;
use App\Models\Candidat;
use App\Models\Candidature;
use App\Models\Diplome;
use App\Models\Dossier;
use App\Models\DossierPy;
use App\Models\Etablissement;
use App\Models\Inscription;
use App\Models\Licence;
use App\Models\Specialite;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\License;

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
        $options = BacOption::all();
        return view(
            'inscription.bac',
            [
                'options' => $options,
            ]
        );
    }

    // save bac infos
    public function saveBac(BacRequest $request)
    {
        try {
            $validated = $request->validated();
            $bac = Bac::updateOrCreate(
                ['candidat_id' => Auth::user()->candidat->id],
                [
                    'option_id' => $validated['option'],
                    'candidat_id' => Auth::user()->candidat->id,
                    'moy_general' => $validated['moy_gen'],
                    'date_obt' => $validated['date_obt'],
                    'mention' => $validated['mention'],
                ]
            );

            if ($bac) {
                return redirect()->route('bacpd');
            }

        } catch (\Exception $e) {
            return dd($e->getMessage());
        }
    }

    // save bac +2

    public function bacPd()
    {
        $specialites = Specialite::all();
        $diplomes = Diplome::all();
        return view(
            'inscription.bacpd',
            [
                'specialites' => $specialites,
                'diplomes' => $diplomes,
            ]
        );
    }


    public function saveBacPd(BacPdRequest $request)
    {
        try {
            $validated = $request->validated();
            $bacpd = BacPd::updateOrCreate(
                ['candidat_id' => Auth::user()->candidat->id],
                [
                    'candidat_id' => Auth::user()->candidat->id,
                    'diplome_id' => $validated['diplome_id'],
                    'specialite_id' => $validated['specialite_id'],
                    'moy_pa' => $validated['moy_pa'],
                    'moy_da' => $validated['moy_da'],
                    'nb_etudiant_pa' => $validated['nb_etudiant_pa'],
                    'classment_pa' => $validated['classment_pa'],
                    'nb_etudiant_da' => $validated['nb_etudiant_da'],
                    'classment_da' => $validated['classment_da'],
                    'date_reussite_pa' => $validated['date_reussite_pa'],
                    'date_reussite_da' => $validated['date_reussite_da'],
                ]
            );


            if ($bacpd) {
                return redirect()->route('choix');
            }

        } catch (\Exception $e) {
            return dd($e->getMessage());
        }
    }

    // choix
    public function choix()
    {
        $licenses = Licence::all()->unique("nom_licence");
        return view(
            'inscription.choix',
            [
                'licenses' => $licenses,
            ]
        );
    }

    // save choix
    public function saveChoix(Request $request)
    {
        try {
            $validated = $request->validate([
                'choix1' => 'required',
                'choix2' => 'required',
                'choix3' => 'required',
            ]);

            $candidature = Candidature::updateOrCreate(
                ['candidat_id' => Auth::user()->candidat->id],
                [
                    'candidat_id' => Auth::user()->candidat->id,
                    'anneeun' => date('Y').'-'.(date('Y')+1),
                    'etat' => 'en cours',
                ]
            );

            if ($candidature) {
               Inscription::create([
                    'candidature_id' => $candidature->id,
                    'licence_id' => $validated['choix1'],
                    'order' => '1',
                ]);
               Inscription::create([
                    'candidature_id' => $candidature->id,
                    'licence_id' => $validated['choix2'],
                    'order' => '2',
                ]); 
               Inscription::create([
                    'candidature_id' => $candidature->id,
                    'licence_id' => $validated['choix3'],
                    'order' => '3',
                ]);
                $dossier = Dossier::create([
                    'candidature_id' => $candidature->id,
                ]);
                DossierPy::create([
                    'dossier_id' => $dossier->id,
                ]);
                return redirect()->back()->with('success', 'Vos choix sont enregistrés avec succès');
            }

        } catch (\Exception $e) {
            return dd($e->getMessage());
        }
    }

}
