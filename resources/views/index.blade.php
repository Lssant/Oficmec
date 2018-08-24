@extends('layout.app')

@section('body')
    <div class="jumbotron bg-ligth border border-secondary">
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
                        <a href="#" class="btn btn-primary">cadastre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
