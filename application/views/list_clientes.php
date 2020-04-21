<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Lista de Clientes</title>

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
$contmasculino=0;
$contfeminino=0;
$contjovem=0;
$contadulto=0;
$contvelho=0;
$contjan=0;
$contfev=0;
$contmarco=0;
$contabril=0;
$contmaio=0;
$contjunho=0;
$contjulho=0;
$contagosto=0;
$contsetembro=0;
$contoutubro=0;
$contnov=0;
$contdez=0;

?>
<body>

        <div class="modal fade" id="ModalWindowSMSadminc" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja desassociar o Cliente <span id="nome_passar"></span>?<input value="0" id="id_passar" hidden></input></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <button onclick="confirmativo1()" type="button" class="btn btn-danger" >Desassociar</button>
      </div>
      </div>
    </div>
  </div>
</div>


        <div class="modal fade" id="ModalWindowSMSadminc2" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja denunciar este Cliente <span id="nome_passar1"></span>?<input value="0" id="id_passar1" hidden></input></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <button onclick="confirmativo2()" type="button" class="btn btn-danger" >Denunciar</button>
      </div>
      </div>
    </div>
  </div>
</div>















  <div class="wrapper" style="overflow: auto;">
    <!-- Sidebar  -->
    <nav id="sidebar" style=""  >
      <div class="sidebar-header" >
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
    </li>
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
      
      <form method="post" >
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
            <button type="submit" class="btn btn-secondary">Logout</button>

          </li>
          
        </ul>
      </form>
    </div>
  </nav>
  <div style="color: #cd1313;"> <h4>Lista de Clientes</h4> </div>
  <hr style="background-color:#cd1313;"> 



<div class="table-responsive-md"> 
 <table id="listaclientes" class="table table-bordered" style="">
  <thead>
    <tr style="background-color: #E5E5E5;color: #DD3E3E">
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Data de Associação</th>
      <th scope="col">Idade</th>
      <th scope="col">Género</th>
      <th scope="col"><div style="width: 100px"><center>Ação</center></div></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($list6->result() as $row){
      if($row->empresa == $this->session->userdata('ID'))
        {?>
          <tr>
            <td><?php echo $row->id_utilizador;?></td>
            <td><?php echo $row->nome;?></td>
            <td><?php echo $row->data_a;

            $date =  strtotime($row->data_a);

            if(date('M', $date)=='Jan') {
             $contjan++;
           };
           if (date('M', $date)=='Feb') {
             $contfev++;
           };
           if (date('M', $date)=='Mar')
           {
             $contmarco++;
           };
           if(date('M', $date)=='Apr') {
             $contabril++;
           };
           if (date('M', $date)=='May') {
             $contmaio++;
           };
           if (date('M', $date)=='Jun')
           {
             $contjunho++;
           };
           if(date('M', $date)=='Jul') {
             $contjulho++;
           };
           if (date('M', $date)=='Aug') {
             $contagosto++;
           };
           if (date('M', $date)=='Sep')
           {
             $contsetembro++;
           };
           if(date('M', $date)=='Oct') {
             $contoutubro++;
           };
           if (date('M', $date)=='Nov') {
             $contnov++;
           };
           if (date('M', $date)=='Dec')
           {
             $contdez++;
           };



           ?></td>
           <td><?php
           $dateOfBirth = $row->data_nascimento;

           $today = date("Y-m-d");
           $diff = date_diff(date_create($dateOfBirth), date_create($today));
           if (18<$diff->format('%y') AND  35>$diff->format('%y')){
            echo "Idade 18-35";
          }
          if (36<$diff->format('%y') AND  65>$diff->format('%y')){
            echo "Idade 36-65";
          }
          if (66<$diff->format('%y')){
            echo "Idade >66";
          }


          if(18<$diff->format('%y') AND  35>$diff->format('%y')) {
           $contjovem++;
         };
         if (36<$diff->format('%y') AND  65>$diff->format('%y')) {
           $contadulto++;
         };
         if (66<$diff->format('%y'))
         {
           $contvelho++;
         };


         ;?></td>
         <td><?php if($row->genero == 'm') echo "Masculino"; else echo "Feminino";
         
         if($row->genero == 'm') {
           $contmasculino++;
         }
         else ($row->genero == 'f') {
           $contfeminino++
         };

         ?></td>
         <td> <center>
           <a data-toggle="tooltip" title="Reportar" tooltip="fgsdjv"><i class="fas fa-flag" style="color:#cd1313; cursor: pointer;" data-toggle="modal" data-target="#ModalWindowSMSadminc2" onclick="funcaoteste2(<?php echo $row->id_utilizador;?>, '<?php echo $row->nome;?>')"></i></a>

           &ensp;&ensp;&ensp;
           <a data-toggle="tooltip" title="Desassociar"><i class="fas fa-times" style="color:#cd1313; cursor: pointer;" data-toggle="modal" data-target="#ModalWindowSMSadminc" onclick="funcaoteste1(<?php echo $row->id_utilizador;?>, '<?php echo $row->nome;?>')"></i></a>
         </center>
       </td>  


     </tr>

     <?php
   }
 }?>
