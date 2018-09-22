@extends('layout.app', ["current" => "tipoTelefone"]) <!-- importando layout das views  -->

@section('body')
    
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de tipos de telefones</h5>
<!-- $tpPessoa vem do controller index -->
@if (count($tpTel) > 0)
    <table class="table table-ordered table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Tipo do Telefone</th>
            </tr>
        </thead>
        <tbody>
@foreach ($tpTel as $tt)
            <tr>
                <td>{{$tt->id}}</td>
                <td>{{$tt->nome}}</td>
                <td>
                    <a href="/tipotelefone/editar/{{$tt->id}}" class="btn btn-sm btn-primary">Editar</a>
                    <a href="/tipotelefone/apagar/{{$tt->id}}" class="btn btn-sm btn-danger">Apagar</a>
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/tipotelefone/novo" class="btn btn-sm btn-primary" role="button">Novo tipo</a>
    </div>
</div>

@endsection