<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;



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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function login(Request $request){

        $credentials = ['email'=>$request->email, 'password'=>$request->senha];
        
        if(Auth::attempt($credentials)){
            $user = User::get()->where('email',$credentials['email'])->firsh();
            
            // if (isset($user)) {
            //     if ($user->tipo == "user") {
            //         return view();
            //     }
            // }
            
            return view('usuario.inicio');
        }

        else{
            return Redirect::to( route('login', ['error' => 'Senha ou email está incorreto!']) );
        }

    }
}
