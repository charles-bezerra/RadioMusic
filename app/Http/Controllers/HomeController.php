<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function login(Request $request){
    //     $request->validate([
    //         'email' => 'required|email',
    //         'senha' => 'required'
    //     ]);
    //     $credentials = ['email'=>$request->email, 'senha'=>$request->senha];
    //     if(Auth::attempt($credentials)){
    //         return redirect()->route('home');
    //     }
    //     else{
    //         return redirect()->back()->with('errors', 'Acesso negado para essas credencias');
    //     }

    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
