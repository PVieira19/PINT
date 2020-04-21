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

  foreach ($list->result() as $user) {
      if($user->email == $Email)
      {
        $id = $user->id_empresa;
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
            

           <li class="active">
            <a href="<?php echo base_url();?>">
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
                <a href="<?php echo site_url('Welcome/add'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Adicionar Campanha</a>
              </li>
              <li>
                <a href="edit_campanha.php"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Editar Campanha</a>
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
                <a href="add_cartao.php"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Adicionar Cartão</a>
              </li>
              <li>
                <a href="edit_cartao.php"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Editar Cartão</a>
              </li>
            </ul>
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
                <a href="list_clientes.php"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Listar Clientes</a>
              </li>
              <li>
                <a href="estat_clientes.php"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Ver Estatísticas</a>
              </li>
            </ul>
          </li>
          

          <li>
            <a href="definicoes.php">
              <i class="fas fa-cog"></i>
              Definições
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
           

              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="login.php">Logout</a>
                </li>
               
              </ul>
          
          </div>
        </nav>


       <div style="color: #cd1313;"> 
        <h4>As Suas Campanhas</h4> 
       <hr style="background-color:#cd1313;">   
           <div class="card-columns">
<?php foreach ($list2->result() as $campanha) {
      if($campanha->empresa == $id)
      {?>
              

      <div class="card" style="width: 18rem; margin-left: 5px; margin-right: 30px; margin-bottom: 50px;">  
        <div style="background-color:<?php echo '#'.$campanha->fundo; ?>; color: <?php echo '#'.$campanha->letra; ?>;">
          <center><h4 style="margin: 15px;"><?php echo $campanha->titulo; ?></h4></center>
          <center><h4 style="margin: 15px;"><?php echo $campanha->desconto." ".$campanha->tipo; ?></h4></center>
        </div>
      <div class="card-body">
      <h5 class="card-title"><?php echo $campanha->titulo; ?></h5>
      <p class="card-text" style="height: 75%;"><?php echo $campanha->descricao; ?><br><br> <small>Válida até <?php echo $campanha->data_fim; ?></small></p>
      <a href="edit_campanha" class="btn btn-secondary" >Editar Campanha</a>
      <a href="edit_campanha" class="btn btn-danger" style="margin-left: 10px;"><i class="fas fa-trash-alt"></i></a>

      </div>

  </div>
    <?php }
}?>
      </div>

</div>




<div style="color: #cd1313;"> <h4>Os Seus Cartões</h4> </div>
       <hr style="background-color:#cd1313;">

<?php foreach ($list3->result() as $cartao) {
      if($cartao->empresa == $id)
      {?>       

       <div class="card" style="width: 17rem; float: left; margin-left: 5px; margin-right: 50px; margin-bottom: 50px;height: 20rem;">
  <img src="images/card_default.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $cartao->titulo; ?></h5>
    <p class="card-text"><?php echo $cartao->descricao; ?><br><br> <small>Válida até <?php echo $campanha->data_fim; ?></small></p>
    <a href="edit_campanha" class="btn btn-secondary">Editar Cartão</a>
    <a href="edit_campanha" class="btn btn-danger" style="margin-left: 10px;"><i class="fas fa-trash-alt"></i></a>
  </div>
</div>
    <?php }
}?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<div style="color: #cd1313;"> <h4>Os Comentários Recebidos</h4> </div>
       <hr style="background-color:#cd1313;">

<?php foreach ($list4->result() as $avaliacao) {
      if($avaliacao->empresa == $id)
      {?>       

       <div class="card" style="width: 17rem; float: left; margin-left: 5px; margin-right: 50px; margin-bottom: 50px;">
  <img src="images/card_default.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $cartao->titulo; ?></h5>
    <p class="card-text"><?php echo $cartao->descricao; ?><br><br> <small>Válida até <?php echo $campanha->data_fim; ?></small></p>
    <a href="edit_campanha" class="btn btn-secondary">Editar Cartão</a>
    <a href="edit_campanha" class="btn btn-danger" style="margin-left: 10px;"><i class="fas fa-trash-alt"></i></a>
  </div>
</div>
    <?php }
}?>
   



      </div><!--Fim da Div da Nav-->
    </div><!--Fim da Div Wrapper-->

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
            $("#sidebarCollapse").text(" Fechar")
            $("#sidebarCollapse").prepend("<i class='fas fa-align-left'></i>")

          
          }
          else{
            $("#sidebarCollapse").text(" Abrir")
            $("#sidebarCollapse").prepend("<i class='fas fa-align-left'></i>")
          }


          $(".bola").hide();
        });
      });
    </script>
  </body>
</html>
