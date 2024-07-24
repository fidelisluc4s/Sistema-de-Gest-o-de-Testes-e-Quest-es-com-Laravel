@extends('layouts.main')


@section('content')

    <h1>Bem vindo(a) {{ Auth::user()->name }} a melhor plataforma para cadastro de Provas e testes.</h1>

@endsection
