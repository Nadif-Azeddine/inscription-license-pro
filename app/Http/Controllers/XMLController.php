<?php

namespace App\Http\Controllers;

use App\Models\Licence;
use Illuminate\Http\Request;
use App\Models\User;
class XMLController extends Controller
{
     public $xmlFile;
    public $xml;

    public function __construct()
    {
        $this->xmlFile = public_path('base.xml'); // Path to your XML file
        $this->xml = simplexml_load_file($this->xmlFile);
    }

    public function listUsers()
    {
        $Users = $this->xml->xpath('/university/users/user');
        return view('admin.listeUsersXML', compact('Users'));
    }

    public function Listlicence()
    {
        $licences = $this->xml->xpath('/university/licences/licence');
        $departments=$this->xml->xpath('/university/departments/department');
        return view('admin.listeLicenceXML', compact('licences','departments'));
    }

    public function editLicence(Request $request, $licenceId)
{
    // Load the existin
    // Find the specific licence element based on the provided licenceId
    $licence = $this->xml->xpath("/university/licences/licence[@id='$licenceId']");

    if (!$licence) {
        return redirect()->route('licence.list')->with('error', 'Licence not found');
    }

    // Get the data from the request or any other source
    $specialite = $request->input('specialite');
    $nomLicence = $request->input('nom_licence');
    $departementId = $request->input('departement_id');

    // Update the data of the selected licence element
   

    // Save the modified XML back to the file
    $this->xml->asXML($this->xmlFile);

    return redirect()->route('licence.list')->with('success', 'Licence updated successfully');
}
}
