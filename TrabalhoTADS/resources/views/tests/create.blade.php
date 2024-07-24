@extends('layouts.main')

@section('content')
    <form action="{{route('tests.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <label>Pont.Aprovado</label>
            <input type="text" name="pontuacaoForApprove" class="form-control" value="{{old('pontuacaoForApprove')}}">
        </div>
        <div>
            <input type="text" name="user_id" style="display: none" value="{{Auth::user()->id}}">
        </div>
        <button class="btn btn-lg btn-success">Criar Teste</button>
    </form>
@endsection
