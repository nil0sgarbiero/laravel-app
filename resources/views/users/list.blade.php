@extends('dashboard.layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listagem de Usuários</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar Usuário</a>
    </div>
    <hr/>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('info'))
        <div class="alert alert-info" role="alert">
            {{ Session::get('info') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-secondary">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Usuário</th>
            <th>Logix</th>
            <th>Data de Nascimento</th>
            <th>Setor</th>
            <th>Admin</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @if($users->count() > 0)
            @foreach($users as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->name }}</td>
                    <td class="align-middle">{{ $rs->email }}</td>
                    <td class="align-middle">{{ $rs->phone }}</td>
                    <td class="align-middle">{{ $rs->address }}</td>
                    <td class="align-middle">{{ $rs->username }}</td>
                    <td class="align-middle">{{ $rs->logixuser }}</td>
                    <td class="align-middle">{{ $rs->birth_date }}</td>
                    <td class="align-middle">{{ $rs->sector }}</td>
                    <td class="align-middle">{{ $rs->admin }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            {{--                            <a href="#" type="button" class="btn btn-secondary">Mostrar</a>--}}
                            <a href="{{ route('users.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                            <form action="{{ route('users.destroy', $rs->id) }}" method="POST" type="button"
                                  class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Deletar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Nenhum Usuário encontrado</td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection
