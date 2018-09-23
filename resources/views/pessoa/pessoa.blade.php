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
                        <th>numero</th>
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
                        @foreach ($p->telefone as $tel)
                            <td>{{$tel->numero}}</td>
                        @endforeach
                        
                    {{--<td>{{$p->tipo_pessoa_id}}</td>
                        <td>{{$p->telefone}}</td>
                        <td>{{$p->endereco->logradouro}}</td>
                     --}}
                        <td>
                        <a href="/pessoa/editar/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/pessoa/apagar/{{$p->id}}" class="btn btn-sm btn-danger">Excluir</a>
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