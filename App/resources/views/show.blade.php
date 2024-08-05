@extends('layout')


@section('content')
    <h1>Ver usuário</h1>
    <p>Nome: {{ $user->name }}</p>
    <p>Nome de usuario: {{ $user->username }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Telefone: {{ $user->phone }}</p>
    <p>Endereço: {{ $user->address }}</p>
    <a href="{{ route('index') }}">Voltar</a>
@endsection