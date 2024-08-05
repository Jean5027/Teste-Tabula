@extends('layout')

@section('content')
    <h1>Criar usuário</h1>
    <form action="{{ route('create') }}" method="POST" class="input">
        @csrf
        <label>Nome</label>
        <input type="text" name="name" required>
        <label>Nome de usuario</label>
        <input type="text" name="username" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Telefone</label>
        <input type="text" name="phone" required>
        <label>Senha</label>
        <input type="password" name="password" required>
        <label>Endereço</label>
        <textarea name="address" required></textarea>
        <button type="submit" class="create">Criar</button>
    </form>
@endsection

