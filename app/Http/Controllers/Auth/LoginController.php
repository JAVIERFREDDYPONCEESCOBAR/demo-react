<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Modelo\admin\User;
use App\Modelo\admin\Role;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //public $redirectTo ='/admin';
    //protected $redirectTo = RouteServiceProvider::HOME;
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function redirectTo(){


        if(Auth::user()->hasRole('admin')){
            $this->redirectTo = route('admin.users.index');
            return $this->redirectTo;
        }


        if(Auth::user()->hasRole('cliente')){
            $this->redirectTo = route('usuario.usuario.index');
            return $this->redirectTo;
        }

        $this->redirectTo = route('login');
        return $this->redirectTo;

    }



}