</tbody>
</table>
</div>
<div>

  <div style="color: #cd1313;"> <h4>Estatísticas</h4> </div>
  <hr style="background-color:#cd1313;"> 

  <div style="overflow: hidden;">
      <div style="float: left;" id="piechart" ></div>
      <div style="float: left;" id="piechart2" ></div>
      <div style="float: left; width: 32% " id="columnchart_values"></div>
  </div>

</div>
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

<script type="text/javascript">
  window.history.forward();
  function noBack()
  {
    window.history.forward();
  }
</SCRIPT>


<script>
  function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("listaclientes");
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
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Sexo', 'Quantidade'],
      ['Masculino', <?php echo $contmasculino ?>],
      ['Feminino', <?php echo $contfeminino ?>]
      ]);

    var options = {
      backgroundColor: '#fafafa',
      title: 'Por Genero'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Idade', 'Quantidade'],
      ['Idade 18-35', <?php echo $contjovem ?>],
      ['Idade 36-65',<?php echo $contadulto ?>],
      ['Idade >65', <?php echo $contvelho ?>]

      ]);

    var options = {
      backgroundColor: '#fafafa',
      title: 'Por Idade'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

    chart.draw(data, options);
  }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Mês", "Quantidade", { role: "style" } ],
      ["Janeiro",<?php echo $contjan?>, "#cd1313"],
      ["Fevereiro", <?php echo $contfev ?>, "#cd1313"],
      ["Março", <?php echo $contmarco ?>, "#cd1313"],
      ["Abril",<?php echo $contabril ?>, "#cd1313"],
      ["Maio",<?php echo $contmaio ?>, "#cd1313"],
      ["Junho",<?php echo $contjunho ?>, "#cd1313"],
      ["Julho",<?php echo $contjulho ?> , "#cd1313"],
      ["Agosto", <?php echo $contagosto ?>, "#cd1313"],
      ["Setembro",<?php echo $contsetembro ?> , "#cd1313"],
      ["Outubro",<?php echo $contoutubro ?> , "#cd1313"],
      ["Novembro", <?php echo $contnov ?>, "#cd1313"],
      ["Dezembro",<?php echo $contdez ?> , "#cd1313"]
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
      title: "Evolução dos Associados por Mês",
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
  }
</script>


<script>
function confirmExclusao() {
      location.href="desassociarcliente?id=<?php echo $row->id_carteira?>";
   }
</script>

<script>
function confirmreport() {
      location.href="reportempresa?id=<?php echo $row->id_utilizador?>";
   }
</script>

  



  <script src="//code.jquery.com/jquery-3.3.1.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#listaclientes').DataTable({
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


<script>
function confirmativo1() {
      
      var str2 = document.getElementById('id_passar').value;
      var str1 = 'desassociarcliente?id=';
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

<script>
function confirmativo2() {
      
      var str2 = document.getElementById('id_passar1').value;
      var str1 = 'reportempresa?id=';
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



</body>
</html>
