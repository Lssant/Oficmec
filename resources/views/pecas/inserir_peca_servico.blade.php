@extends('layout.app', ["current" => "pagamento"])

@section('body')

<div class="card border">
    <div class="card-body">

        <div class="form-group row">
            <div class='col-sm-1'>
                <label for="idServ"><h4>Serviço: {{$sid}}</h5></label>
            </div class='col-sm-1'>


        </div>
        <form action="/pecas/inserir" method="GET">
            <!--@csrf-->
                            <div class="form-group">
                                <input type="hidden" value="{{$sid}}" name="servicoId" id="servicoId">
                                <input type="hidden" value="{{$peca->id}}" name="pecaId" id="pecaId">
                                <input type="number" min="0" class="form-control" name="quantidade" id="quantidade" placeholder="Selecione a quantidade">
                            </div>
                        
                        
                            <button type="submit" class="btn btn-sm btn-outline-success">Inserir</button>
                        
                        </form> 
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Estoque</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$peca->id}}</td>
                        <td>{{$peca->nome}}</td>
                        <td>{{$peca->descricao}}</td>
                        <td>{{$peca->quantidade}}</td>
                        <td>{{$peca->valor}}</td>
                        <!--
                        <td>
                        <form action="/pecas/inserir" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" value="{{$sid}}" name="servicoId" id="servicoId">
                                <input type="hidden" value="{{$peca->id}}" name="pecaId" id="pecaId">
                                <input type="number" min="0" class="form-control" name="quantidade" id="quantidade" placeholder="Selecione a quantidade">
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-sm btn-outline-success">Inserir</button>
                        </td>
                        </form> 
                        -->
                    </tr>

                </tbody>
            </table>

    </div>
</div> 

@endsection