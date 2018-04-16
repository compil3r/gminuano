<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
	public function __construct() 
	{
		$this->middleware('guest:admin', ['except' => ['logout']]);
	}

    public function showLoginForm() 
    {
    	return view('admin.auth.login');
    }

    public function login(Request $request) 
    {
    	//Verificando os dados recebidos
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
	    	//Se sucesso redireciona para admin
    		return redirect()->intended(route('admin.home'));
    	}

    	//Se não tem sucesso, redireciona de volta
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
