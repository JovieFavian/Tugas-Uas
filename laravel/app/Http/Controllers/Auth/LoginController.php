<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/barang';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	public function showLoginForm()
    {
        return view('auth/login');
    }
	
	public function login(Request $request)
    {

        $credentials = [
            'username' => $request['username'],
            'password' => $request['password'],
        ];

       
        if(Auth::attempt($credentials)) {
            
            return redirect()->to('/barang'); 

        }else{
            return redirect()->back()->with('error', 'Pastikan Username & Password anda benar ');
        }
    }
}