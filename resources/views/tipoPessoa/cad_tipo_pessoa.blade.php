@extends('layout.app', ["current" => "tipoPessoa"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/tipopessoa" method="POST">
            @csrf
            <div class="form-group">
                <!-- for será usado no request do controller -->
                <label for="tipoPessoa">Nome</label>
            <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="tipoPessoa" id="tipoPessoa" placeholder="Nome da categoria da pessoa">
@if($errors->has('nome'))
                <!-- o {{ $errors->has('nome') ? 'is-invalid' : '' }} é pra aparecer a validação -->
                <div class="invalid-feedback">
    {{ $errors->first('nome') }}     
                </div>
@endif
 
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