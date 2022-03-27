@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1class="text-2x1 font-semibold leading-tigh py-2">Lista de Usuários {{ $user->name }}</h1>
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
    </ul>
@endsection