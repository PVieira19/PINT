<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Adicionar Cartão</title>

<link href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">

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
      html {
        scroll-behavior: smooth;
      }
    </style>


    <style >
      .pagination > li > a, .pagination > li > span{background-color:white; color: #cd1313;}
      .page-item.active .page-link {
        background-color: #cd1313;
        border-color: #cd1313;
      }

    </style>

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
    $img = "images/".$user->logo;
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
          <img class="rounded-circle mx-auto d-block" src="<?php echo base_url($img) ; ?>" width="80px" height="80px">
          <p style="text-align:center; color:white; margin-bottom: 40px;"><?php echo $nome; ?><p>
            

           <li>
            <a href="<?php echo site_url('Welcome/home'); ?>">
              <i class="fas fa-home"></i>
              Home
            </a>
          </li>  

          <li>
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
          
          <li class="active">
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
        </li>
        <li>
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

        
        <div style="color: #cd1313;"> <h4>Adicionar Novo Cartão</h4> </div>
       <hr style="background-color:#cd1313;">  
       <br>
        <div class="row">
    <div class="col">

  <?php $this->load->library('form_validation'); ?>
  <?php $this->load->helper('url'); ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('Welcome/adicionarcartao'); ?>
    
<form method="post" >
            <div class="form-group">
    <label for="inputNameCard" style="color: #cd1313">Nome do Cartão</label>
    <input type="text" class="form-control" id="inputNameCard" name="NomeCardAdd" placeholder="Ex: Colecione e Ganhe um Bolo!">
  </div>
 
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputDateBeginCard" style="color: #cd1313">Data de Inicio</label>
      <input type="date" class="form-control" name="NameDataIAddC" id="inputDateBeginCard">
    </div>
    <div class="form-group col-md-6">
      <label for="inputDateEndCard" style="color: #cd1313">Data de Fim</label>
      <input type="date" class="form-control" name="NameDataFAddC" id="inputDateEndCard">
    </div>
  </div>


 <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputNumberCard" style="color: #cd1313">Número</label>
      <select id="inputNumberCard" class="form-control" name="inputNumberCard">
        <option selected value="3">3 Carimbos</option>
        <option value="6">6 Carimbos</option>        
        <option value="9">9 Carimbos</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="InputColorBackCard" style="color: #cd1313">Fundo</label><br>
      <div><input type="color" class="form-control" id="InputColorBackCard" name="NameFundoAdd" value="#cd1313" style="height: 38px;"></div>
    </div>
    <div class="form-group col-md-3">
      <label for="InputColorSquare" style="color: #cd1313">Quadrados</label><br>
      <div><input type="color" class="form-control" id="InputColorSquare" name="NameQuadradosAdd" value="#FFFFFF" style="height: 38px;"></div>
    </div>
  </div>
  <div class="form-group">
    <label for="InputDescriptionCard" style="color: #cd1313">Insira Descrição do Cartão</label>
    <textarea class="form-control" id="InputDescriptionCard" name="descricaoCard" rows="4" placeholder="Ex: Colecione os três Carimbos e tenha direito a um Bolo grátis à sua escolha!" maxlength="100"></textarea>
  </div>

  <input style="margin: 10px;" type="button" class="btn btn-secondary" onclick="funcaoview3()" value="Pré -Visualizar Campanha"> &ensp;&ensp;
  <button style="margin: 10px;" type type="submit" class="btn btn-danger">Criar Cartão</button>
</form>
<br>
    </div>
    <div class="col">
      <small style="color: #848484; margin-left: 5px;">Pré-Visualização do Cartão</small><br>
            <div class="card">

    <div style="background-color: #cd1313; color: white;  padding: 30px;" id="Card">
         
         <div id="Cartoes_1">
         <div class="row">
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square1"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square2"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square3"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         </div>
       </div>

         <div id="Cartoes_2" style="display: none;">
         <div class="row">
          <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square11"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square22"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square33"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
        </div>
         <div class="row">
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square4"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square5"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square6"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         </div>
       </div>

         <center><div style="display: none;" id="Cartoes_3">
         <div class="row">
          <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square111"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square222"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square333"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
       </div>
       <div class="row">
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square44"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square55"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square66"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         </div>
       <div class="row">
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square7"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square8"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
         <div class="col" style="background-color: white; color: black; margin: 8px; height: 70px; padding: 10px;"id="Square9"><center><i style="font-size: 20px; height: 30px;" class="fas fa-check"></i></center></div>
        </div>
        </div></center>
    </div>


     <div class="card-body">
    <h5 class="card-title" id="Titulo">Colecione e Ganhe um Bolo!</h5>
    <p class="card-text"><span id="DescriçãoCard">Colecione os três Carimbos e tenha direito a um Bolo grátis à sua escolha!</span><br><br><small>Válido de <span id="DataInicioCard">15/05/2019</span> até <span id="DataFimCard">15/05/2019</span></small></p>
  </div>


</div><!--Fecha o Card-->
    </div><!--Fecha a Col-->
  </div><!--Fecha a Row-->
  <br>
  <div style="color: #cd1313;"> <h4>Lista de Cartões Ativos</h4> </div>
       <hr style="background-color:#cd1313;">  
<div class="table-responsive-md">
<table id="cartoes" class="table table-bordered" style="">
  <thead>
<tr style="background-color: #E5E5E5;color: #DD3E3E">
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Número Carimbos</th>
      <th scope="col">Data Inicio</th>
      <th scope="col">Data Fim</th>
</tr>
</thead>
<tbody>
<?php foreach ($list3->result() as $row){
  if($row->empresa == $this->session->userdata('ID'))
    {?>
<tr>
<td><?php echo $row->id_cartao;?></td>
<td><?php echo $row->titulo;?></td>
<td><?php echo $row->ncarimbos;?></td>
<td><?php echo $row->data_inicio;?></td>
<td><?php echo $row->data_fim;?></td>

</tr>

    <?php }
}?>
</tbody>
</table>
 

      </div><!--Fim da Div Content-->
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
       function funcaoview3(){

      document.getElementById("Titulo").innerHTML = document.getElementById("inputNameCard").value;
      document.getElementById("DescriçãoCard").innerHTML = document.getElementById("InputDescriptionCard").value;
      document.getElementById("DataInicioCard").innerHTML = document.getElementById("inputDateBeginCard").value;
      document.getElementById("DataFimCard").innerHTML = document.getElementById("inputDateEndCard").value;

     if(document.getElementById("inputNumberCard").value == '3')  
      {  
        document.getElementById("Cartoes_2").style.display = "none";
        document.getElementById("Cartoes_1").style.display = "block";
        document.getElementById("Cartoes_3").style.display = "none";
        document.getElementById("Card").style.backgroundColor = document.getElementById("InputColorBackCard").value;
        document.getElementById("Square1").style.backgroundColor = document.getElementById("InputColorSquare").value;
        document.getElementById("Square2").style.backgroundColor = document.getElementById("InputColorSquare").value;
        document.getElementById("Square3").style.backgroundColor = document.getElementById("InputColorSquare").value;
      }
      else
        if(document.getElementById("inputNumberCard").value == '6')
        {
          document.getElementById("Cartoes_2").style.display = "block";
          document.getElementById("Cartoes_1").style.display = "none";
          document.getElementById("Cartoes_3").style.display = "none";
          document.getElementById("Card").style.backgroundColor = document.getElementById("InputColorBackCard").value;
          document.getElementById("Square11").style.backgroundColor = document.getElementById("InputColorSquare").value;
          document.getElementById("Square22").style.backgroundColor = document.getElementById("InputColorSquare").value;
          document.getElementById("Square33").style.backgroundColor = document.getElementById("InputColorSquare").value;
          document.getElementById("Square4").style.backgroundColor = document.getElementById("InputColorSquare").value;
          document.getElementById("Square5").style.backgroundColor = document.getElementById("InputColorSquare").value;
          document.getElementById("Square6").style.backgroundColor = document.getElementById("InputColorSquare").value;
        }
        else
          if(document.getElementById("inputNumberCard").value == '9')
          {
            document.getElementById("Cartoes_1").style.display = "none";
            document.getElementById("Cartoes_2").style.display = "none";
            document.getElementById("Cartoes_3").style.display = "block";
            document.getElementById("Card").style.backgroundColor = document.getElementById("InputColorBackCard").value;
            document.getElementById("Square111").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square222").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square333").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square44").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square55").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square66").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square7").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square8").style.backgroundColor = document.getElementById("InputColorSquare").value;
            document.getElementById("Square9").style.backgroundColor = document.getElementById("InputColorSquare").value;
          }  

     }
    </script>
    <script>
      var hoje = new Date();
      var dd = hoje.getDate();
      var mm = hoje.getMonth()+1; 
      var yyyy = hoje.getFullYear();
      if(dd<10){
             dd='0'+dd
         } 
      if(mm<10){
             mm='0'+mm
         } 

      hoje = yyyy+'-'+mm+'-'+dd;
      document.getElementById("inputDateBeginCard").setAttribute("min", hoje);

    </script>
    <script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, "add_card" );
  }
</script>


  <script src="//code.jquery.com/jquery-3.3.1.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#cartoes').DataTable({
          "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
  });
  </script>


  </body>

</html>
