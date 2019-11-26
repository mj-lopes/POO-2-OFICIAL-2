@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <h4 class="col-md-6">
                            Listagem
                        </h4>
                        <div class="text-right col-md-6">
                            <a href="{{ route('novaQuestao')}}">Nova questao</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
        <h1> Listagem de questões</h1>
      
        <table class = "table">
            <thead class = "thead-dark">
                <tr>
                    <th>Questão</th>
                    <th>Delta</th>
                    <th>Valor de X1</th>
                    <th>Valor de x2</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($questoes as $questao)           
            <tr> 
                <td>{{$questao->question}}</td>
                <td>{{$questao->delta}}</td>
                <td>{{$questao->x1}}</td>
                <td>{{$questao->x2}}</td>           
            </tr>                  
            @endforeach 
            </tbody>  
        </table>  
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection

