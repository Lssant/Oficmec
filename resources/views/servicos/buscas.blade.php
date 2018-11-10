@extends('layout.app', ["current" =>"servico"])

@section('body')


    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Registro de Serviços</h5>
@if(count($serv) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Diagnostico</th>
                        <th>Descrição</th>
                        <th>Mão de Obra</th>
                        <th>Forma de Pagamento</th>
                        <th>Total</th>
                        <th>Pago</th>
                        <th>Veículo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($serv as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->diagnostico}}</td>
                        <td>{{$s->descricao}}</td>
                        <td>{{$s->mao_obra}}</td>
                        <td>{{$s->forma_pgto}}</td>
                        <td>{{$s->total}}</td>
                        <td>{{$s->pago}}</td>
                        <td>{{$s->veiculo->modelo}}</td>


                        <td>
                        <a href="/servicos/exibir/{{$s->id}}" class="btn btn-sm btn-outline-success">Exibir</a>
                        <a href="/servicos/editar/{{$s->id}}" class="btn btn-sm btn-outline-warning">Editar</a>
                        <a href="/servicos/apagar/{{$s->id}}" class="btn btn-sm btn-outline-danger">Excluir</a>
                        </td> 
                    </tr>
    @endforeach
                </tbody>
            </table> 
@endif
        </div>
        <div class="card-footer">
            <a href="/veiculos/novo" class="btn btn-sm btn-primary" role="button">Adicionar veiculo</a>
        </div>
    </div>

@endsection