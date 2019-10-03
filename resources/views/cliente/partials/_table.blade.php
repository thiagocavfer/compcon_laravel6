<table class="table table-striped table-hover dttable">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>TELEFONE</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>
                    <a
                        href="javascript:void(0)"
                        class="btn btn-sm btn-outline-secondary link"
                        data-toggle="tooltip" data-placement="bottom" title="Atualizar dados do cliente"
                    >
                        <i class="far fa-edit"></i>
                    </a>
                </td>
            </tr>
        @endforeach    
    </tbody>
</table>