@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('tests.create') }}" class="btn btn-success float-right">Criar Teste</a>
            <h2>Meus Testes</h2>
            <div class="clearfix"></div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Autor</th>
            <th>Criado em</th>
            <th>Questões</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($tests as $test)
            @if(Auth::user()->id == $test->user_id)
            <tr>
                <td>{{ $test->id }}</td>
                <td><a href="{{route('tests.show', ['test' => $test])}}">{{ $test->name }}</a> </td>
                <td>{{ $test->user->name }}</td>
                <td>{{ date('d/m/Y H:i:s', strtotime($test->created_at)) }}</td>
                <td class="align-content-center">
                    @foreach($questions as $question)
                        @if($question['test_id'] == $test->id)
                            {{$question->enunciado}} - <a
                                href="{{ route('questions.edit', ['question' => $question->id]) }}"
                                class="btn btn-sm btn-primary">Editar</a><br>
                        @endif
                    @endforeach
                </td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('tests.edit', ['test' => $test->id]) }}"
                           class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{ route('questions.create', ['test' => $test->id]) }}" class="btn btn-sm btn-info">Criar
                            Questao</a>
                        <form action="{{ route('tests.destroy', ['test' => $test->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remover" class="btn btn-sm btn-danger">
                        </form>
                    </div>
                </td>
            </tr>
            @endif
        @empty
            <tr>
                <td colspan="5">Nenhum registro cadastrado!</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
