@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
    <form action="/tipopessoa/{{$tpes->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipoPessoa">Categoria de pessoa</label>
            <input type="text" class="form-control" name="tipoPessoa" value="{{$tpes->nome}}" id="tipoPessoa" placeholder="categoria da pessoa">
           
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <a href="/tipopessoa" class="btn btn-danger btn-sn">Cancelar</a>
            <!-- <button type="cancel" class="btn btn-danger btn-sa">Cancel</button> -->
                  
        </form>
    </div>
</div> 

@endsection