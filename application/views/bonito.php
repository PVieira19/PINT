 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Projeto Pint</title>

    <!-- Bootstrap CSS CDN -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
      crossorigin="anonymous"
    />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />

    <!-- Font Awesome JS -->
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
      integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
      integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
      crossorigin="anonymous"
    ></script>
    <style>
        html,
        body,
        header,
        #intro {
            height: 100%;
        }
         html {
        scroll-behavior: smooth;
        }

        #intro {
            background: url( <?php echo base_url('images/teste.png');?>)no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .top-nav-collapse {
            background-color: #24355C;
          }
          @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
              background-color: #24355C;
            }
          }
          @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
              background-color: #24355C;
            }
          }
          .clicar_link:hover {
           color: #cd1313;
          }

    </style>
    
  </head>

  <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="background-color: #efefef;">

            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#" style="color: #cd1313;"><b>MY CARDS</b></a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a style="color: #cd1313;" class="nav-link" href="#intro">Home</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #cd1313;" class="nav-link" href="#best-features">Funcionalidades</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #cd1313;" class="nav-link" href="#examples">Exemplos</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #cd1313;" class="nav-link" href="#gallery">Preçário</a>
                        </li>
                    </ul>
                    <!-- Links -->

                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a style="color: blue;" class="nav-link"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible content -->

            </div>

        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div id="intro" class="view" style="overflow: auto;">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 style="color: #cd1313;" class="display-4 font-weight-bold white-text pt-5 mb-2"><br>MY CARDS</h2>

                            <!-- Divider -->
                            <hr class="hr-light">

                            <!-- Description -->
                            <h4 style="color: #444444;" class="white-text my-4">Uma nova e melhor maneira de divulgar a sua empresa!</h4><br>
                            <a href="<?php echo site_url('Welcome/login');?>" class="btn btn-danger">Login &ensp;<i class="fas fa-sign-in-alt"></i></a> &ensp;&ensp;
                            <a href="<?php echo site_url('Welcome/registar');?>" class="btn btn-secondary">Criar Conta <i class="fa fa-book ml-2"></i></a> 
                            <br><br>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h2 style="color: #cd1313;" class="mb-5 font-weight-bold">Melhores Funcionalidades</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p style="color: #444444;" class="grey-text">Com esta ferramenta, a sua empresa conseguirá crescer de uma maneira anteriormente nunca vista!<br>
                        MyCards disponibliliza-lhe uma vasta gama de utilidades que lhe permitiram atrair clientes, e ter um sistema que os organiza.<br>
                        Indepentemente do seu serviço, crie a sua conta, e comece a benficiar-se do MyCards e das seguintes funcionalidades.
                    </p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i style="color: #cd1313;" class="fas fa-bullhorn fa-4x orange-text"></i>
                        <h4 style="color: #cd1313;" class="my-4 font-weight-bold">Campanhas</h4>
                        <p style="color: #444444;" class="grey-text">Crie Campanhas nos seus produtos.<br> Defina datas de inicio e fim. <br>Selecione o público-alvo.<br> Atrai-a Clientes. Simples!</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i style="color: #cd1313;" class="fas fa-credit-card fa-4x orange-text"></i>
                        <h4 style="color: #cd1313;" class="my-4 font-weight-bold">Cartões de Carimbos</h4>
                        <p style="color: #444444;" class="grey-text">Crie Cartões de Carimbos.<br> Defina o prémio final. <br>Selecione o numero de carimbos.<br> Vicie os Clientes na sua Loja!</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i style="color: #cd1313;" class="fas fa-chart-bar fa-4x orange-text"></i>
                        <h4 style="color: #cd1313;" class="my-4 font-weight-bold">Listagem e Estatisticas</h4>
                        <p style="color: #444444;" class="grey-text">Consulte a lista dos Clientes.<br> Veja as estatisticas e comentários<br> dos clientes associados.<br> Pense logo na próxima Campanha.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->

            <hr class="my-5">

            <!--Section: Examples-->
            <section id="examples" class="text-center">

                <!-- Heading -->
                <h2 style="color: #cd1313;" class="mb-5 font-weight-bold">Exemplos</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src= "<?php echo base_url('images/img1.PNG');?>" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 style="color: #cd1313;" class="my-4 font-weight">Cria Campanha</h4>
                        <p class="grey-text">Crie a sua campanha, identificando o nome e a quantidade de desconto. Estilize-a alterando as cores!</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="<?php echo base_url('images/img2.png');?>" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 style="color: #cd1313;" class="my-4 font-weight">Editar Campanha</h4>
                        <p class="grey-text">Verifique no histórico de Campanhas todas as suas campanhas, e selecione para edita-las. Altere o que desejar!</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="<?php echo base_url('images/img3.PNG');?>" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 style="color: #cd1313;" class="my-4 font-weight">Criar Cartão</h4>
                        <p class="grey-text">Crie o seu cartão, identificando o nome e a quantidade de desconto. Estilize-o alterando as cores!</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="<?php echo base_url('images/img4.PNG');?>" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 style="color: #cd1313;" class="my-4 font-weight">Editar Cartão</h4>
                        <p class="grey-text">Verifique no histórico de Cartões todas as suas cartões, e selecione para edita-los. Altere o que desejar!</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="<?php echo base_url('images/img5.png');?>" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 style="color: #cd1313;" class="my-4 font-weight">Ver Lista Clientes</h4>
                        <p class="grey-text">Veja todos os seus clientes associados! Escolha a opção de desassociar caso não se relacione consigo.
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="<?php echo base_url('images/img6.PNG');?>" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 style="color: #cd1313;" class="my-4 font-weight">Ver Estatísticas</h4>
                        <p class="grey-text">Veja aqui as suas estatísticas que envolvem a atividade dos associados. Estude-os e Ganhe-os!</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Examples-->

            <hr class="my-5">

            <!--Section: Gallery-->
            <section id="gallery">

                <!-- Heading -->
                <h2 style="color: #cd1313;" class="mb-5 font-weight-bold text-center">Preçário</h2>

                
                <div class="row">
                    <div class="col">
                    <!-- Card Narrower -->
                            <div class="card card-cascade narrower">

                              <!-- Card image -->
                              <div class="view view-cascade overlay">
                                <img  class="card-img-top" src="images/euro.jpg" alt="Card image cap">
                                <a>
                                  <div class="mask rgba-white-slight"></div>
                                </a>
                              </div>

                              <!-- Card content -->
                              <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-child"></i> Básico</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Subscrição Mensal</h4>
                                <!-- Text -->
                                <p class="card-text">Escolha esta opção caso queira apenas testar a nossa ferramenta por uns meses. Cancele no fim do mês logo que queira.</p>
                                <!-- Button -->
                                <center><button class="btn btn-danger">9,99 € / mês</button> </center>

                              </div>

                            </div>
                            <!-- Card Narrower -->
                            </div>

                            <div class="col">

                            <!-- Card Narrower -->
                            <div class="card card-cascade narrower">

                              <!-- Card image -->
                              <div class="view view-cascade overlay">
                                <img  class="card-img-top" src="images/euro.jpg" alt="Card image cap">
                                <a>
                                  <div class="mask rgba-white-slight"></div>
                                </a>
                              </div>

                              <!-- Card content -->
                              <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-user-tie"></i> Profissional</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Subscrição Anual</h4>
                                <!-- Text -->
                                <p class="card-text">Caso queira utilizar a nossa ferramenta de modo profissional, e mais económico. Cancele no fim do ano logo que queira.</p>
                                <!-- Button -->
                                <center><button class="btn btn-danger">99,99 € / ano</button> </center>

                              </div>

                            </div>
                            <!-- Card Narrower -->
                            </div>

                            <div class="col">

                                <!-- Card Narrower -->
                            <div class="card card-cascade narrower">

                              <!-- Card image -->
                              <div class="view view-cascade overlay">
                                <img  class="card-img-top" src="images/euro.jpg" alt="Imagem">
                                <a>
                                  <div class="mask rgba-white-slight"></div>
                                </a>
                              </div>

                              <!-- Card content -->
                              <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-building"></i> Avançado</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Subscrição Vitalícia</h4>
                                <!-- Text -->
                                <p class="card-text">Escolha esta opção caso queira adquirir de modo vitalicio. Não terá qualquer tipo de subscrição. A ferramenta é sua!</p>
                                <!-- Button -->
                                <center><button class="btn btn-danger">399,99 € / vida</button> </center>

                              </div>

                            </div>
                            <!-- Card Narrower -->
                                </div>
                </div>



            </section>
            <!--Section: Gallery-->

            <hr class="my-5">
            <script>
            // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });
        }

        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);

// Carousel options

$('.carousel').carousel({
            interval: 3000,
        })          
            
        </script>
        </div>
    </main>
    <!--Main layout-->
    <footer>
        <center><div style="background-color: #fafafa;"> Contactos: <a class="clicar_link" href="mailto:adminMyCards@hotmail.com">adminMyCards@hotmail.com</a></div></center>
        <!-- Copyright -->
        <div style="background-color: #fafafa;" class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MyCards.com</a>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- Footer -->
