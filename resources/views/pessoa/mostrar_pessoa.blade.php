@extends('layout.app', ["current" =>"Pessoas"])

@section('body')
    
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cliente </h5>
            
        <form action="/servicos/novo" method="GET">
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="idCli">Código</label>
                <input type="text" class="form-control" name="idCli" value="{{$pes->id}}" id="nome" placeholder="nome" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="{{$pes->nome}}" id="nome" placeholder="nome" readonly>
            </div>
        
                <div class="form-group col-md-5">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" value="{{$pes->cpf}}"  id="cpf" placeholder="cpf" readonly>
                </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" value="{{$pes->email}}" id="email" placeholder="E-mail" readonly>
            </div>
            <div class="form-group col-md-4">
                    <label for="RG">RG</label>
                    <input type="text" class="form-control" value="{{$pes->RG}}" id="RG" placeholder="RG" readonly>
                </div>
        </div>
        <!-- -->

        <p>
            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Mostrar telefones
            </button>
        </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    @foreach($pes->telefone as $i=>$p)
                        <label for="inputEmail">telefone {{$i=+1}}: {{$p->numero}}</label>
                    @endforeach
                </div>
            </div>

        <!-- -->
        <h5>Endereço</h5>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" value="{{$pes->endereco->bairro}}" id="bairro" placeholder="Bairro" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="logradouro">Rua</label>
                <input type="text" class="form-control" value="{{$pes->endereco->logradouro}}" id="logradouro" placeholder="Rua" readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="numero">número</label>
                <input type="text" class="form-control" value="{{$pes->endereco->numero}}" id="numero" placeholder="Número" readonly>
            </div>
        </div>
        <div class="form-row">
            
            <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" value="{{$pes->endereco->cep}}" id="cep" placeholder="CEP" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" value="{{$pes->endereco->complemento}}" id="complemento" placeholder="Complemento" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="PtReferencia">Ponto de Referência</label>
                <input type="text" class="form-control"  id="PtReferencia" value="{{$pes->endereco->PtReferencia}}"  placeholder="Ponto de Referência" readonly>
            </div>
        </div>
        <!-- -->
        <h5>Veiculos</h5>
        
            @foreach($pes->veiculo as $i=>$v)
                <div class="form-check form-col">
                    <input class="form-check-input" type="radio" name="idVeic" id="pesVeic" value="{{$v->id}}">
                    <label class="form-check-label" for="exampleRadios1">
                        {{$i=+1}}: {{$v->modelo}} - {{$v->cor}} - {{$v->combustivel}}
                    </label>
                </div>    
          
            @endforeach

        <!-- -->
        <hr>
        <button type="submit" class="btn btn-primary btn-sm">Criar serviço</button>
        </form>

    </div>
</div>

@endsection