@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCliente">Nome</label>
            <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nomeCliente" id="nomeCliente" placeholder="Cliente">
@if($errors->has('nome'))
                <!-- o {{ $errors->has('nome') ? 'is-invalid' : '' }} é pra aparecer a validação -->
                <div class="invalid-feedback">
    {{ $errors->first('nome') }}     
                </div>
@endif
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

@if($errors->any())
    <div class="card-footer">
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
    </div>
@endif

</div> 

@if(isset($errors))
{{ var_dump($errors) }}
@endif

@endsection