@extends('layout.app', ["current" => "pagamento"])

@section('body')

<div class="card border">
    <div class="card-body">

        <div class="form-group row">
            <div class='col-sm-1'>
                <label for="idServ"><h4>Serviço: {{$id}}</h5></label>
            </div class='col-sm-1'>

            <div class="col-sm-6"> 
                <button class="btn btn-sm btn-info" type="button" data-toggle="collapse" data-target="#collapsePecas" aria-expanded="false" aria-controls="collapseExample">
                    Peças utilizadas
                </button>
            </div>
            <!-- 
            <div  class="col-sm-5"> 
                <form action="pessoa/buscar" method="GET" class="form form-inline">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="serv" name="serv"  placeholder="pesquisar id peça">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sn">Pesquisar</button>
                </form>
            </div>
            -->   

        </div>
                <p>
                    <div class="col">
                        <div class="collapse" id="collapsePecas">
                            <div class="card card-body">
                                @foreach($servico->peca as $index=>$p)
                                    <label for="inputEmail">{{$index=+1}} - {{$p->nome}} - Descrição:  {{$p->descricao}} - Quantidade: {{$p->pivot->quantidade}}</label>
                                @endforeach   
                            </div>
                        </div>
                    </div>
                </p>

@if(count($pec) > 0)

                @csrf
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Estoque</th>
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
                        <a href="/pecas/inserir/{{$id}}/{{$p->id}}" class="btn btn-sm btn-outline-success">Selecionar</a>
                        </td> 
                    </tr>
@endforeach
                </tbody>
            </table>

@endif


<!--
        <form action="/pecas/inserir" method="POST">
            @csrf
                <div class='col-sm-4'>
                    <label for="nomePeca">Nome da peça</label>
                    <input type="text" class="form-control" name="nomePeca" id="nomePeca" placeholder="Nome da peça">
                </div>
                <div class='col-sm-6'>  
                    <label for="descriPeca">Descrição</label>
                    <input type="text" class="form-control" name="descriPeca" id="descriPeca" placeholder=" Descrição da peça">
                </div>
            </div>
            <div class="form-group row">
                <div class='col-sm-6'>
                    <label for="quantPeca">Quantidade</label>
                    <input type="text" class="form-control" name="quantPeca" id="quantPeca" placeholder="a quantidade de peça é 0">
                </div>
                <div class='col-sm-6'>
                    <label for="valPeca">Valor unitario (R$)</label>
                    <input type="text" class="form-control" name="valPeca" id="valPeca" placeholder="Valor da peça">
                </div>
            </div>


                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/servicos/exibir/{{$id}}" class="btn btn-sm btn-danger">Voltar</a>

        </form>
-->
    </div>
</div> 

@endsection