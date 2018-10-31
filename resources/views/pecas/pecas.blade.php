@extends('layout.app', ["current" => "pecas"])

@section('body')


    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Peças</h5>
@if(count($pec) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($pec as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nome}}</td>
                        <td>{{$p->descricao}}</td>
                        <td>{{$p->quantidade}}</td>
                        <td>{{$p->valor}}</td>

                        <td>
                        <a href="/pecas/editar/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/pecas/apagar/{{$p->id}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td> 
                    </tr>
    @endforeach
                </tbody>
            </table> 
@endif
        </div>
        <div class="card-footer">
            <a href="/pecas/novo" class="btn btn-sm btn-primary" role="button">Adicionar Peças</a>
        </div>
    </div>

@endsection