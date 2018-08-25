@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" placeholder="Cliente">
           
                <label for="endCliente">Endereço</label>
                <input type="text" class="form-control" name="endCliente" id="endCliente" placeholder="Endereço">
            
                <label for="RGCliente">RG</label>
                <input type="text" class="form-control" name="RGCliente" id="RGCliente" placeholder="RG">
                
                <label for="cpfCliente">cpf</label>
                <input type="text" class="form-control" name="cpfCliente" id="cpfCliente" placeholder="cpf">
                        
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">Cancel</button>
        </form>
    </div>
</div> 

@endsection