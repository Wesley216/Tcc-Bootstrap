<?php
require_once '../config/bd.php';
require_once '../config/sele_ped.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Meu cardapio</title>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="../css/resultado.css">
</head>

<body>
<!--MENU-->
<header class="stickyy-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.html"><img style="height: 90px; position: relative; top: -10px;" src="../img/logo-paddock12.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav mr-bar">
        <a class="nav-item nav-link  let" href="../index.html">Home <span class="sr-only">(Página atual)</span></a>

        <li class="nav-item">
          <a class="nav-link active let" href="../pag/Menu/menu.html">Cardapio</a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link let" href="../pag/delivery.html">Delivery</a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link let" href="../pag/onde estamos.html">Onde estamos</a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link let" href="../php/avaliação/sessment.php">Avaliações</a>
        </li>
      </ul>
    </div>
</nav>
</header>
    
<div class="container bg-danger esp div ta">
  <p class="text-center text-white fonte">Meus Pedidos</p>
</div>
    
<section class="container esp">
  <div class="table-responsive">
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Rua</th>
              <th scope="col">Bairro</th>
              <th scope="col">Número</th>
              <th scope="col">Pedido</th>
              <th scope="col">Tamanho/Preço</th>
            </tr>
        </thead>

<?php

  while ($tbl = mysqli_fetch_array($result)) {
		
    echo "<tbody>
    <tr>
      <td>".$tbl['nome'];"</td>";

    echo "<td>".$tbl['rua'];"</td>";
    echo "<td>".$tbl['bairro'];"</td>";
    echo "<td>".$tbl['numero'];"</td>";
    echo "<td>".$tbl['tipo_pizza'];"</td>";
    echo "<td>".$tbl['tipo'];"</td>";
    "</tr>";
  }

  while ($tbl = mysqli_fetch_array($resulta)) {
		
    echo "<tbody>
    <tr>
      <td>".$tbl['nome'];"</td>";

    echo "<td>".$tbl['rua'];"</td>";
    echo "<td>".$tbl['bairro'];"</td>";
    echo "<td>".$tbl['numero'];"</td>";
    echo "<td>".$tbl['sobremesa'];"</td>";
    echo "<td>".$tbl['tipo_sobremesa'];"</td>";
    "</tr>";
  }

  while ($tbl = mysqli_fetch_array($res)) {
		
    echo "<tbody>
    <tr>
      <td>".$tbl['nome'];"</td>";

    echo "<td>".$tbl['rua'];"</td>";
    echo "<td>".$tbl['bairro'];"</td>";
    echo "<td>".$tbl['numero'];"</td>";
    echo "<td>".$tbl['espece'];"</td>";
    echo "<td> R$: ".$tbl['tipo_especial'];"</td>";
    "</tr>";
  }

  while ($tbl = mysqli_fetch_array($resul)) {
		
    echo "<tbody>
    <tr>
      <td>".$tbl['nome'];"</td>";

    echo "<td>".$tbl['rua'];"</td>";
    echo "<td>".$tbl['bairro'];"</td>";
    echo "<td>".$tbl['numero'];"</td>";
    echo "<td>".$tbl['batata'];"</td>";
    echo "<td>".$tbl['tipo_batata'];"</td>";
    "</tr>";
  }
?>
      </tbody>
	  </table>
  </div>
</section>

<div class="container">
  <button type="button" class="btn btn-outline-danger btn-block butt" data-toggle="modal" data-target=".modal-xl">Finalizar a compra</button>

  <div class="modal fade modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hiden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <p class="modal-title text-white display-3">Obrigado por comprar.</p>
          <button type="button" class="close" data-dismiss="modal" arial-label="Fechar">
            <span arial-label="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
           <h2 class="text-center text-white">Tipos de pagamentos</h2>

           <section class="container lef" style="font-size: 1.3rem;">
            <div class="form-check form-check-inline">
              <input type="radio" name="pagamento" class="fomr-check-input" id="pag" require>
              <label class="form-check-label" for="pag">Pix</label>
            </div>

            <div class="form-check form-check-inline">
              <input type="radio" name="pagamento" class="fomr-check-input" id="pagam" require>
              <label class="form-check-label" for="pagam">Débito</label>
            </div>

            <div class="form-check form-check-inline">
              <input type="radio" name="pagamento" class="fomr-check-input" id="pagamento" require>
              <label class="form-check-label" for="pagamento">Crédito</label>
            </div>
           </section>

           <div class="modal-footer">
              <button class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
              <button class="btn btn-outline-danger" type="submit">Finalizar compra</button>
           </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="pt-5 my-md-10 pt-md-10 bg-dark esp">

  <div class="row">
    <div class="col-12 col-md">
      <img class="mb-2" src="../img/logo-paddock12.png" height="86">
      <small class="d-block mb-3 text-muted">© 2020</small>
    </div>

    <div class="col-6 col-md">
      <h5 class="text-white">Contatos</h5>
      <ul class="list-unstyled text-small">
        <li><p class="text-white" ><i class='fas fa-phone-alt'></i> (21)3777-0591</p></li>
        <li><p class="text-white"><i class="fab fa-whatsapp" style="font-size: 20px;"></i> (21)97624-5283</p></li>
        <li><p class="text-white">Av.automovel clube, Duque de Caxias 1155, Santa Cruz da Serrp></li>
      </ul>
    </div>

    <div class="col-6 col-md">
      <h5 class="text-white">Redes Sociais</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#"><img class="img" src="../img/rede sociais/icone f.png"></a></li>
        <li><a class="text-muted" href="https://www.instagram.com/paddockpizzas"><img class="img" src="../img/rede sociais/logo insta.png"></a></li>
      </ul>
    </div>
  </div>
</footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/ava.js"></script>
</body>
</html>