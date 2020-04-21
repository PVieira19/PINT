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

    <link rel="stylesheet" href="<?php echo base_url('css/slide.css') ?>" />

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

$conta =0;

foreach ($list->result() as $user) {
  if($user->email == $this->session->userdata('Email'))
  {
    $email = $user->email;
    $img = "images/".$user->logo;
    $nome = $user->nome;
    $descricao = $user->descricao;
    $localizacao= $user->localizacao;
    $horario= $user->horario;
    $contactos= $user->contactos;
    $servico= $user->servico;

  }
}

?>


<body>

    <div class="modal fade" id="ModalWindowSMSadminc1" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja eliminar sua conta permanentemente?<input value="0" id="id_passar" hidden></input></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
          <button onclick="confirmativo()" type="button" class="btn btn-danger" >Eliminar</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="wrapper" style="width:100%;">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>My Cards</h3>
        <strong>MC</strong>
      </div>

      <ul class="list-unstyled components" >

        <br>
        <img class="rounded-circle mx-auto d-block" src="<?php echo base_url($img) ; ?>" width="80px" height="80px">
        <p style="text-align:center; color:white; margin-bottom: 40px;"><?php echo $nome; ?><p>


         <li >
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
        <a href="<?php echo site_url('Welcome/client_ava'); ?>"><i class="fas fa-circle bola" style="font-size:9px; margin-bottom: 2px; margin-right:10px;"></i> Ver Avaliações</a>
      </li>
    </ul>
  </li>


  <li class="active">
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
<div id="content" style="overflow: auto;">
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
  <?php $this->load->helper('form'); ?>
  <?php $this->load->library('form_validation'); ?>
  <?php $this->load->helper('url'); ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open_multipart('Welcome/editardef'); ?>

  <form method="post">

   <div style="color: #cd1313;"> <h4>Definições</h4> </div>
   <hr style="background-color:#cd1313;">

   <div class="col-md-6 sm-12" style="float:left;margin-top: 60px">
    <div class="form-group">
      <label for="inputN" style="color: #cd1313">Nome da Empresa</label>
      <input name="NomeE" class="form-control col-sm-12"  aria-describedby="emailHelp"  value="<?php echo $nome ; ?> ">
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="inputN" style="color: #cd1313">Palavra-Passe Antiga</label>
        <input type="password" name="PassA" class="form-control"  aria-describedby="emailHelp">
      </div>
      <div class="form-group col-md-6 ">
        <label for="inputN" style="color: #cd1313">Palavra-Passe Nova</label>
        <input type="password" name="PassN" class="form-control"  aria-describedby="emailHelp">
      </div>
    </div>
    <div class="form-group">  
      <label for="inputL" style="color: #cd1313">Localização</label>
      <input name="localizacaoE" class="form-control" value="<?php echo $localizacao ; ?> ">
    </div>
    <div class="form-group">
      <label for="inputH" style="color: #cd1313">Horario</label>
      <textarea name="horarioE" class="form-control" value="<?php echo $horario ; ?> "><?php echo $horario ; ?> </textarea>
    </div>
    <div class="form-group">  
     <label for="inputC" style="color: #cd1313">Contactos</label>
     <textarea name="contactosE" class="form-control"><?php echo $contactos ; ?></textarea>
   </div>
 </div>

 <span style="margin-left: 13%;margin-top: 50px;color: #cd1313;"><h6>Alterar Fotografias</h6></span>
 <div id="listaImagens" style="border-color: #cd1313; border-style: solid;">
<style type="text/css">
  #listaImagens{
    overflow: auto;
    height: 310px;
   font-size: 0px;
   border-radius: 2%
  }

  #listaImagens .image{
    width:420px;
    height: 280px;
    display: inline-block;
    position: relative;
    border-radius: 5px;
    box-shadow: 0px 0px 30px 2px rgba(0, 0, 0, 0.05);
    margin:10px;
  }

  #listaImagens .delete{
    width:20px;
    height: 20px;
    position: absolute;
    top: -10px;
    left: -10px;
    border-radius: 10px;
    background-color: #f00;
    box-shadow: 0px 0px 30px 2px rgba(0, 0, 0, 0.05);
    cursor: pointer;
  }

  #listaImagens img{
    position: relative;
    top: 0;
    left: 0;
    width:100%;
    height: 100%;
    background-size:cover;
    background-position: center center;
    border-radius: 5px;

  }

  #listaImagens svg{
    width: 10px;
    height: 10px;
    top: 5px;
    right: 6px;
    position: absolute;
  }
  #listaImagens svg path{
    fill:#FFF;
  }

</style>
  <div class="slider itemSlider owl-carousel">
  <?php
  foreach ($list2->result() as $row){
    if($row->idEmpresa == $this->session->userdata('ID')){
      ?>  
      <div class="image">
        <img  src="<?php echo base_url("fotografias/".$row->nomef) ?>" alt="Imagem" >
        <a class="delete" href="eliminarfoto?id=<?php echo $row->id?>">><i class="fas fa-trash-alt" ></i></a>
      </div>
      <?php 
      $conta++;

    }
  } ?>
</div>
</div>
<div style="float: right;" class="form-group col-md-6">
  <label for="inputFoto" style="color: #cd1313">Envie as suas Fotografias</label>
  <input name ="fotoU" type="file" class="form-control-file" id="CampoPesquisa" placeholder="Foto" onclick="esconderCampoPesquisa(<?php echo $conta;?>)">
</div>

<br><br><br><br><br><br><br>   
<div class="form-group col-md-11 sm-12" >  
  <label for="inputD" style="color: #cd1313;">Descrição</label>
  <textarea name="descricaoE" class="form-control" style="height: 130px"><?php echo $descricao ; ?> </textarea>
</div>

<button style="overflow: auto; float: left; margin: 20px 0px 0px 40px;" type="submit" class="btn btn-secondary">Guardar Alterações</button>

    <button style="margin: 20px 0px 0px 40px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalWindowSMSadminc1" 
      onclick="funcaoteste(<?php echo $this->session->userdata('ID');?>)" >Eliminar Conta</button>
</form>


<br><br><br><br>
<br><br>


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

<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>

<script type="text/javascript" src="<?php echo base_url('css/javascript.js') ?>"></script>


<script>

  function createItemSlider(){

    $('.itemSlider').owlCarousel({
      center: false,
      loop:false,
      autoWidth:true,
      responsiveClass:false,
      nav:true,
      dots:false,
      margin:5,
      navText: ['',''],
      onDragged: ondragcarousel
    });
  }

  $(document).on('click','.owl-next, .owl-prev', function(e) {
    ondragcarousel();
  });

  function ondragcarousel(event) {
    $(window).scroll();
  }


  $(function(){
    createItemSlider();
  });

</script>



<script>

function esconderCampoPesquisa(arg) {
  if(arg >= 6)
  {
    window.alert("O Maximo de Fotos é 6!");
   var x = document.getElementById("CampoPesquisa");
   x.disabled = 'true';
   x.style.display = 'none';
  }
}
</script>
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, "definicoes" );
  }
</script>
<script>
function confirmativo() {
      
      var str2 = document.getElementById('id_passar').value;
      var str1 = 'eliminarempresa?id=';
      var passar = str1.concat(str2);
      location.href= passar;      
   }
</script>
<script>
  function funcaoteste(parametro_id){
    document.getElementById('id_passar').value = parametro_id;
      }
</script>

</body>
</html>
