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
    
    public function listUsers()
    {
        $Users = User::all();
        return view('admin.listeUsers', compact('Users'));
    }
    public function updateUser(Request $request, $id)
    {

        $request->validate([
            'editFieldNom' => 'required|string',
            'editFieldPrenom' => 'required',
            'editFieldEmail' => 'required',
            'editFieldtel' => 'required',
            'editFieldDate_naissance' => 'required',
        ]);
        $User = User::find($id);
        if (!$User) {
            return redirect()->back()->with('error', 'Licence did not Updates successfully');
        }
        $User->nom = $request->input('editFieldNom');
        $User->prenom = $request->input('editFieldPrenom');
        $User->email = $request->input('editFieldEmail');
        $User->tel = $request->input('editFieldtel');
        $User->genre = $request->input('editFieldgenre');
        $User->date_naissance = $request->input('editFieldDate_naissance');
        $User->save();
        return redirect()->back()->with('success', 'Licence Updates successfully');
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
        $Villes = Ville::all();
        $Etablissements = Etablissement::all();
        $Users = User::all();
        return view('admin.listeCondidates', compact( 'candidates','Etablissements','Villes','Users'));
    }
    public function ListCondudatesDossier()
    {
        $Inscriptions = Inscription::where('etat', 'accepted')->get();
        $Users=User::all();
        $licences=Licence::all();
        return view('admin.listeDossierInscription', compact('Inscriptions','Users','licences'));
    
    }
    public function DELETEcondudates($id)
    {
        $candidates = Candidat::findOrFail($id);
        if (!$candidates) {
            return redirect()->back()->with('error', 'candidates not found');
        }
        $candidates->delete();
      

        return redirect()->back()->with('success', 'candidates deleted successfully');
    }
    public function updatecandidate(Request $request, $id)
    {
 
        $validatedData = $request->validate([
            
            'editFieldUser' => 'required|exists:users,id',
            'editFieldVille'=>'required|exists:Ville,id',
            'editFieldEtablissement' => 'required|exists:Etablissement,id',
            'editFieldCIN' => 'required',
            'editFieldCNE' => 'required',
            'editFieldNum_apoge' => 'required',

        ]);
        $candidate = Candidat::findOrFail($id);

        $candidate->update([
            'user_id' => $validatedData['editFieldUser'],
            'ville_id' => $validatedData['editFieldVille'],
            'etablissement_id' => $validatedData['editFieldEtablissement'],
           'CNE' =>$validatedData['editFieldCIN'],
           "CIN"=>$validatedData['editFieldCNE'],
           "num_apoge" =>$validatedData['editFieldNum_apoge'],
        ]);

        return redirect()->back()->with('success', 'Inscription updated successfully');
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
    public function updateDossier(Request $request, $id)
    {
 
        $validatedData = $request->validate([
            'editFieldorder' => 'required',
            'editFieldUser' => 'required|exists:users,id',
            'editFieldLicence'=>'required|exists:license,id',
            'editFieldStatus' => 'required',
            'editFieldBAC' => 'required|in:0,1',
            'editFieldcin' => 'required|in:0,1',
            'editFieldiplome' => 'required|in:0,1',
            'editFieldreleve1' => 'required|in:0,1',
            'editFieldreleve2' => 'required|in:0,1',
        ]);
        $inscription = Inscription::findOrFail($id);

        $inscription->update([
            'order' => $validatedData['editFieldorder'],
            'candidature_id' => $validatedData['editFieldUser'],
            'licence_id' => $validatedData['editFieldLicence'],
            'etat'=>$validatedData['editFieldStatus'],
        ]);
        $dossierPy = $inscription->candidature->dossier->dossierpy;
        $dossierPy->update([
            'Bac' => $validatedData['editFieldBAC'],
            'CIN' => $validatedData['editFieldcin'],
            'diplome' => $validatedData['editFieldiplome'],
            'relevé_ann1' => $validatedData['editFieldreleve1'],
            'relevé_ann2' => $validatedData['editFieldreleve2'],
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
