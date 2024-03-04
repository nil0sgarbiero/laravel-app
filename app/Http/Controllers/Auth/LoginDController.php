<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginDController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');
        //dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida, redirecione para a página desejada
            return redirect('/dashboard');
        } else {
            // Autenticação falhou, redirecione de volta para a página de login com uma mensagem de erro
            return redirect()->back()->withErrors(['login' => 'Credenciais inválidas.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
