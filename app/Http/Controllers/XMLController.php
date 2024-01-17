<?php

namespace App\Http\Controllers;

use DOMDocument;
use XSLTProcessor;
use App\Models\User;
use SimpleXMLElement;
use App\Models\Licence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

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
    public function deleteUser($id)
    {
        
        $Userdelete = $this->xml->xpath("//user[@id='$id']");
      
        if (!empty($Userdelete)) {
            unset($Userdelete[0][0]);
            $this->xml->asXML($this->xmlFile);

            return redirect()->back()->with('success', 'User DELETED successfully');
        } else {
            return redirect()->back()->with('ERROR', 'User does not exist ');
        }
    }
    public function Listlicence()
    {
        $licences = $this->xml->xpath('/university/licences/licence');
        $departments=$this->xml->xpath('/university/departments/department');
        $specialites=$this->xml->xpath('/university/specialites/specialite');
       
        return view('admin.listeLicenceXML', compact('licences','departments','specialites'));
    }

                public function editLicence(Request $request, $licenceId)
            {
                $licences = $this->xml->xpath("//licences")[0];
                $licenceToUpdate = $licences->xpath(".//licence[id='$licenceId']");
            
                if (!empty($licenceToUpdate)) {
                    $domNode = dom_import_simplexml($licenceToUpdate[0]);
                    $domNode->parentNode->removeChild($domNode);
                    $newLicense = $licences->addChild('licence');
                    $newLicense->addChild('id', $licenceId);
                    $newLicense->addChild('departement', $request->input('editFieldDepartement'));
                    $newLicense->addChild('specialite', $request->input('editFieldSpecialite'));
                    $newLicense->addChild('nom_licence', $request->input('editFieldName'));
                    
                    $this->xml->asXML($this->xmlFile);
                    return redirect()->back()->with('success', 'Licence updated successfully');
                } else {
                    return redirect()->back()->with('error', 'Licence with id='.$licenceId.' not found');
                }
            }


            public function deletelicence($licenceId)
            {
                
                $licenceToDelete = $this->xml->xpath("/university/licences/licence[id='$licenceId']");

                if (!empty($licenceToDelete)) {
                    unset($licenceToDelete[0][0]);
                    $this->xml->asXML($this->xmlFile);

                    return redirect()->back()->with('success', 'Licence DELETED successfully');
                } else {
                    return redirect()->back()->with('ERROR', 'Licence does not exist ');
                }
            }


            public function addLicense(Request $request)
            {
                // Validate the incoming request data
                $request->validate([
                    'id' => 'required|numeric',
                    'departement' => 'required|numeric',
                    'specialite' => 'required|numeric',
                    'nom_licence' => 'required|string',

                ]);

                $this->loadXml();
                $existingLicense = $this->xml->xpath("/university/licences/licence[id='{$request->input('id')}']");
                
                if (!empty($existingLicense)) {
                    return response()->json(['error' => 'License with the specified ID already exists'], 400);
                }
                $newLicense = $this->xml->addChild('licences');
                $newLicense->addChild('id', $request->input('id'));
                $newLicense->addChild('departement', $request->input('departement'));
                $newLicense->addChild('specialite', $request->input('specialite'));
                $newLicense->addChild('nom_licence', $request->input('nom_licence'));
                $this->xml->asXML($this->xmlFile);
                return response()->json(['message' => 'License added successfully'], 201);
            }
            public function listInscriptions()
                {
                    $inscriptions = $this->xml->xpath('/university/inscriptions/inscription');
                    $licences = $this->xml->xpath('/university/licences/licence');
                    $users = $this->xml->xpath('/university/users/user');
                    return view('admin.listeInscriptionXML', compact('inscriptions','licences','users'));
                }
                public function deleteinscription($id)
            {
                
                $inscription = $this->xml->xpath("/university/inscriptions/inscription[id='$id']");

                if (!empty($inscription)) {
                    unset($inscription[0][0]);
                    $this->xml->asXML($this->xmlFile);

                    return redirect()->back()->with('success', 'inscription DELETED successfully');
                } else {
                    return redirect()->back()->with('ERROR', 'inscription does not exist ');
                }
            }
            public function editinscription(Request $request, $id)
            {
                $inscriptions = $this->xml->xpath("/university/inscriptions")[0];
                $inscriptionToUpdate = $inscriptions->xpath("/university/inscriptions/inscription[id='$id']");
            
                if (!empty($inscriptionToUpdate)) {
                    $domNode = dom_import_simplexml($inscriptionToUpdate[0]);
                    $domNode->parentNode->removeChild($domNode);
                    $newinscriptions = $inscriptions->addChild('inscription');
                    $newinscriptions->addChild('id', $id);
                    $newinscriptions->addChild('user', $request->input('editFieldUser'));
                    $newinscriptions->addChild('licence', $request->input('editFieldLicence'));
                    $newinscriptions->addAttribute('status', $request->input('editFieldStatus'));
                    $newinscriptions->addChild('order', $request->input('editFieldOrder'));
                    $this->xml->asXML($this->xmlFile);
                    return redirect()->back()->with('success', 'inscription updated successfully');
                } else {
                    return redirect()->back()->with('error', 'inscription with id='.$id.' not found');
                }
            }

            public function editUser(Request $request, $id)
            {
                $users = $this->xml->xpath("/university/users")[0];
                $userToupdate = $users->xpath("/university/users/user[@id='$id']");
            
                if (!empty($userToupdate)) {
                    $domNode = dom_import_simplexml($userToupdate[0]);
                    $domNode->parentNode->removeChild($domNode);
                    $newuser = $users->addChild('user');
                    $newuser->addAttribute('id', $id);
                    $newuser->addAttribute('username', $request->input('editFieldUsername'));
                    $newuser->addAttribute('nom', $request->input('editFieldNom'));
                    $newuser->addAttribute('prenom', $request->input('editFieldPrenom'));
                    $newuser->addChild('tel', $request->input('editFieldtel'));
                    $newuser->addChild('email', $request->input('editFieldEmail'));
                    $newuser->addChild('date_naissance', $request->input('editFieldDate_naissance'));
                    $this->xml->asXML($this->xmlFile);
                    return redirect()->back()->with('success', 'user updated successfully');
                } else {
                    return redirect()->back()->with('error', 'user with id='.$id.' not found');
                }
            }
            public function creatinscription(Request $request)
                {
                    $inscriptions = $this->xml->xpath("/university/inscriptions")[0];
                    $newId = uniqid();
                    $existingIds = $inscriptions->xpath("/university/inscriptions/inscription/id");
                    while (in_array($newId, $existingIds)) {
                        $newId = uniqid();
                    }
                    $newInscription = $inscriptions->addChild('inscription');
                    $newInscription->addChild('id', $newId);
                    $newInscription->addChild('user', $request->input('CreatinscriptionUser'));
                    $newInscription->addChild('licence', $request->input('CreatinscriptionLicence'));
                    $newInscription->addAttribute('status', $request->input('Creatinscriptionstatus'));
                    $newInscription->addChild('order', $request->input('CreatinscriptionOrder'));
                    $this->xml->asXML($this->xmlFile);

                    return redirect()->back()->with('success', 'Inscription created successfully');
                }
                public function createLicence(Request $request)
                {
                 
                    $licences = $this->xml->xpath("/university/licences")[0];
                    $newId = uniqid();
                    $existingIds = $licences->xpath("/university/licences/licence/id");
                    
                    while (in_array($newId, $existingIds)) {
                        $newId = uniqid();
                    }
                    $newLicense = $licences->addChild('licence');
                    $newLicense->addChild('id', $newId);
                    $newLicense->addChild('departement', $request->input('CreatLicenceDepartement'));
                    $newLicense->addChild('specialite', $request->input('CreatLicenceSpecialite'));
                    $newLicense->addChild('nom_licence', $request->input('CreatLicenceName'));
                    $this->xml->asXML($this->xmlFile);
                    return redirect()->back()->with('success', 'Inscription created successfully');
                }

                public function showUsers()
                {
                    libxml_clear_errors();
                
                    // Ensure the XML file was loaded successfully in the constructor
                    if ($this->xml !== false) {
                        $xsl = new DOMDocument;
                        $xslContent = file_get_contents(base_path('resources/views/admin/users.xslt'));
                        $xsl->loadXML($xslContent);
                
                        $proc = new XSLTProcessor;
                        $proc->importStyleSheet($xsl);
                
                        $html = $proc->transformToXML($this->xml);
                
                        return View::make('admin.listeUsersXSL')->with('html', $html);
                    } else {
                        // Log or handle errors
                        error_log("XML file could not be loaded.");
                    }
                }
                public function showLicence()
                {
                    libxml_clear_errors();
                
                    // Ensure the XML file was loaded successfully in the constructor
                    if ($this->xml !== false) {
                        $xsl = new DOMDocument;
                        $xslContent = file_get_contents(base_path('resources/views/admin/licence.xslt'));
                        $xsl->loadXML($xslContent);
                
                        $proc = new XSLTProcessor;
                        $proc->importStyleSheet($xsl);
                
                        $html = $proc->transformToXML($this->xml);
                
                        return View::make('admin.listeLicenceXSL')->with('html', $html);
                    } else {
                        // Log or handle errors
                        error_log("XML file could not be loaded.");
                    }
                }

}
