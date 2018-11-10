@extends('layout.app', ["current" => "servico"])

@section('body')


    <div class="card border">
        <div class="card-body row">
                <div class="col-md-9">
                    <h5 class="card-title">Registro de Serviços</h5>
                </div>
                
                <div class="col-md-3">
                <form action="servicos/pesquisar" method="GET" class="form form-inline">
                    <!--@csrf-->
                        <div class="form-group">
                            <input type="text" class="form-control" id="serv" name="serv"  placeholder="código do serviço">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sn">Pesquisar</button>
                    </form>
                </div>
        </div>

@if(count($serv) > 0)
            <div class="table-responsive-sm">
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Diagnostico</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Mão de Obra</th>
                        <th scope="col" >Forma de Pagamento</th>
                        <th scope="col">Total</th>
                        <th scope="col">Pago</th>
                        <th scope="col">Veículo</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($serv as $s)
                    <tr scope="row">
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
            </div> 
@endif
        </div>
        <div class="card-footer">
            <a href="/veiculos/novo" class="btn btn-sm btn-primary" role="button">Adicionar veiculo</a>
        </div>
    </div>

@endsection