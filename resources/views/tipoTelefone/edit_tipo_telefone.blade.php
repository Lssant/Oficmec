@extends('layout.app', ["current" => 'tipoTelefone'])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/tipotelefone/{{$tpTel->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipotelefone">Tipo de telefone</label>
            <input type="text" class="form-control" name="tipotelefone" value="{{$tpTel->nome}}" id="tipotelefone" placeholder="tipo do telefone">
            </div>
            <button type="submit" class="btn btn-primary btn-sn"> Salvar</button>
            <a href="/tipotelefone" class="btn btn-danger btn-sn">Cancelar</a>

        </form>

    </div>

</div>
    
@endsection