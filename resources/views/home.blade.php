@extends('layouts.app')
@section('content')
@component('layouts.components.header')
    @slot('title')
        Seja Bem-vindo 
    @endslot
@endcomponent
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="list-group">
                <a 
                    href="{{route('cliente.index')}}" 
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                >
                    Cadastro de Clientes
                    <span class="badge badge-primary badge-pill">Ativo</span>
                </a>
                <a 
                    href="#" 
                    class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center"
                >
                    Cadastro de Produtos
                    <span class="badge badge-secondary badge-pill">Inativo</span>
                </a>
                <a 
                    href="#" 
                    class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center">
                    Cadastro de Fornecedores
                    <span class="badge badge-secondary badge-pill">Inativo</span>
                </a>
                <a 
                    href="#" 
                    class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center" 
                    tabindex="-1" 
                    aria-disabled="true">
                    Registro de Vendas
                    <span class="badge badge-secondary badge-pill">Inativo</span>
                </a>
            </div>
        </div>
    </div>         
</div>
@endsection
