@extends('layout.app',["current" => "tipoTelefone"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/tipotelefone" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipoTelefone">Tipo do Telefone</label>
                <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="tipoTelefone" id="tipoTelefone" placeholder="Tipo do telefone">
@if ($errors->has('nome'))
                <div class="invalid-feedback">
                    {{ $errors->first('nome') }}
                </div>
@endif
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">Cancel</button>
            <h5>cancel NOK</h5>
        </form>

    </div>

</div>
    
@endsection