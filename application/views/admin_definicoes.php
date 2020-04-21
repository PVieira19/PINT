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
    $img = "images/".$user->logo;
    $nome = $user->nome;
    }
}

?>

  <body>



  <div class="modal fade" id="ModalWindowAdminclie" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Eliminar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tem a certeza que deseja expulsar este cliente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Expulsar</button>
      </div>
    </div>
  </div>
</div>
        <div class="modal fade" id="ModalWindowSMSadminc" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Mandar Mensagem ao Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <label for="InputDescription" style="color: #cd1313; margin-left: 35px">Mensagem</label>
        <textarea id="InputDescriptionCamp" rows="3"style="margin-left:10px; margin-right:10px"></textarea>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Enviar</button>
      </div>
    </div>
  </div>
</div>
      

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
            <li>
            <a href="<?php echo site_url('Welcome/adminclient'); ?>">
              <i class="fas fa-user"></i>
              Lista de Clientes
            </a>
          </li>  
          <li >
            <a href="<?php echo site_url('Welcome/adminempresas'); ?>">
              <i class="fas fa-bullhorn"></i>
              Lista de Empresas
            </a>
          </li>
            <li>
            <a href="<?php echo site_url('Welcome/adminpedidos'); ?>">
              <i class="fas fa-credit-card"></i>
              Empresas Pendentes
            </a>
             </li>
          <li>
            <a href="<?php echo site_url('Welcome/adminreport'); ?>">
              <i class="fas fa-user"></i>
              Reports/Denúncias
            </a>
            </li>
          </li>
          <li class="active">
              <a href="<?php echo site_url('Welcome/admindef'); ?>">
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
            <?php $this->load->library('form_validation'); ?>
            <?php $this->load->helper('url'); ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('Welcome/logout'); ?>
              
            <form method="post" >

              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <button type="submit"  class="btn btn-secondary" >Logout</button>
                </li>
               
              </ul>
              </form>

          </div>
        </nav>

            <?php $this->load->library('form_validation'); ?>
            <?php $this->load->helper('url'); ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('Welcome/editardefa'); ?>
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
      <div class="form-group col-md-12">
      <label for="inputN" style="color: #cd1313">Novo Admin</label>
        <input name="Emailn" class="form-control col-sm-12"  aria-describedby="emailHelp"  value="">
      </div>





           </div>
    <button style="margin-top: 10%; margin-left: 30%" type="submit" class="btn btn-danger">Guardar Alterações</button>
</form>
          <br><br>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

<script>
    function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabelaclientes");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
  </body>
</html>