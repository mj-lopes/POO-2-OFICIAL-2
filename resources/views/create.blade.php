@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <h4 class="col-md-6">
                            Nova Questão
                        </h4>                        
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <h1> Cadastrar Questão</h1>
            
                    <form method="POST" action="{{ route('salvarQuestao') }}">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Coeficiente A</label>
                                <input type="text" name="coef_a" class="form-control" id="exampleInputEmail1">                            
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Coeficiente B</label>
                                <input type="text" name="coef_b" class="form-control" d="exampleFormControlTextarea1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Coeficiente C</label>
                                <input type="text" name="coef_c" class="form-control" d="exampleFormControlTextarea1" >
                            </div>                                                  
                            
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

            

