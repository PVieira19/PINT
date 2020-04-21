<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Projeto Pint</title>

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
$contser1=0;
$contser2=0;
$contser3=0;
$contser4=0;
$contser5=0;
$contser6=0;
$contser7=0;
$contser8=0;
$contser9=0;


?>
<body>
  <div class="modal fade" id="ModalWindowSMSadminc1" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja eliminar a empresa <span id="nome_passar"></span>?<input value="0" id="id_passar" hidden></input></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
          <button onclick="confirmativo()" type="button" class="btn btn-danger">Aceitar</button>
        </div>
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
            <a href="<?php echo site_url('Welcome/adminclient'); ?>">
              <i class="fas fa-user"></i>
              Lista de Clientes
            </a>
          </li>  
          <li >
            <li class="active">
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
          <li>
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

          <h4 style="color: #cd1313;">Lista de Empresas</h4>
          <div class="table-responsive-sm">
            <hr style="background-color:#cd1313;"> 

          <div class="table-responsive-xl" style=""> 
           <table id="tabelaempresas" class="table table-bordered" style="">
            <thead>
              <tr style="background-color: #E5E5E5;color: #DD3E3E">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Contactos</th>
                <th scope="col">Serviço</th>
                <th scope="col">Avaliação</th>
                <th scope="col"><div style="width: 100px"><center>Ação</center></div></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($list10->result() as $row){
                if($row->estado != "Admin" AND $row->estado != "Pendente")
                  { ?>

                    <tr>
                      <td><?php echo $row->id_empresa;?></td>
                      <td><?php echo $row->nome;?></td>
                      <td><?php echo $row->email;?></td>
                      <td><?php echo $row->contactos;?></td>
                      <td><?php echo $row->designacao;
                      if($row->designacao =='Restaurantes') {
                       $contser1++;
                     };
                     if ($row->designacao=='Informatica') {
                       $contser2++;
                     };
                     if ($row->designacao =='Esteticistas')
                     {
                       $contser3++;
                     };
                     if($row->designacao =='Cabeleireiros') {
                       $contser4++;
                     };
                     if ($row->designacao =='Mercearias') {
                       $contser5++;
                     };
                     if ($row->designacao =='Papelarias')
                     {
                       $contser6++;
                     };
                     if($row->designacao =='Dentistas') {
                       $contser7++;
                     };
                     if ($row->designacao =='Viagens') {
                       $contser8++;
                     };
                     if ($row->designacao =='Outro')
                     {
                       $contser9++;
                     };?></td>
                     <td><?php echo $row->avaliacao;?></td>
                     <td>
                      <center>
                        <div class="row" style="width: 80px;">
                         <div class="col" style="padding: 12px 0px 0px 0px;"><i class="fas fa-trash-alt" style="color:#cd1313; cursor: pointer; font-size: 20px;" data-toggle="modal" data-target="#ModalWindowSMSadminc1" onclick="funcaoteste(<?php echo $row->id_empresa;?>, '<?php echo $row->nome;?>')"></i></div>
                         <div class="col" style="padding: 10px 0px 0px 0px;"><a href="mailto: <?php echo $row->email; ?>"><i class="fas fa-envelope-square" style="color:#cd1313; cursor: pointer; height:23px; width:20px; font-size: 24px;"></i></a></div>
                       </div>
                       </center>
                    </td>

                  </tr>


                <?php }
              } ?>
            </tbody>
          </table>
        </div>
          <h4 style="color: #cd1313;">Estatisticas</h4>
            <hr style="background-color:#cd1313;"> 

        <div id="columnchart_values" style="height: 35%; overflow: auto;"></div>


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

    <script>
      function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabelaempresas");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Serviço", "Quantidade", { role: "style" } ],
      ["Restaurantes",<?php echo $contser1?>, "#cd1313"],
      ["Informática", <?php echo $contser2 ?>, "#cd1313"],
      ["Esteticistas", <?php echo $contser3 ?>, "#cd1313"],
      ["Cabeleireiros",<?php echo $contser4 ?>, "#cd1313"],
      ["Mercearias",<?php echo $contser5 ?>, "#cd1313"],
      ["Papelarias",<?php echo $contser6 ?>, "#cd1313"],
      ["Dentistas",<?php echo $contser7 ?> , "#cd1313"],
      ["Viagens", <?php echo $contser8 ?>, "#cd1313"],
      ["Outro",<?php echo $contser9 ?> , "#cd1313"]
      ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
     { calc: "stringify",
     sourceColumn: 1,
     type: "string",
     role: "annotation" },
     2]);

    var options = {
      backgroundColor: '#fafafa',
      title: "Serviço",
      width: 600,
      height: 400,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
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
  function funcaoteste(parametro_id, parametro_nome){
    document.getElementById('id_passar').value = parametro_id;
    document.getElementById('nome_passar').innerHTML = parametro_nome;
  }
</script>

  <script src="//code.jquery.com/jquery-3.3.1.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#tabelaempresas').DataTable({
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