<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
//        $isAdmin = Auth::user()->admin;
//        dd($isAdmin);
        $this->middleware(function ($request, $next) {
            $isAdmin = auth()->user()->admin;
            view()->share('isAdmin', $isAdmin);
            //dd(auth()->user()->id);
            return $next($request);
        });
    }
    public function index()
    {
        $auth = User::findOrFail($id);
        $userid = auth()->user()->id;
        //dd($auth);
        // Verifique se o usuário autenticado é administrador OU é o proprietário do perfil
        if (!auth()->user()->admin && $auth->id !== $userid) {
            return redirect()->route('dashboard')->with('error', 'Acesso não autorizado');
        }

        $users = User::orderBy('created_at', 'DESC')->get();

        return view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'username' => 'required|min:4',
        ];

        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'O e-mail informado já está em uso.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo :min caracteres.',
            'username.required' => 'O campo usuario é obrigatório',
            'username.min' => 'O usuario deve ter no mínimo :min caracteres.',
        ];

        $validatedData = $request->validate($rules, $messages);
        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'Usuário Adicionado com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::findOrFail($id);

        return view('users.edit', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $auth = User::findOrFail($id);
        $userid = auth()->user()->id;
        //dd($auth);
        // Verifique se o usuário autenticado é administrador OU é o proprietário do perfil
        if (!auth()->user()->admin && $auth->id !== $userid) {
            return redirect()->route('dashboard')->with('error', 'Acesso não autorizado'); // Acesso não autorizado
        }

        $users = User::findOrFail($id);

        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'username' => 'required|min:4|unique:users,username,' . $id,
        ];

        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'O e-mail informado já está em uso.',
            'username.required' => 'O campo usuário é obrigatório.',
            'username.min' => 'O usuário deve ter no mínimo :min caracteres.',
            'username.unique' => 'O nome de usuário informado já está em uso.',
        ];

        $validatedData = $request->validate($rules, $messages);

//        $users = User::findOrFail($id);
//
//        $users->update($request->all());
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if (!empty($request->input('password'))) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->username = $request->input('username');
        $user->logixuser = $request->input('logixuser');
        $user->birth_date = $request->input('bith_date');
        $user->sector = $request->input('sector');
        //$user->update($request->all());

        if ($user->isDirty()) {
            $user->save();
            return redirect()->route('users.index')->with('success', 'Usuário Atualizado com Sucesso');
        }
        return redirect()->route('users.index')->with('info', 'Nenhuma alteração foi feita.');
        //return redirect()->route('users.index')->with('success', 'Usuário Atualizado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->route('users.index')->with('success', 'Usuário deletado com Sucesso');
    }
}
