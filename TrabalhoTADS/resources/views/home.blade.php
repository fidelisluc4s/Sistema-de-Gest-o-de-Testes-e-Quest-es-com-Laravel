@extends('layouts.main')

@section('content')

    @guest()
    <h1>Bem vindo(a) a melhor plataforma para cadastro de Provas e testes.</h1>
    @endguest

    @auth()
        <h1>Bem vindo(a) a melhor plataforma para cadastro de Provas e testes para.</h1>
        <br>
        <h2> {{ Auth::user()->name }} aqui voce começa a construir o futuro da educação!</h2>
    @endauth

@endsection
