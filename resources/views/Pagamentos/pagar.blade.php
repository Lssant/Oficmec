@extends('layout.app', ["current" => "pagamento"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/pagamentos/pagamento" method="POST">
            @csrf
            <div class="form-group row">
                
                <div class='col-sm-6'>
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição do pagamento">
                </div>
                <div class='col-sm-3'>
                <label for="valor">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor" placeholder="valor pago">
                </div>
                <div class='col-sm-3'>
                <label for="idServ">Código do serviço</label>
                <input type="text" class="form-control" value="{{$id}}" name="idServ" id="idServ" placeholder="Nome da categoria da pessoa"readonly>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">Cancel</button>
        </form>
    </div>
</div> 

@endsection