@extends('layouts.main')

@section('content')
    <form action="{{route('questions.update',['question' => $question->id])}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Enunciado</label>
            <input type="text" name="enunciado" class="form-control" value="{{$question->enunciado}}">
        </div>
        <div class="form-group">
            <label>Letra A</label>
            <input type="text" name="respA" class="form-control" value="{{$question->respA}}">
        </div>
        <div class="form-group">
            <label>Letra B</label>
            <input type="text" name="respB" class="form-control" value="{{$question->respB}}">
        </div>
        <div class="form-group">
            <label>Letra C</label>
            <input type="text" name="respC" class="form-control" value="{{$question->respC}}">
        </div>
        <div class="form-group">
            <label>Letra D</label>
            <input type="text" name="respD" class="form-control" value="{{$question->respD}}">
        </div>
        <div class="form-group">
            <label>Letra E</label>
            <input type="text" name="respE" class="form-control" value="{{$question->respE}}">
        </div>
            <label>Gabarito</label>
            <input type="text" name="respCorreta" class="form-control" value="{{$question->respCorreta}}">

        <div class="form-group">
            <label>Valor da questao</label>
            <input type="text" name="valorTotalQuestao" class="form-control" value="{{$question->valorTotalQuestao}}">
        </div>
            <button class="btn btn-lg btn-success">Alterar Questao</button>
        </form>
    <form action="{{route('questions.destroy',['question' => $question->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar Questao" class="btn btn-lg btn-danger">
    </form>
@endsection
