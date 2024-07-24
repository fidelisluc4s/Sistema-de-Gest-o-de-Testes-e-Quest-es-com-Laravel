@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('tests.index') }}" class="btn btn-success float-right">Meus Testes</a>
            <h2>{{$test->name}}</h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <table class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th>Enunciado</th>
                <th>Questao A</th>
                <th>Questao B</th>
                <th>Questao C</th>
                <th>Questao D</th>
                <th>Questao E</th>
                <th>Gabarito</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
    @foreach($questions as $question)

            <tr>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{$question->enunciado}}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{$question->respA}}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{$question->respB}}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{$question->respC}}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{$question->respD}}</td>
                <td style="word-wrap:break-word; min-width:180px; max-width:180px;">{{$question->respE}}</td>
                <td>{{$question->respCorreta}}</td>
                <td>{{$question->valorTotalQuestao}}</td>
            </tr>

    @endforeach
        </tbody>
    </table>
@endsection
