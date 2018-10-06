@extends('layout.app', ["current" => "pessoa"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/pessoa" method="POST">
            @csrf
            <div class="form-group">

                <label for="nomePessoa">Nome</label>
                <input type="text" class="form-control" name="nomePessoa" id="nomePessoa" placeholder=" digite o nome da pessoa">
@if ($errors->has('nome'))
                <div class="invalid-feedback">
                    {{ $errors->first('nome') }}
                </div>
@endif
         
                <label for="tipoPessoa">Categoria</label>
                <select class="form-control"  name="tipoPessoa" id="tipoPessoa" >

            @foreach ($tpPes as $p)
                    <option value="{{$p->id}}">{{$p->nome}}</option>
            @endforeach
                </select>

                <label for="cpfPessoa">cpf</label>
                <input type="text" class="form-control" name="cpfPessoa" id="cpfPessoa" placeholder=" informe o cpf">

                <label for="RGPessoa">RG</label>
                <input type="text" class="form-control" name="RGPessoa" id="RGPessoa" placeholder="informe o RG">

                <label for="emailPessoa">E-mail</label>
                <input type="text" class="form-control" name="emailPessoa" id="emailPessoa" placeholder="informe o E-mail para contato">

                <label for="statusPessoa">Status</label>
                <select class="form-control" name="statusPessoa" id="statusPessoa" >
                    <option value="OK">OK</option>
                    <option value="OK">NOK</option>
                </select>
                <!--<input type="text" class="form-control" name="statusPessoa" id="statusPessoa" placeholder="status">-->

                <label for="numeroPessoa">Telefone</label>
                <input type="text" class="form-control" name="numeroPessoa" id="numeroPessoa" placeholder="informe o telefone para contato">

                <label for="tipoTelPessoa">Tipo do Telefone</label>
                <select class="form-control"  name="tipoTelPessoa" id="tipoTelPessoa" >

                        @foreach ($tpTel as $t)
                                <option value="{{$t->id}}">{{$t->nome}}</option>
                        @endforeach
                </select>
                <!--<input type="text" class="form-control" name="tipoTelPessoa" id="tipoTelPessoa" placeholder="status">-->

                <label for="logradouroPessoa">Rua</label>
                <input type="text" class="form-control" name="logradouroPessoa" id="logradouroPessoa" placeholder="Rua : ...">

                <label for="numeroPessoa">Numero</label>
                <input type="text" class="form-control" name="numeroPessoa" id="numeroPessoa" placeholder="nº ...">

                <label for="complementoPessoa">Complemento</label>
                <input type="text" class="form-control" name="complementoPessoa" id="complementoPessoa" placeholder="ex: apartamento A bloco 3">

                <label for="bairroPessoa">Bairro</label>
                <input type="text" class="form-control" name="bairroPessoa" id="bairroPessoa" placeholder=" Ex; Centro">

                <label for="cepPessoa">CEP</label>
                <input type="text" class="form-control" name="cepPessoa" id="cepPessoa" placeholder="informe o CEP">

                <label for="refPessoa">Ponto de Referencia</label>
                <input type="text" class="form-control" name="refPessoa" id="refPessoa" placeholder="Ex: proximo a ...">
            
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">cancel</button>
        </form>
    </div>
</div>
    
@endsection