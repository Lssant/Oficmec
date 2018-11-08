@extends('layout.app', ["current" => "servico"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Solicitação de Serviço </h5>

        <form action="/servicos/servico" method="POST">
            @csrf
            <div class="form-group">

                <h6 class="card-title">Informações do cliente:</h6>
                <div class="form-row">
<!-- infos basicas para serviço-->
                    <div class="form-group col-md-1">
                        <label for="idCli">Cód</label>
                        <input type="text" class="form-control form-control-sm" name="cliId" id="cliId" value="{{$cliente->id}}" placeholder="código" readonly>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="cliente">Cliente</label>
                        <input type="text" class="form-control form-control-sm" id="cliente" value="{{$cliente->nome}}" placeholder="Nome" readonly>
                    </div>
                    <div class="form-group col-md-3">

                        <label for="telefone">Telefone</label>
                        <select id="telefone" class="form-control form-control-sm" readonly>
                            @foreach($cliente->telefone as $i)
                                <option>{{$i->numero}}</option>       
                            @endforeach 
                        </select>

                    </div>
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control form-control-sm"   id="cpf" value="{{$cliente->cpf}}" placeholder="cpf" readonly>
                    </div>
                </div>
        <!--veículo -->
        <h6 class="card-title">Informações do Veículo:</h6>
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <label for="idVeic">Cód</label>
                        <input type="text" class="form-control form-control-sm" value="{{$veiculo->id}}" name="idVeic" id="idVeic" placeholder=" Marca do veículo" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marcaVeic">Veículo</label>
                        <input type="text" class="form-control form-control-sm" value="{{$veiculo->modelo}}" id="marcaVeic" placeholder=" Marca do veículo" readonly>
                    </div>
        
                    <div class="form-group col-md-4">
                        <label for="corVeic">Cor</label>
                        <input type="text" class="form-control form-control-sm" value="{{$veiculo->cor}}"id="corVeic" placeholder="informe a cor do veículo" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="placaVeic">Placa</label>
                        <input type="text" class="form-control form-control-sm" value="{{$veiculo->placa}}" id="placaVeic" placeholder="informe a placa do veículo" readonly>
                    </div>
                </div>
<!-- cadastro de serviço -->
        <h6 class="card-title">Criar Serviço:</h6>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="diagnostico">Diagnostico</label>
                        <input type="text" class="form-control form-control-sm" name="diagnostico" id="diagnostico" placeholder="Serviço Solicitado ou Constatado" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control form-control-sm" name="descricao" id="descricao" placeholder="Descrição e observações" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="formaPagamento">Forma de pagamento</label>
                        <input type="text" class="form-control form-control-sm" name="formaPagamento" id="formaPagamento" placeholder="Forma de Pagamento" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="maoObra">Mão de obra</label>
                        <input type="text" class="form-control form-control-sm" name="maoObra" id="maoObra" placeholder="Valor da Mão de Obra" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="total">Total</label>
                        <input type="text" class="form-control form-control-sm" name="total" id="total" placeholder="Valor Total do Serviço" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="pago">Pago</label>
                        <input type="text" class="form-control form-control-sm" name="pago" id="pago" placeholder="Valor Pago" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    
                    </div>
                </div>
                <h5 class="card-title">(nostrar  em show servicos)Pagamentos - </h5>
            
                <!-- -->

                <p>
                    <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Mostrar Pagamentos
                    </button>
                </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            
                                <label for="inputEmail">pagamento</label>
                           
                        </div>
                    </div>

                <!-- -->

            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">cancel</button>
        </form>
    </div>
</div>
    

@endsection