@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de clientes</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>E-MAIL</th>
                                <th>TELEFONE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->telefone}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Não existem clientes cadastrados.</td>
                                </tr>
                            @endforelse    
                        </tbody>
                    </table>
                    <hr>
                    <a href="{{route('cliente.create')}}" class="btn btn-light">Cadastrar cliente</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
