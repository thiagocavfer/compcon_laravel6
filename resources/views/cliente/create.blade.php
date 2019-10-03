@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de clientes</div>
                <div class="card-body">
                    {{ Form::open(['route' => 'cliente.store', 'method' => 'post']) }}
                        
                        <div class="row">
                            <div class="col">
                                <label for="">Nome</label>
                                <br>
                                {{ Form::text('nome') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">E-mail</label>
                                <br>
                                {{ Form::email('email') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Telefone</label>
                                <br>
                                {{ Form::text('telefone') }}
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Salvar</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
