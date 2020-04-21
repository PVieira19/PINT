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
  </head>

  <?php
  
  if(!isset($_SESSION['Email']))
  {
    $this->load->view('login');?>
    <script>
      document.title='Login';
    </script>
    <?php
    exit();
  }


foreach ($list->result() as $user) {
    if($user->email == $this->session->userdata('Email'))
    {
      $img = $user->logo;
      $nome = $user->nome;
}
}
?>

  <body>
    <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="sidebar-header">
          <h3>My Cards</h3>
          <strong>MC</strong>
        </div>

        <ul class="list-unstyled components" >
          
          <br>
          <img class="rounded-circle mx-auto d-block" src="<?php echo $img; ?>" width="80px" height="80px">
          <p style="text-align:center; color:white; margin-bottom: 40px;"><?php echo $nome; ?><p>
            

           <li>
            <a href="<?php echo site_url('Welcome/home'); ?>">
              <i class="fas fa-home"></i>
              Home
            </a>
          </li>  

          <li >
            <a
              href="#homeSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
            >
              <i class="fas fa-bullhorn"></i>
              Campanhas
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="<?php echo site_url('Welcome/add_camp'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Adicionar Campanha</a>
              </li>
              <li>
                <a href="<?php echo site_url('Welcome/edit_camp'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Editar Campanha</a>
              </li>
            </ul>
          </li>
          
          <li>
            <a 
            	href="#homeSubmenu1"
            	data-toggle="collapse"
              	aria-expanded="false"
              	class="dropdown-toggle"
            >
              <i class="fas fa-credit-card"></i>
              Cartão
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu1">
              <li>
                <a href="<?php echo site_url('Welcome/add_card'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Adicionar Cartão</a>
              </li>
              <li>
                <a href="<?php echo site_url('Welcome/edit_card'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Editar Cartão</a>
              </li>
            </ul>
            <li class="active">
            <a
              href="#pageSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
            >
              <i class="fas fa-user"></i>
              Clientes
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="<?php echo site_url('Welcome/list_client'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Listar Clientes</a>
              </li>
              <li>
                <a href="<?php echo site_url('Welcome/list_est'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Ver Estatísticas</a>
              </li>
            </ul>
          </li>
          

          <li>
            <a href="<?php echo site_url('Welcome/definicoes'); ?>">
              <i class="fas fa-cog"></i>
              Definições
            </a>
          </li>
          
          <li>
            <a href="<?php echo site_url('Welcome/LerQrcode'); ?>">
              <i class="fas fa-qrcode"></i>
              Ler QR code
            </a>
          </li>
        
      </nav>

      <!-- Page contenttent  -->
      <div id="content">
        <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-danger">
              <i class="fas fa-align-left"></i>
              <span>Fechar</span>
            </button>
           
            <?php $this->load->library('form_validation'); ?>
            <?php $this->load->helper('url'); ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('Welcome/logout'); ?>
              
            <form method="post" >
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                <button type="submit" class="btn btn-secondary">Logout</button>

                </li>
               
              </ul>
              </form>
          </div>
        </nav>

       <div style="color: #cd1313;"> <h4>Estatisticas</h4> </div>




      </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <!-- Popper.JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
      integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
      integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#sidebarCollapse").on("click", function() {
          $("#sidebar").toggleClass("active");

          if($("#sidebarCollapse").text()==" Abrir"){
            $(".bola").show();
            $("#sidebarCollapse").text(" Fechar")
            $("#sidebarCollapse").prepend("<i class='fas fa-align-left'></i>")

          
          }
          else{
            $(".bola").hide();
            $("#sidebarCollapse").text(" Abrir")
            $("#sidebarCollapse").prepend("<i class='fas fa-align-left'></i>")
          }


          
        });
        $(".bola").hide();
      });
    </script>

  </body>
</html>