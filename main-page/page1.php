<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
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
        <a class="navbar-brand" href="#">GeoEnsina</a>
         <?php
              session_start();
              if(!empty($_SESSION['id'])){
                echo "<div style='color: white;'>Oi ".$_SESSION['nome'].", Bem vindo! </div><br>";
                echo "<a href='index.php'>Voltar</a>";
                echo "<a href='sair.php'>Sair</a>";
              }else{
                $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
                header("Location: index.php");  
              }
        ?>
      </div>
    </nav>

    <div class="container">
      
      <div class="row">
        <div class="col-md-offset-2 col-md-12">
            <h3 style="margin-top: 30px; text-align: center;">Clique em um video abaixo para assisti-lo</h3>
            <p>Você pode usar a ferramenta abaixo para fazer anotações sobre o video, além de poder utilizar o chat ao rodapé da página para compartilhar dúvidas com seus amigos</p>
        </div>
      </div>
      <!-- Grid row 1 -->
      <div class="row" style="padding-bottom: 80px;">

        <!-- Grid column 1 -->
        <div class="col-6 col-md-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top: 40px;">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/00jYGdYKFls?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Fechar</button>
                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <img class="img-fluid z-depth-1" src="../img/video.png" alt="video" data-toggle="modal" data-target="#modal1" style="width: 300px; height: 200px; margin-left: 22px;">

            <p style="text-align: center; margin-top: 10px">PLANO CARTESIANO - Gráfico ( eixo x / eixo y ) Abscissas e Ordenadas ( Geometria Analítica )</p>
        </div>
        <!-- Grid column 1-->

        <!-- Grid column 2-->
        <div class="col-6 col-md-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top: 40px;">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iC4q1AGeN5A?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Fechar</button>
                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <img class="img-fluid z-depth-1" src="../img/video.png" alt="video" data-toggle="modal" data-target="#modal6" style="width: 300px; height: 200px; margin-left: 22px;">
            <p style="text-align: center; margin-top: 10px;">Noções Básicas de Plano Cartesiano</p>
        </div>
        <!-- Grid column 2-->

        <!-- Grid column 3-->
        <div class="col-6 col-md-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top: 40px;">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S-XgwNioHCA?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <img class="img-fluid z-depth-1" src="../img/video.png" alt="video" data-toggle="modal" data-target="#modal4" style="width: 300px;height: 200px; margin-left: 22px;">
             <p style="text-align: center; margin-top: 10px;">Coordenadas cartesianas</p>
        </div>
        <!-- Grid column 3-->
      </div>
      <!-- Grid final row 1 -->
      <!--PAINT-->
      <iframe  width="800" height="500" src="https://jspaint.ml" scrolling="no" frameborder="no"></iframe>
      <!--PAINT-->
    </div>
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; GeoEnsina 2018</p>
      </div>
      <!-- /.container -->
    </footer>
<!-- style="  position:absolute;bottom:0;width:100%; -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Chat start-->
    <script src="http://vircio.net/app-chat.js?link=http%3A%2F%2Fvircio.net%2Fsala%2FGeoEnsina%26estilo%3Dgreen%26autoconectar%3D1%26altura%3D400&largura=700&altura=400"></script>
    <!--Chat stop-->

  </body>

</html>
