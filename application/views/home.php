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

<div class="modal fade" id="ModalWindowSMSadminc1" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja terminar esta Campanha <span id="nome_passar"></span>?<input value="0" id="id_passar" hidden></input></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <button onclick="confirmativo1()" type="button" class="btn btn-danger" >Terminar</button>
      </div>
    </div>
  </div>
</div>
</div>



        <div class="modal fade" id="ModalWindowSMSadminc2" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja terminar este Cart&atildeo <span id="nome_passar1"></span>?<input value="0" id="id_passar1" hidden></input></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <button onclick="confirmativo2()" type="button" class="btn btn-danger" >Terminar</button>
      </div>
      </div>
    </div>
  </div>
</div>



<?php


if(!isset($_SESSION['Email']))
{
  $this->load->view('login');
  exit();
}

foreach ($list->result() as $user) {
  if($user->email == $this->session->userdata('Email'))
  {
    $id = $user->id_empresa;
    $img = "images/".$user->logo;
    $nome = $user->nome;

    $session_data = array(
      'ID'=> $id
    );
    $this->session->set_userdata($session_data);
  }
}



?>
<body>
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


         <li class="active">
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

      <form method="post">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
            <button  type="submit" class="btn btn-secondary">Logout</button>
          </li>

        </ul>

      </div>
    </nav>

    <div style="color: #cd1313;"> 
      <h4>As Suas Campanhas</h4> 
      <hr style="background-color:#cd1313;">   
      <div>
        <div class="slider itemSlider owl-carousel">
          <?php foreach ($list2->result() as $campanha) {
            if($campanha->empresa == $id && $campanha->estado =="Ativa")
            {
              $variavel =0;
              if ($campanha->tipo == 'e')
               $variavel = '€';
              else
               $variavel = '%';
             ?>


             <div class="card" style="width: 18rem; margin-left: 5px; margin-right: 30px; margin-bottom: 50px;border-radius: 5px;">  
              <div style="padding: 10px; background-color:<?php echo '#'.$campanha->fundo; ?>; color: <?php echo '#'.$campanha->letra; ?>;border-top-left-radius: 5px;border-top-right-radius: 5px;">
                <center><h4 style="margin: 15px; margin-top: 10px"><?php echo $campanha->titulo; ?></h4></center>
                <center><h4 style="margin: 15px;"><?php echo $campanha->desconto." ".$variavel; ?></h4></center>
              </div>
              <div class="card-body">
                <h5 style="color: black;" class="card-title"><?php echo $campanha->titulo; ?></h5>
                <p class="card-text" style="height: 75%;"><?php echo $campanha->descricao; ?><br><br> <small>Válida até <?php echo $campanha->data_fim; ?></small></p>
                <a href="<?php echo site_url('Welcome/edit_camp'); ?>" class="btn btn-secondary" >Editar</a>
                <a class="btn btn-danger" color style="margin-left: 10px; color: white" data-toggle="modal" data-target="#ModalWindowSMSadminc1" onclick="funcaoteste1(<?php echo $campanha->id_campanha;?>, '<?php echo $campanha->titulo;?>')">Terminar</a>

              </div>

            </div>
          <?php }
        }?>
      </div>
    </div>
  </div>


  <br>


  <div style="color: #cd1313;"> <h4>Os Seus Cartões</h4> </div>
  <hr style="background-color:#cd1313;">

  <div>
    <div class="slider itemSlider owl-carousel">

      <?php foreach ($list3->result() as $cartao) {
        if($cartao->empresa == $id && $cartao->estado =="Ativo")
          {?>       

           <div class="card" style="width: 18rem; margin-left: 5px; margin-right: 30px; margin-bottom: 50px;">  
            <div style="padding: 10px 20px 10px 20px; background-color:<?php echo '#'.$cartao->fundo; ?>;">   

             <?php if (($cartao->ncarimbos)=='3') { ?>
              <div class="row">
               <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square1"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
               <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square2"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
               <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square3"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
             </div>
           <?php } ?> 

           <?php if (($cartao->ncarimbos)=='6') { ?>
            <div class="row">
              <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square11"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
              <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square22"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
              <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square33"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
            </div>
            <div class="row">
             <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square4"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
             <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square5"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
             <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square6"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
           </div>
         <?php } ?> 

         <?php if (($cartao->ncarimbos)=='9') { ?>
           <div class="row">
            <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square111"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
            <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square222"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
            <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square333"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
          </div>
          <div class="row">
           <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square44"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
           <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square55"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
           <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square66"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         </div>
         <div class="row">
           <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square7"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
           <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square8"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
           <div class="col" style="background-color: <?php echo '#'.$cartao->quadrados; ?>; color: black; margin: 8px; height: 50px; padding: 10px;"id="Square9"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         </div>
       <?php } ?>   
     </div>
     <div class="card-body"> 
      <h5 class="card-title"><?php echo $cartao->titulo; ?></h5>
      <p class="card-text"><?php echo $cartao->descricao; ?><br><br> <small>Válida até <?php echo $cartao->data_fim; ?></small></p>
      <a href="<?php echo site_url('Welcome/edit_card'); ?>" class="btn btn-secondary">Editar</a>
      <a class="btn btn-danger" style="margin-left: 10px; color: white" data-toggle="modal" data-target="#ModalWindowSMSadminc2" onclick="funcaoteste2(<?php echo $cartao->id_cartao;?>, '<?php echo $cartao->titulo;?>')">Terminar</a>

    </div>
  </div>
<?php }
}?>
</div>
</div>
<br>
<div style="color: #cd1313;"> <h4>Os Comentários Recebidos</h4> </div>
<hr style="background-color:#cd1313;">
<div>
  <div class="slider itemSlider owl-carousel">

    <?php foreach ($list11->result() as $avalicao) {
      if($avalicao->id_empresa == $this->session->userdata('ID'))
        {?>

          <div class="col">
            <div class="card" style="width: 18rem; margin-top: 5%">
              <div class="card-body">
                <h5 class="card-title"><?php echo $avalicao->rating;?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $avalicao->nome; ?></h6>
                <p class="card-text"><?php echo $avalicao->comentario; ?></p>
                <a class="card-link"><?php echo $avalicao->data; ?></a>

              </div>
            </div>
          </div>
        <?php }
      }?>


    </div>
  </div>

</div><!--Fim da Div da Nav-->
</div><!--Fim da Div Content-->

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


<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, "home" );
  }
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
function confirmativo2() {
      
      var str2 = document.getElementById('id_passar1').value;
      var str1 = 'terminarcartao?id=';
      var passar = str1.concat(str2);
      location.href= passar;
      
   }
</script>
<script>
  function funcaoteste2(parametro_id, parametro_nome){
    document.getElementById('id_passar1').value = parametro_id;
    document.getElementById('nome_passar1').innerHTML = parametro_nome;
  }
</script>



<script>
function confirmativo1() {
      
      var str2 = document.getElementById('id_passar').value;
      var str1 = 'terminarcampanha?id=';
      var passar = str1.concat(str2);
      location.href= passar;
      
   }
</script>
<script>
  function funcaoteste1(parametro_id, parametro_nome){
    document.getElementById('id_passar').value = parametro_id;
    document.getElementById('nome_passar').innerHTML = parametro_nome;
  }
</script>



</body>
</html>
