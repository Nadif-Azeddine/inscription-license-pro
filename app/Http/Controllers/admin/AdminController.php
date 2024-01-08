<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidature;
use App\Models\Licence;
class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function listCandidature()
    {
        $condidatures =Candidature::all(); 
        return view('admin.Candidature', compact('condidatures'));
    }
    public function listUsers()
    {
        $Users =User::all(); 
        return view('admin.listeUsers', compact('Users'));
    }
    public function Listlicence()
    {
        $licences =Licence::all(); 
        return view('admin.listeLicence', compact('licences'));
    }
}
