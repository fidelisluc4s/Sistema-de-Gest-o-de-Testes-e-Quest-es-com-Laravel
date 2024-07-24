@extends('layouts.main')

@section('content')
    <form action="{{route('tests.update',['test' => $test->id])}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="name" class="form-control" value="{{$test->name}}">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="pontuacaoForApprove" class="form-control" value="{{$test->pontuacaoForApprove}}">
        </div>

        <button class="btn btn-lg btn-success">Alterar Teste</button>
    </form>

    <form action="{{route('tests.destroy',['test' => $test->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar Teste" class="btn btn-lg btn-danger">
    </form>
@endsection
