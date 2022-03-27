@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')

<h1>Novo Usuários</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('users._partials.form')
        <button type="submit" class="rounded-full bg-red-5">
            Gravar
        </button>
    </form>
@endsection
