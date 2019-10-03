@extends('layouts.app')
@section('content')

@component('layouts.components.header')
    @slot('title')
        Clientes 
    @endslot
    @slot('subtitle')
        Lista de clientes cadastrados
    @endslot
@endcomponent

<div class="container">
    <div class="row">
        <div class="col-12">
            @include('cliente.partials._buttons')
            <hr>
        </div>
        <div class="col-12">
            @include('cliente.partials._table')
        </div>
        <div class="col-12">
            <hr>
            @include('cliente.partials._buttons')
        </div>  
    </div>         
</div>
@endsection
