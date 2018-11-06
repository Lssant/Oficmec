@extends('layout.app', ["current" => "servico"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/veiculos/veiculos" method="POST">
            @csrf
            <div class="form-group">

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputEmail4">Cliente</label>
                        <input type="text" class="form-control" name="idCli" id="nome" placeholder="Nome" readonly>
                    </div>
        
                    <div class="form-group col-md-4">
                        <label for="inputEmail">CPF</label>
                        <input type="text" class="form-control"   id="cpf" placeholder="cpf" readonly>
                    </div>
                </div>

                <label for="modeloVeic">Cliente</label>
                <input type="text" class="form-control" name="modeloVeic" id="modeloVeic" placeholder="Modelo do veículo">

                <label for="marcaVeic">Veiculo</label>
                <input type="text" class="form-control" name="marcaVeic" id="marcaVeic" placeholder=" Marca do veículo">

                <label for="corVeic">Cor</label>
                <input type="text" class="form-control" name="corVeic" id="corVeic" placeholder="informe a cor do veículo">

                <label for="anoVeic">Ano do veículo</label>
                <input type="text" class="form-control" name="anoVeic" id="anoVeic" placeholder="informe o ano do veículo">

                <label for="combustivelVeic">Combustível</label>
                <select class="form-control" name="combustivelVeic" id="combustivelVeic">
                    <option value=""></option>
                    <option value="gasolina">Gasolina</option>
                    <option value="etanol">Etanol</option>
                    <option value="flex">Flex</option>
                    <option value="diesel">Diesel</option>
                    <option value="gas">Gás</option>
                </select>

                <label for="placaVeic">Placa</label>
                <input type="text" class="form-control" name="placaVeic" id="placaVeic" placeholder="informe a placa do veículo">

                
                <label for="cliVeic">cod cliente</label>
                <input type="text" class="form-control" name="cliVeic" id="cliVeic" placeholder="cod cliente">


            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">cancel</button>
        </form>
    </div>
</div>
    

@endsection