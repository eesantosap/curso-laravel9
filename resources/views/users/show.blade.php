@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Informações sobre: {{ $user->name }}</h1>
    <ul class="py-5">
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
    </ul>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">
            DELETAR
        </button>
    </form>
@endsection