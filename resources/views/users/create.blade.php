@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Usuários</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('users._partials.form')
        <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            GRAVAR
        </button>
    </form>
@endsection
