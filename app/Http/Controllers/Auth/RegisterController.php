<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CANDIDAT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required'],
            'date_naissance' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', Auth::id() ? '' : 'unique:users'],
            'tel' => ['required', 'string', 'max:20', Auth::id() ? '' : 'unique:users'],
            'password' => [Auth::id() ? '' : 'required', 'string', 'min:8', Auth::id() ? '' : 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (Auth::check()) {
            return User::updateOrCreate(
                ['id' => Auth::id()],
                [
                    'nom' => $data['nom'],
                    'prenom' => $data['prenom'],
                    'genre' => $data['sexe'],
                    'date_naissance' => $data['date_naissance'],
                    'email' => $data['email'],
                    'tel' => $data['tel'],
                ]
            );
        }

        return User::Create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'genre' => $data['sexe'],
            'date_naissance' => $data['date_naissance'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
