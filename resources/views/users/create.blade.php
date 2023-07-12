@extends('dashboard.layout.app')

@section('body')
    <h1 class="mb-0">Novo Usuário!</h1>
    <hr/>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Telefone">
            </div>
            <div class="col">
                <input type="text" name="address" class="form-control" placeholder="Endereço">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="username" class="form-control" placeholder="Usuário">
            </div>
            <div class="col">
                <input type="text" name="logixuser" class="form-control" placeholder="Usuário do Logix">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="birth_date" class="form-control" placeholder="Data de Nascimento">
            </div>
            <div class="col">
                <input type="password" name="password" class="form-control" placeholder="Senha">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="sector" class="form-control" placeholder="Setor">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection
