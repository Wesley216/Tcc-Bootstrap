<?php
require_once '../../config/bd.php';
require_once '../../config/sessment/select_sessment.php';
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <title>Avaliações</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
     <!-- Meta tags Obrigatórias -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <link rel="stylesheet" href="../../css/resulta.css">
</head>

<body>
<header class="sticky-top">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../../index.html"><img style="height: 90px; position: relative; top: -10px;" src="../../img/logo-paddock12.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav mr-bar">
        <a class="nav-item nav-link let" href="../../index.html">Home <span class="sr-only">(Página atual)</span></a>

        <li class="nav-item">
          <a class="nav-link let" href="../../pag/Menu/menu.html">Cardapio</a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link let" href="../../pag/delivery.html">Delivery</a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link let" href="../../pag/onde estamos.html">Onde estamos</a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link active let" href="../../php/avaliação/sessment.php">Avaliações</a>
        </li>
      </ul>
    </div>
 </nav>
</header>

<div class="bg-danger container esp div ta">
  <p class="text-center text-white fonte">Avalições</p>
</div>

<section class="container esp">
  <article class="card-deck">
  
<?php
      while ($tbl = mysqli_fetch_array($result)) {
    
          echo " <div class='card text-center text-white bg-transparent border-light mb-3'>
          <div class='card-header border-light'>Avaliações</div>
                      <div class='card-body'>";
          echo "<h5 class='card-title text-center'> Feedback: ".$tbl['comment']."</h5>";
          echo "<h5 class='card-text text-center'> Estrelas: ".$tbl['star']."</h5>
                </div>
            </div>";
      } 
?>      
  </article>
</section>

<div class="container bg-danger esp div ta">
  <p class="text-white text-center fonte">Avaliação</p>
</div>

<form method="post" action="../../php/commit.php" class="container ">

  <div class="voto lef container esp">
    <label>
      <input type="radio" name="star" value="1">
      <i class="fa"></i>
    </label>

    <label>
      <input type="radio" name="star" value="2">
      <i class="fa"></i>
    </label>

    <label>
      <input type="radio" name="star" value="3">
      <i class="fa"></i>
    </label>

    <label>
      <input type="radio" name="star" value="4">
      <i class="fa"></i>
    </label>

    <label>
      <input type="radio" name="star" value="5">
      <i class="fa"></i>
    </label> 
  </div>

  <div class="form-row">
    <div class="form-group col">
    <label for="comment">Avaliação:</label>
    <textarea class="form-control" id="comment" name="comment" cols="2"></textarea>
    </div>
  </div>
  
 <button type="submit" class="btn btn-outline-danger btn-block">Avaliar</button>
</form>

<footer class="pt-5 my-md-10 pt-md-10 bg-dark esp">
 <div class="row">
  <div class="col-12 col-md">
    <img class="mb-2" src="../../img/logo-paddock12.png" height="86">
    <small class="d-block mb-3 text-muted">© 2020</small>
  </div>

  <div class="col-6 col-md">
          <h5 class="text-white">Contatos</h5>
          <ul class="list-unstyled text-small">
            <li><p class="text-white" ><i class='fas fa-phone-alt'></i> (21)3777-0591</p></li>
            <li><p class="text-white"><i class="fab fa-whatsapp" style="font-size: 20px;"></i> (21)97624-5283</p></li>
            <li><p class="text-white">Av.automovel clube, Duque de Caxias 1155, Santa Cruz da Serra</p></li>
          </ul>
        </div>

  <div class="col-6 col-md">
    <h5 class="text-white">Redes Sociais</h5>
    <ul class="list-unstyled text-small">
      <li><a class="text-muted" href="https://pt-br.facebook.com/pages/category/Pizza-Place/Paddock-826669250698077/"><img class="img" src="../../img/rede sociais/icone f.png"></a></li>
      <li><a class="text-muted" href="https://www.instagram.com/paddockpizzas"><img class="img" src="../../img/rede sociais/logo insta.png"></a></li>
    </ul>
  </div>
 </div>
</footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/ava.js"></script>
</body>
</html>