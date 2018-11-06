@extends('layout.app', ["current" =>"Pessoas"])

@section('body')
    
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Pessoas</h5>
@if(count($pes) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>cpf</th>
                        <th>status</th>
                        <th>Telefone</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($pes as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nome}}</td>
                        <td>{{$p->cpf}}</td>
                        <td>{{$p->status}}</td>
                        <td>
                            <select name="telefone" id="telefone" class="form-control form-control-sm">
                                @foreach ($p->telefone as $tel)
                                    <option value="{{$tel->id}}">{{$tel->id}} - {{$tel->numero}}</option>
                                @endforeach
                            </select>
                        </td>
                    {{--<td>{{$p->tipo_pessoa_id}}</td>
                        <td>{{$p->telefone}}</td>
                        <td>{{$p->endereco->logradouro}}</td>
                     --}}
                        <td>
                        <a href="/pessoa/cliente/{{$p->id}}" class="btn btn-sm btn-outline-success">Exibir</a>
                        <a href="/pessoa/editar/{{$p->id}}" class="btn btn-sm btn-outline-warning">Editar</a>
                        <a href="/pessoa/apagar/{{$p->id}}" class="btn btn-sm btn-outline-danger">Apagar</a>
                        </td> 
                    </tr>
    @endforeach
                </tbody>
            </table> 
@endif
        </div>
        <div class="card-footer">
            <a href="/pessoa/novo" class="btn btn-sm btn-primary" role="button">Adicionar nova pessoa</a>
        </div>
    </div>

@endsection