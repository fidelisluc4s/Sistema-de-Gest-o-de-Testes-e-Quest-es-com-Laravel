@extends('layouts.main')

@section('title','Alterar Questao')

@section('content')
    <form action="{{route('questions.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Enunciado</label>
            <input type="text" name="enunciado" class="form-control" value="{{old('enunciado')}}">
        </div>
        <div class="form-group">
            <label>Letra A</label>
            <input type="text" name="respA" class="form-control" value="{{old('respA')}}">
        </div>
        <div class="form-group">
            <label>Letra B</label>
            <input type="text" name="respB" class="form-control" value="{{old('respB')}}">
        </div>
        <div class="form-group">
            <label>Letra C</label>
            <input type="text" name="respC" class="form-control" value="{{old('respC')}}">
        </div>
        <div class="form-group">
            <label>Letra D</label>
            <input type="text" name="respD" class="form-control" value="{{old('respD')}}">
        </div>
        <div class="form-group">
            <label>Letra E</label>
            <input type="text" name="respE" class="form-control" value="{{old('respE')}}">
        </div>
        <div class="form-group">
            <label>Gabarito</label>
            <input type="text" name="respCorreta" class="form-control" value="{{old('respCorreta')}}">

        <div class="form-group">
            <label>Valor da questao</label>
            <input type="text" name="valorTotalQuestao" class="form-control" value="{{old('valorTotalQuestao')}}">
        </div>
        <div>
            <input type="text" name="test_id" style="display: none" value="{{$_GET['test']}}">
        </div>
        <button class="btn btn-lg btn-success">Criar Questao</button>
        </div>
    </form>
@endsection
