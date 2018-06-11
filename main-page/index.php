
<!--
Created by: Ítalo Magalhães da Silva
E-mail: italo.ufsj@gmail.com
-->
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GeoEnsina - Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="./index.php">GeoEnsina</a>

        <?php
              session_start();
              if(!empty($_SESSION['id'])){
                echo "<div style='color: white;'>Oi ".$_SESSION['nome'].", Bem vindo! </div><br>";
                echo "<a href='sair.php'>Sair</a>";
              }else{
                $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
                header("Location: index.php");  
              }
        ?>

      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h3 class="my-4">Selecione o tópico de estudo ao lado.</h3>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page1.php"><img class="card-img-top" src="../img/coordenadasCartesianas.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page1.php">Coordenadas cartesianas.</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page2.php"><img class="card-img-top" src="../img/dependenciaLinear.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page2.php"> Vetores e dependência linear. </a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page3.php"><img class="card-img-top" src="../img/produtoEscalar.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page3.php">Produto escalar.</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page4.php"><img class="card-img-top" src="../img/produtoVetorial.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page4.php">Produto vetorial.</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page5.php"><img class="card-img-top" src="../img/transformacoesRotacao.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page5.php">Translação e rotação.</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page6.php"><img class="card-img-top" src="../img/retasPlanos.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page6.php">Retas e planos.</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page7.php"><img class="card-img-top" src="../img/distanciaAngulos.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page7.php">Distância e ângulo. </a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page8.php"><img class="card-img-top" src="../img/conicas.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page8.php">Cônicas</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page9.php"><img class="card-img-top" src="../img/quadraticas.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page9.php">Quádricas</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="page10.php"><img class="card-img-top" src="../img/coordenadasPolares.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="page10.php"> Coordenadas polares, cilíndricas e esféricas.</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; GeoEnsina 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
