<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidature;
use App\Models\Licence;
use App\Models\Specialite;
use App\Models\Departement;
use App\Models\Etablissement;
use App\Models\Inscription;
use App\Models\Ville;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function listCandidature()
    {
        $condidatures = Candidature::all();
        return view('admin.Candidature', compact('condidatures'));
    }
    public function listUsers()
    {
        $Users = User::all();
        return view('admin.listeUsers', compact('Users'));
    }
    public function Listlicence()
    {
        $licences = Licence::all();
        $specialites = Specialite::all();
        $departements = Departement::all()->unique('departement_nom');
        return view('admin.listeLicence', compact('licences', 'specialites', 'departements'));
    }
    public function supprimerLicence($id)
    {
        $licence = Licence::find($id);
        if (!$licence) {
            return redirect()->route('licences')->with('error', 'Licence not found');
        }
        $licence->delete();

        return redirect()->back()->with('success', 'Licence deleted successfully');
    }
    public function updateLicence(Request $request, $id)
    {

        $request->validate([
            'editFieldName' => 'required|string|max:255',
            'editFieldSpecialite' => 'required|exists:Specialite,id',
            'editFieldDepartement' => 'required|exists:Departement,id',
        ]);
        $licence = Licence::find($id);
        if (!$licence) {
            return redirect()->back()->with('error', 'Licence did not Updates successfully');
        }
        $licence->nom_licence = $request->input('editFieldName');
        $licence->specialite_id = $request->input('editFieldSpecialite');
        $licence->departement_id = $request->input('editFieldDepartement');
        $licence->save();
        return redirect()->back()->with('success', 'Licence Updates successfully');
    }

    public function supprimerUser($id)
    {
        $User = User::find($id);
        if (!$User) {
            return redirect()->route('Users')->with('error', 'Licence not found');
        }
        $User->delete();

        return redirect()->back()->with('success', 'Licence deleted successfully');
    }
    public function ListCondudates()
    {
        $candidates = Candidat::all();
        return view('admin.listeCondidates', compact( 'candidates'));
    }
    public function ListInsription()
    {
        $Inscriptions=Inscription::all();
        $Users=User::all();
        $licences=Licence::all();
        return view('admin.listeInscription', compact('Inscriptions','Users','licences'));
    }
    public function updateInscription(Request $request, $id)
    {
 
        $validatedData = $request->validate([
            'editFieldorder' => 'required',
            'editFieldUser' => 'required|exists:users,id',
            'editFieldLicence'=>'required|exists:license,id',
            'editFieldStatus' => 'required',
        ]);
        $inscription = Inscription::findOrFail($id);

        $inscription->update([
            'order' => $validatedData['editFieldorder'],
            'candidature_id' => $validatedData['editFieldUser'],
            'licence_id' => $validatedData['editFieldLicence'],
            'etat'=>$validatedData['editFieldStatus'],
        ]);

        return redirect()->back()->with('success', 'Inscription updated successfully');
    }
    public function DELETEInscription($id)
    {
        $inscription = Inscription::findOrFail($id);
        if (!$inscription) {
            return redirect()->back()->with('error', 'Inscription not found');
        }
        $inscription->delete();
      

        return redirect()->back()->with('success', 'Inscription deleted successfully');
    }
}
