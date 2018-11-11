<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">

      <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home</a>
      </li>

      <li @if($current=="servicos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/servicos">Serviços</a>
      </li>

      <li @if($current=="clientes") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/pessoa">Clientes</a>
      </li>
      <li @if($current=="clientes") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/pecas">Peças</a>
      </li>
    
    </ul>
  </div>
</nav>