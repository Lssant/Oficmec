@extends('layout.app', ["current" => 'veiculo'])

@section('body')
    
    <div class="card border">
        <div class="card-body">
        <form action="/veiculos/{{$veic->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="modeloVeic">Modelo</label>
                <input type="text" class="form-control" name="modeloVeic" value="{{$veic->modelo}}" id="modeloVeic" placeholder=" modelo do veículo">

                <label for="marcaVeic">Marca</label>
                <input type="text" class="form-control" name="marcaVeic" value="{{$veic->marca}}" id="marcaVeic" placeholder=" Marca do veículo">

                <label for="corVeic">Cor</label>
                <input type="text" class="form-control" name="corVeic" value="{{$veic->cor}}" id="corVeic" placeholder="Cor do veículo">

                <label for="anoVeic">Ano do modelo do veículo</label>
                <input type="text" class="form-control" name="anoVeic" value="{{$veic->ano}}" id="anoVeic" placeholder=" Ano de fabricação do veículo">

                <label for="combustivelVeic">Combustível</label>
                <select class="form-control" name="combustivelVeic" id="combustivelVeic">
                    <option value="">Selecione um tipo de combustível</option>
                    <option value="gasolina">Gasolina</option>
                    <option value="etanol">Etanol</option>
                    <option value="flex">Flex</option>
                    <option value="diesel">Diesel</option>
                    <option value="gas">Gás</option>
                </select>

                <label for="placaVeic">Placa</label>
                <input type="text" class="form-control" name="placaVeic" value="{{$veic->placa}}" id="placaVeic" placeholder=" Placa do veículo">

                <label for="cliVeic">Nome</label>
                <input type="text" class="form-control" name="cliVeic" value="{{$veic->pessoa_id}}" id="cliVeic" placeholder=" id cliente">


            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">Cancel</button>
        </form>
    </div>
</div>


@endsection