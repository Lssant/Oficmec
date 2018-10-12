@extends('layout.app', ["current" => 'pessoas'])

@section('body')
    
    <div class="card border">
        <div class="card-body">
        <form action="/pessoa/{{$pes->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomePessoa">Nome</label>
                <input type="text" class="form-control" name="nomePessoa" value="{{$pes->nome}}" id="nomePessoa" placeholder=" digite o nome da pessoa">

                <label for="tipoPessoa">Categoria</label>
                <select class="form-control" name="tipoPessoa" id="tipoPessoa">
@foreach ($tpPes as $p)
                <option value="{{$p->id}}">{{$p->nome}}</option>
@endforeach
                </select>

                <label for="cpfPessoa">cpf</label>
                <input type="text" class="form-control" name="cpfPessoa" value="{{$pes->cpf}}" id="cpfPessoa" placeholder=" informe o cpf">

                <label for="RGPessoa">RG</label>
                <input type="text" class="form-control" name="RGPessoa" value="{{$pes->RG}}" id="RGPessoa" placeholder="informe o RG">

                <label for="emailPessoa">E-mail</label>
                <input type="text" class="form-control" name="emailPessoa" value="{{$pes->email}}" id="emailPessoa" placeholder="informe o E-mail para contato">

                <label for="statusPessoa">Status</label>
                <select class="form-control" name="statusPessoa" id="statusPessoa" >
                    <option value="OK">OK</option>
                    <option value="NOK">NOK</option>
                </select>
                <!--<input type="text" class="form-control" name="statusPessoa" id="statusPessoa" placeholder="status">-->

                <label for="numeroPessoa">Telefone</label>
            @if($pes->telefone == "[]")
                <input type="text" class="form-control" name="numeroPessoa" id="numeroPessoa" placeholder="informe o telefone para contato">
            @else
                @foreach ($pes->telefone as $n)
                    <input type="text" class="form-control" name="numeroPessoa" value="{{$n->numero}}" id="numeroPessoa" placeholder="informe o telefone para contato">    
                @endforeach
            @endif
                <label for="tipoTelPessoa">Tipo do Telefone</label>
                <select class="form-control"  name="tipoTelPessoa" id="tipoTelPessoa" >
        @foreach ($tpTel as $t)
                                <option value="{{$t->id}}">{{$t->nome}}</option>
        @endforeach
                </select>
                <!--<input type="text" class="form-control" name="tipoTelPessoa" id="tipoTelPessoa" placeholder="status">-->

                <label for="logradouroPessoa">Rua</label>
                <input type="text" class="form-control" name="logradouroPessoa" value="{{$pes->endereco->logradouro}}" id="logradouroPessoa" placeholder="Rua : ...">

                <label for="numEndPessoa">Numero</label>
                <input type="text" class="form-control" name="numEndPessoa" value="{{$pes->endereco->numero}}" id="numEndPessoa" placeholder="nº ...">

                <label for="complementoPessoa">Complemento</label>
                <input type="text" class="form-control" name="complementoPessoa" value="{{$pes->endereco->complemento}}" id="complementoPessoa" placeholder="ex: apartamento A bloco 3">

                <label for="bairroPessoa">Bairro</label>
                <input type="text" class="form-control" name="bairroPessoa" value="{{$pes->endereco->bairro}}" id="bairroPessoa" placeholder=" Ex; Centro">

                <label for="cepPessoa">CEP</label>
                <input type="text" class="form-control" name="cepPessoa" value="{{$pes->endereco->cep}}" id="cepPessoa" placeholder="informe o CEP">

                <label for="refPessoa">Ponto de Referencia</label>
                <input type="text" class="form-control" name="refPessoa" value="{{$pes->endereco->PtReferencia}}" id="refPessoa" placeholder="Ex: proximo a ...">
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sa">Cancel</button>
        </form>
    </div>
</div>


@endsection