@extends('layouts.app')
@section('content')
@component('layouts.components.header')
    @slot('title')
        Cadastrar clientes 
    @endslot
    @slot('subtitle')
        Preencha o formulário abaixo com os dados do novo cliente.
    @endslot
@endcomponent
<div class="container">
    <div class="row">
        <div class="col-12">
            {{ Form::open(['route' => 'cliente.store', 'method' => 'post']) }}
                @include('cliente.partials._form')
                <hr>
                <div class="row">
                    <div class="col-6">
                         <button class="btn btn-primary">Salvar dados do cliente</button>
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{route('cliente.index')}}" class="btn btn-light">
                            Voltar à lista de clientes
                        </a>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
