@extends('layout')

@section('content')
    <h1>Usuários</h1>
    <a href="{{ route('create') }}">Criar novo usuario</a>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>   
    @endif
    <table>
        <tr>
            <th>Nome</th>
            <th>Nome de usuario</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <a href="{{ route('show', $user) }}">Ver</a>
                    <a href="{{ route('edit', $user) }}">Editar</a>
                    <form action="{{ route('destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection