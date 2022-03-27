@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">
        Lista de Usuários
        (<a href="{{ route('users.create') }}" class="bg-blue">+</a>)
    </h1>
    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button class="shadow bg-purple-500 hover:bg-purple">Pesquisar</button>
    </form>
    <table class="min-w-full leading-normal shadow-md rounded-full">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-20">Nome</th>
                <th class="px-5 py-3 border-b-2 border-gray-20">e-Mail</th>
                <th class="px-5 py-3 border-b-2 border-gray-20">Editar</th>
                <th class="px-5 py-3 border-b-2 border-gray-20">Detalhes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                
                <tr>
                    <td class="px-5 py-5 border-b border-gray-20">{{ $user->name }}</td>
                    <td class="px-5 py-5 border-b border-gray-20">{{ $user->email }}</td>
                    <td class="px-5 py-5 border-b border-gray-20">
                        <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-20">
                        <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>        

@endsection