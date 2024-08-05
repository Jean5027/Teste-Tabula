@extends('layout')

@section('content')
    <h1>Editar usuário</h1>
    <form action="{{ route('update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <label>Nome de usuario</label>
        <input type="text" name="username" value="{{ $user->username }}" required>
        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <label>Telefone</label>
        <input type="text" name="phone" value="{{ $user->phone }}" required>
        <label>Senha</label>
        <input type="password" name="password">
        <label>Endereço</label>
        <textarea name="address" required>{{ $user->address }}</textarea>
        <button type="submit">Atualizar</button>
    </form>
@endsection
