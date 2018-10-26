@extends('layout.app', ["current" => "veiculos"])

@section('body')


    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Veículos</h5>
@if(count($veic) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Ano</th>
                        <th>Combustivel</th>
                        <th>Placa</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($veic as $v)
                    <tr>
                        <td>{{$v->id}}</td>
                        <td>{{$v->marca}}</td>
                        <td>{{$v->modelo}}</td>
                        <td>{{$v->cor}}</td>
                        <td>{{$v->ano}}</td>
                        <td>{{$v->combustivel}}</td>
                        <td>{{$v->placa}}</td>


                        <td>
                        <a href="/pessoa/editar/{{$v->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/pessoa/apagar/{{$v->id}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td> 
                    </tr>
    @endforeach
                </tbody>
            </table> 
@endif
        </div>
        <div class="card-footer">
            <a href="/pessoa/novo" class="btn btn-sm btn-primary" role="button">Adicionar nova pessoa</a>
        </div>
    </div>

@endsection