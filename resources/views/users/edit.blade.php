@extends('dashboard.layout.dashboard')

@section('body')
    <h1 class="mb-0">Editar Usuário!</h1>
    <hr/>
    <form action="{{ route('users.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $users->name }}">
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ $users->email }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Telefone" value="{{ $users->phone }}">
            </div>
            <div class="col">
                <input type="text" name="address" class="form-control" placeholder="Endereço" value="{{ $users->address }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="username" class="form-control" placeholder="Usuário" value="{{ $users->username }}">
            </div>
            <div class="col">
                <input type="text" name="logixuser" class="form-control" placeholder="Usuário do Logix" value="{{ $users->logixuser }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="birth_date" class="form-control" placeholder="Data de Nascimento" value="{{ $users->birth_date }}">
            </div>
            <div class="col">
                <input type="password" name="password" class="form-control" placeholder="Senha">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="sector" class="form-control" placeholder="Setor" value="{{ $users->sector}}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Atualizar</button>
            </div>
        </div>
    </form>
@endsection
