<?php include "cabecalho.php"?>

<body>
  <nav class="nav-extended purple lighten-1">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li a class=active><a href="cadastrar.php">Cadastar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>CineFlix</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a class="active">Todos</a></li>
        <li class="tab"><a href="#test2" href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

<div class="row">
  <form action="inserirFilme.php" method="POST">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Cadastrar Filme</span>

          <!-- input do titulo do filme -->
          <div class="row">
            <div class="input-field col s12">
              <input id="titulo" type="text" class="validate" name="titulo" require>
              <label for="titulo">Título do Filme</label>
            </div>
          </div>

          <!-- input da Sinopse -->
          <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                  <label for="sinopse">Sinopse</label>
                </div>
              </div>
            </form>
          </div>

          <!-- input da nota -->
          <div class="row">
            <div class="input-field col s4">
              <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" require>
              <label for="nota">Nota</label>
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn purple lighten-1">
              <span>Capa</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="poster">
            </div>
          </div>

        </div>



        <div class="card-action">
          <a class="waves-effect waves-ligth btn grey" href="galeria.php">Cancelar</a>
          <button type="submit" class="waves-effect waves-ligth btn purple">Cadastrar</button>
        </div>
      </div>
    </div>
  </form>
  </div>
</body>

</html>