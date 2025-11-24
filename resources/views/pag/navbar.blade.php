<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold text-light" href="{{ route('home') }}">RAVST</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Início</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('aplicacao') }}">Aplicação</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('equipe') }}">Equipe</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('contato') }}">Contato</a>
        </li>

        {{-- SOMENTE USUÁRIO LOGADO --}}
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        @endauth

      </ul>

      {{-- LADO DIREITO DA NAVBAR --}}
      <ul class="navbar-nav mb-2 mb-lg-0">

        {{-- VISÍVEL SOMENTE PARA VISITANTES (não logados) --}}
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Cadastro</a>
        </li>
        @endguest

        {{-- VISÍVEL SOMENTE PARA USUÁRIOS LOGADOS --}}
        @auth
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="nav-link btn btn-link text-light" style="cursor:pointer;">
                Sair
              </button>
          </form>
        </li>
        @endauth

      </ul>

    </div>
  </div>
</nav>
