@extends('layout.app', ["current" =>"Pessoas"])

@section('body')
    
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cliente - {{$pes->id}}</h5>
            
        <form action="/servicos/novo" method="GET">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputEmail4">Nome</label>
                <input type="text" class="form-control" name="idCli" value="{{$pes->id}}" id="nome" placeholder="nome" readonly>
            </div>
        
                <div class="form-group col-md-4">
                    <label for="inputEmail">CPF</label>
                    <input type="text" class="form-control" value="{{$pes->cpf}}"  id="cpf" placeholder="cpf" readonly>
                </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputEmail">E-mail</label>
                <input type="text" class="form-control" value="{{$pes->email}}" id="email" placeholder="E-mail" readonly>
            </div>
            <div class="form-group col-md-4">
                    <label for="inputPassword4">RG</label>
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
                <label for="inputEmail">Bairro</label>
                <input type="text" class="form-control" value="{{$pes->endereco->bairro}}" id="Nome" placeholder="Bairro" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Rua</label>
                <input type="text" class="form-control" value="{{$pes->endereco->logradouro}}" id="Nome" placeholder="Rua" readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="inputEmail">número</label>
                <input type="text" class="form-control" value="{{$pes->endereco->numero}}" id="Nome" placeholder="número" readonly>
            </div>
        </div>
        <div class="form-row">
            
            <div class="form-group col-md-4">
                <label for="inputEmail">CEP</label>
                <input type="text" class="form-control" value="{{$pes->endereco->cep}}" id="Nome" placeholder="CEP" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail">Complemento</label>
                <input type="text" class="form-control" value="{{$pes->endereco->complemento}}" id="Nome" placeholder="Complemento" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail">Ponto de Referência</label>
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