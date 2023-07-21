<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $isAdmin = Auth::user()->admin;
        //dd($isAdmin);
        $viewName = 'dashboard.principal';
        return view('dashboard.index', compact('isAdmin', 'viewName'));
    }
    public function CadastroItem()
    {
        $isAdmin = Auth::user()->admin;
        //dd($isAdmin);
        $viewName = 'dashboard.MAM.cadastroitem';
        return view('dashboard.index', compact('isAdmin', 'viewName'));
    }

}
