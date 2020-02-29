@extends('layout.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card-text">
                            Aqui voce cadastra todos os clientes do sistema.
                    </p>
                    <a href="/clientes/novo" class="btn btn-primary">Cadastro do Cliente</a>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
