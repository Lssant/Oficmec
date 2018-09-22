@extends('layout.app', ["current" =>"tipoPessoas"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categoria de Pessoas</h5>
<!-- $tpPessoa vem do controller index -->
@if(count($tpPessoa) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                </tr>
            </thead>
            <tbody>
    @foreach ($tpPessoa as $tp)
                <tr>
                    <td>{{$tp->id}}</td>
                    <td>{{$tp->nome}}</td>
                    <td>
                        <a href="/tipopessoa/editar/{{$tp->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/tipopessoa/apagar/{{$tp->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/tipopessoa/novo" class="btn btn-sm btn-primary" role="button">Novo Tipo</a>
    </div>
</div>

@endsection