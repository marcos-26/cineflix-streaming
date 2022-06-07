<?php include "cabecalho.php"?>
<?php

$filme1 = ["titulo" =>"Vingadores: Ultimato",
          "nota" => 8.6,
          "sinopse" => "I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.",
          "poster" => "https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
        ];

$filme2 = ["titulo" =>"Sonic",
          "nota" => 9,7,
          "sinopse" => "Dr. Robotnik volta, desta vez com um novo parceiro, Knuckles, em busca de uma esmeralda que tem o poder de construir e destruir civilizações.",
          "poster" => "https://www.themoviedb.org/t/p/original/f4SvCKIUrC2cDR7Xo4k1kaGAqQ2.jpg"
        ];

$filmes = [$filme1, $filme2];

?>


</head>

<body>
  <nav class="nav-extended purple lighten-1">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class=active><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastar</a></li>
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
        <!-- CARDS AUTOMATICO, COM LUPE DE REPETIÇÃO-->
  <div class="row">
    <?php foreach ($filmes as $filme) : ?>
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="<?php echo $filme["poster"];?>">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?php echo $filme["nota"];?></p>
          <span class="card-title"><?php echo $filme["titulo"];?></span>
          <p><?php echo $filme["sinopse"];?></p>
        </div>
      </div>
    </div>
    <?php endforeach ?>

        <!-- CARD MANUAL -->
    <!-- <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="<?php echo $filme2["poster"];?>">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?php echo $filme2["nota"];?></p>
          <span class="card-title"><?php echo $filme2["titulo"];?></span>
          <p><?php echo $filme2["sinopse"];?></p>
        </div>
      </div>
    </div> -->


  </div>
</body>

</html>