@extends('layouts.main')

@section('content')
{{--    <div class="row">--}}
{{--        <div class="col-sm-12">--}}
{{--            <a href="{{ route('questions.create') }}" class="btn btn-success float-right">Criar Questao</a>--}}
            <h2>Minhas Questoes</h2>
{{--            <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome do Teste</th>
            <th>Enunciado</th>
            <th>Pergunta A</th>
            <th>Pergunta B</th>
            <th>Pergunta C</th>
            <th>Pergunta D</th>
            <th>Pergunta E</th>
            <th>Resposta</th>
            <th>Valor da questao</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($questions as $question)
            @foreach($tests as $test)
            @if($test->user_id == Auth::user()->id and $test['id'] == $question->test_id)
            <tr>
                <td>{{ $question->id }}</td>
                <td>
                    @foreach($tests as $test)
                        @if($test['id'] == $question->test_id)
                            {{$test->name}}
                        @endif
                    @endforeach
                </td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{ $question->enunciado }}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{ $question->respA }}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{ $question->respB }}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{ $question->respC }}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{ $question->respD }}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{ $question->respE }}</td>
                <td>{{ $question->respCorreta }}</td>
                <td>{{ $question->valorTotalQuestao }}</td>
                <td>{{ date('d/m/Y H:i:s', strtotime($question->created_at)) }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('questions.edit', ['question' => $question->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('questions.destroy', ['question' => $question->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remover" class="btn btn-sm btn-danger">
                        </form>
                    </div>
                </td>
            </tr>
            @endif
            @endforeach
        @empty
            <tr>
                <td colspan="5">Nenhum registro cadastrado!</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
