@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card-border ">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Clientes</h5>
@if(count($clis) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Cliente</th>
                    <th>E-mail do Cliente</th>
                    <th>Formas de Pagamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
        @foreach($clis as $cli)
                <tr>
                    <td>{{$cli->id}}</td>
                    <td>{{$cli->nome}}</td>
                    <td>{{$cli->email}}</td>
                    <td>{{$cli->tags}}</td>
                    <td>
                        <a href="/clientes/editar/{{$cli->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/clientes/apagar/{{$cli->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
@else
<h6>Nenhum Cliente Cadastrado!!!</h6>
@endif
    </div>
    <div class="card-footer">
        <a href="/clientes/novo" class="btn btn-sm btn-primary" role="button">Novo Cliente</a>
    </div>
</div>

@endsection
