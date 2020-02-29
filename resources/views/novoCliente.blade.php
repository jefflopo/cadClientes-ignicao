@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCliente">Nome do Cliente</label>
                <input type="text" class="form-control" name="nomeCliente"
                       id="nomeCliente" placeholder="Cliente">
                <label for="emailCliente">E-mail do Cliente</label>
                <input type="text" class="form-control" name="emailCliente"
                       id="emailCliente" placeholder="E-mail do CLiente">

                <label for="checkbox">Principais Formas de Pagamentos:</label><br>
                <input type="checkbox" name="tags[]" value="Cartão de Crédito"> Cartão de Crédito <br>
                <input type="checkbox" name="tags[]" value="Dinheiro"> Dinheiro <br>
                <input type="checkbox" name="tags[]" value="Cheque"> Cheque <br>
                <input type="checkbox" name="tags[]" value="Bitcoin"> Bitcoin <br><br>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection
