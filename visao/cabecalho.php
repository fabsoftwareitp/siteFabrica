<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="#">FabSoftware</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./">Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./usuario">Usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./projeto">Projetos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./posts">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./paginas">Sobre</a>
      </li>
      <?php if (isset($_SESSION["acesso"])) :?>
        <li class="nav-item">
          <a class="nav-link" href="./login/logout">Desconectar</a>
        </li>
      <?php endif;?>
    </ul>
  </div>
  </div>
</nav>