@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes/{{$cli->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCliente">Nome do Cliente</label>
                <input type="text" class="form-control" name="nomeCliente"
                       value="{{$cli->nome}}"
                       id="nomeCliente" placeholder="Cliente">
                <label for="emailCliente">E-mail do Cliente</label>
                <input type="text" class="form-control" name="emailCliente"
                       value="{{$cli->email}}"
                       id="emailCliente" placeholder="E-mail do Cliente">
                </select>

                <label for="checkbox">Principais Formas de Pagamentos:</label><br>

                <input type="checkbox" name="tags[]" value="Cartão de Crédito"
                    @foreach($tags as $key => $val) {{$val === 'Cartão de Crédito' ? 'checked' : ''}} @endforeach>
                Cartão de Crédito <br>
                <input type="checkbox" name="tags[]" value="Dinheiro"
                     @foreach($tags as $key => $val) {{$val === 'Dinheiro' ? 'checked' : ''}} @endforeach>
                Dinheiro <br>
                <input type="checkbox" name="tags[]" value="Cheque"
                    @foreach($tags as $key => $val) {{$val === 'Cheque' ? 'checked' : ''}} @endforeach>
                Cheque <br>
                <input type="checkbox" name="tags[]" value="Bitcoin"
                    @foreach($tags as $key => $val) {{$val === 'Bitcoin' ? 'checked' : ''}} @endforeach>
                Bitcoin <br><br>

            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection
