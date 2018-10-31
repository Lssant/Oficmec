@extends('layout.app', ["current" => "pecas"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/pecas/pecas" method="POST">
            @csrf
            <div class="form-group">

                <label for="nomePeca">Nome da peça</label>
                <input type="text" class="form-control" name="nomePeca" id="nomePeca" placeholder="Nome da peça">

                <label for="descriPeca">Descrição</label>
                <input type="text" class="form-control" name="descriPeca" id="descriPeca" placeholder=" Descrição da peça">

                <label for="quantPeca">Quantidade</label>
                <input type="text" class="form-control" name="quantPeca" id="quantPeca" placeholder="a quantidade de peça é 0">

                <label for="valPeca">Valor unitario (R$)</label>
                <input type="text" class="form-control" name="valPeca" id="valPeca" placeholder="Valor da peça">

            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">cancel</button>
        </form>
    </div>
</div>
    

@endsection