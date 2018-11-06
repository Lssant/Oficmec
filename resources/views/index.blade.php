@extends('layout.app', ["current" =>"home"])

@section('body')
<div class="card border">
            <div class="card-body">
                 <form action="pessoa/buscar" method="GET" class="form form-inline">
                 <!--@csrf-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="serv" name="serv"  placeholder="pesquisar id servico">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sn">Pesquisar</button>
                </form>
            </div>
        </div>

    <div class="jumbotron bg-ligth border border-secondary rounded">

        <!--
        <div class="cols">
                <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                </ul>
                      
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">

                        <h5 class="card-title"> Cadastro </h5>
                        <p class="card=text">
                            Aqui cadstra os produtos
                        </p>
                        <a href="#" class="btn btn-primary">cadastro</a>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
@endsection
