@extends('layout.app', ["current" => "pagamento"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/pagamentos/pagamento" method="POST">
            @csrf
            <div class="form-group row">
                <div class='col-sm-2'>
                    <label for="idServ">Código do serviço</label>
                    <input type="text" class="form-control" value="{{$id}}" name="idServ" id="idServ" placeholder="Nome da categoria da pessoa"readonly>
                </div>
                <div class='col-sm-2'>
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" name="valor" id="valor" placeholder="valor pago">
                </div>
                <div class='col-sm-8'>
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição do pagamento">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/servicos/exibir/{{$id}}" class="btn btn-sm btn-danger">Voltar</a>
        </form>
    </div>
</div> 

@endsection