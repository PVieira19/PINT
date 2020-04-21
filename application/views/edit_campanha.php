<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Editar Campanha</title>
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

?>

<body>

  <div class="modal fade" id="ModalWindowSMSadminc1" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja ativar esta Campanha <span id="nome_passar"></span>?<input value="0" id="id_passar" hidden></input></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
          <button onclick="confirmativo1()" type="button" class="btn btn-danger" >Ativar</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalWindowSMSadminc2" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja terminar esta Campanha <span id="nome_passar1"></span>?<input value="0" id="id_passar1" hidden></input></h5>
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

<div class="modal fade" id="ModalWindowSMSadminc3" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCamp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCamp">Tem a certeza que deseja apagar esta Campanha <span id="nome_passar2"></span>?<input value="0" id="id_passar2" hidden></input></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
        <button onclick="confirmativo3()" type="button" class="btn btn-danger" >Apagar</button>
      </div>
    </div>
  </div>
</div>
</div>


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

      <li class="active">
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

  <div style="color: #cd1313;"> <h4>Histórico de Campanhas</h4> </div>
  <hr style="background-color:#cd1313;">




  <div class="table-responsive-md">
   <table id="tablecampanhas" class="table table-bordered" style="">
    <thead>
      <tr style="background-color: #E5E5E5;color: #DD3E3E">

        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Desconto</th>
        <th scope="col">Alvo</th>
        <th scope="col">Inicio</th>
        <th scope="col">Fim</th>
        <th scope="col">Estado</th>
        <th scope="col"><div style="width: 100px"><center>Ação</center></div></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list2->result() as $row){
        if($row->empresa == $this->session->userdata('ID'))
          {$variavel =0;
            if ($row->tipo == 'e')
             $variavel = '€';
           else
             $variavel = '%';?>
           <tr>

            <td ><?php echo $row->titulo;?></td>
            <td><?php echo $variavel;?></td>
            <td><?php echo $row->desconto;?></td>
            <td><?php echo $row->alvo;?></td>
            <td><?php echo $row->data_inicio;?></td>
            <td><?php echo $row->data_fim;?></td>
            <td><?php echo $row->estado;?></td>
            <td>
              <div class="row">
                <div class="col-md-2" style=" margin-top: 4px; margin-left: 10px;" data-toggle="tooltip" title="Editar"><center><a href="#editCamp"><i onclick="funcao(<?php echo $row->id_campanha;?>, '<?php echo $row->titulo;?>', '<?php echo $row->tipo;?>', '<?php echo $row->desconto;?>', '<?php echo $row->alvo;?>', '<?php echo $row->data_inicio;?>', '<?php echo $row->data_fim;?>', '<?php echo $row->descricao;?>', '<?php echo '#'.$row->fundo;?>', '<?php echo '#'.$row->letra;?>' )" class="fas fa-edit" style="color:#cd1313; font-size: 19px;"></i></a></center></div>

                <div class="col-md-2" style=" margin-top: 4px;" data-toggle="tooltip" title="Ativar"><center><i class="fas fa-check" style="color:#cd1313; cursor: pointer; font-size: 20px;"data-toggle="modal" data-target="#ModalWindowSMSadminc1" onclick="funcaoteste1(<?php echo $row->id_campanha;?>, '<?php echo $row->titulo;?>')"></i></center></div>

                <div class="col-md-2" style="margin-top: 2px;" data-toggle="tooltip" title="Terminar"><center><i class="fas fa-times"style="color:#cd1313; cursor: pointer; font-size: 25px;"data-toggle="modal" data-target="#ModalWindowSMSadminc2" onclick="funcaoteste2(<?php echo $row->id_campanha;?>, '<?php echo $row->titulo;?>')"></i></center></div>

                <div class="col-md-2" style=" margin-top: 4px;" data-toggle="tooltip" title="Eliminar"><center><i class="fas fa-trash-alt"style="color:#cd1313; cursor: pointer; font-size: 20px;"data-toggle="modal" data-target="#ModalWindowSMSadminc3" onclick="funcaoteste3(<?php echo $row->id_campanha;?>, '<?php echo $row->titulo;?>')"></i></center></div>


              </div>
            </td>

          </tr>

        <?php }
      }?>
    </tbody>
  </table>
</div>
<br>


<div id="editCamp" style="color: #cd1313;"> <h4>Editar Campanha</h4> </div>
<hr style="background-color:#cd1313;">  
<br>
<div class="row">
  <div class="col">

    <?php $this->load->library('form_validation'); ?>
    <?php $this->load->helper('url'); ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Welcome/editarcampanha'); ?>
    
    <form method="post" >

      <div class="form-row">

        <div class="form-group col-md-12">
          <label for="inputNameCamp" style="color: #cd1313">Nome da Campanha</label>
          <input type="text" class="form-control" id="inputNameCamp" placeholder="Ex: Descontos em Todos os Bolos!" name="NomeCamp">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="inputType" style="color: #cd1313">Tipologia</label>
          <select id="inputType" class="form-control" name="tipologia">
            <option selected value=" ">Escolha...</option>
            <option value="e">Desconto em €</option>        
            <option value="p">Desconto em %</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputQuantidade" style="color: #cd1313">Quant.</label>
          <input name ="Namedesconto" type="number" class="form-control" id="inputQuantidade" placeholder="5" >
        </div>
        <div class="form-group col-md-5">
          <label for="inputDateBeginCamp" style="color: #cd1313">Data de Início</label>
          <input name="NamedataI" type="date" class="form-control" id="inputDateBeginCamp">
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputPublic" style="color: #cd1313">Alvo</label>
          <select id="inputPublic" class="form-control" name="Namealvo" >
            <option selected value="0">Escolha...</option>
            <option value="Idade (18-35)">Idade (18-35)</option> 
            <option value="Idade (36-65)">Idade (36-65)</option>
            <option value="Idade (>66)">Idade (>66)</option>        
            <option value="Menos Ativos">Menos Ativos</option>
            <option value="Mais Ativos">Mais Ativos</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Novos Associados">Novos Associados</option>
            <option value="Todos">Todos</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="InputColorBackCampEdit" style="color: #cd1313">Fundo</label><br>
          <div><input name="Namefundo" type="color" class="form-control" id="InputColorBackCampEdit" value="#CD1313" style="height: 38px;"></div>
        </div>
        <div class="form-group col-md-2">
          <label for="InputColorFontCampEdit" style="color: #cd1313">Letra</label><br>
          <div><input name="Nameletra" type="color" class="form-control" id="InputColorFontCampEdit" value="#FFFFFF" style="height: 38px;"></div>
        </div>
        <div class="form-group col-md-5 ">
          <label for="inputDateEndCamp" style="color: #cd1313">Data de Fim</label>
          <input name="NamedataF" type="date" class="form-control" id="inputDateEndCamp">
        </div>
      </div>
      <div class="form-group">
        <label for="InputDescription" style="color: #cd1313">Insira a Descrição da Campanha</label>
        <textarea name="Namedescricao" class="form-control" id="InputDescriptionCampEdit" rows="4" placeholder="Ex: Adira já! Efectua uma encomenda de 2 bolos e pague apenas um!" maxlength="100"></textarea>
      </div>

      <input style="margin: 10px;" type="button" class="btn btn-secondary" onclick="funcaoview2()" value="Pré-Visualizar Campanha"> &ensp;&ensp;
      <button style="margin: 10px;" type="submit" class="btn btn-danger">Editar Campanha</button>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputIDCamp" style="color: #cd1313"></label>
          <input type="hidden" class="form-control" id="inputIDCamp" name="IDCamp">
        </div>
      </div>
    </form>

    <br>
  </div>
  <div class="col">
   <small style="color: #848484; margin-left: 5px;">Pré-Visualização da Campanha</small><br>

   <div class="card">
    <div style="background-color: #cd1313; color: white; height: 150px; padding: 30px;" id="TituloEdit"> 
      <center>
        <h4 class="card-title" id="TituloTemaEdit">Descontos em Todos os Bolos!</h4>
        <div class="row" style="margin-left: 40%"><h3 class="card-title" id="TituloDescontoEdit">-5&ensp;</h3><h3 id="TituloTipoEdit"> €</h3></div>
      </center>
    </div>
    <div class="card-body"> 
      <h5 class="card-title" id="TemaEdit">Descontos em Todos os Bolos!</h5>
      <p class="card-text" id="DescreveEdit">Adira já! Efectua uma encomenda de dois bolos e pague apenas um!</p><br><br><small style="font-family: 'Poppins', sans-serif; font-size: 1.1em; font-weight: 300; line-height: 1.7em; color: #999;">Válida de <span id="DataInicioEdit">15/05/2019</span> até <span id="DataFimEdit">15/05/2019.</span></small>
    </div> 
  </div>
</div>
</div>
<br>
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
  function funcao(p1, p2, p3, p4, p5, p6, p7, p8, p9, p10){
    document.getElementById("inputIDCamp").value = p1;
    document.getElementById("inputNameCamp").value = p2;
    document.getElementById("inputType").value = p3;  
    document.getElementById("inputQuantidade").value = p4;
    document.getElementById("inputPublic").value = p5;
    document.getElementById("inputDateBeginCamp").value = p6;
    document.getElementById("inputDateEndCamp").value = p7;
    document.getElementById("InputDescriptionCampEdit").value = p8;
    document.getElementById("InputColorBackCampEdit").value = p9;
    document.getElementById("InputColorFontCampEdit").value = p10;

    document.getElementById("TituloTemaEdit").innerHTML = p2;
    document.getElementById("TemaEdit").innerHTML = p2;
    document.getElementById("TituloDescontoEdit").innerHTML = p4;
    if(p3 == 'p')
      document.getElementById("TituloTipoEdit").innerHTML = '%';
    else
      document.getElementById("TituloTipoEdit").innerHTML = '€';   
    document.getElementById("DataInicioEdit").innerHTML = p6;
    document.getElementById("DataFimEdit").innerHTML = p7;
    document.getElementById("TituloEdit").style.backgroundColor = p9;
    document.getElementById("TituloEdit").style.color = p10;
    document.getElementById("DescreveEdit").innerHTML = p8;

  }
</script>


<script>
 function funcaoview2(){

  document.getElementById("TituloTemaEdit").innerHTML = document.getElementById("inputNameCamp").value;
  document.getElementById("TemaEdit").innerHTML = document.getElementById("inputNameCamp").value;
  document.getElementById("TituloDescontoEdit").innerHTML = document.getElementById("inputQuantidade").value;
  if (document.getElementById("inputType").value == 'e') 
    document.getElementById("TituloTipoEdit").innerHTML = '€';
  else 
    document.getElementById("TituloTipoEdit").innerHTML = '%';  document.getElementById("DataInicioEdit").innerHTML = document.getElementById("inputDateBeginCamp").value;
  document.getElementById("DataFimEdit").innerHTML = document.getElementById("inputDateEndCamp").value;
  document.getElementById("TituloEdit").style.backgroundColor = document.getElementById("InputColorBackCampEdit").value;
  document.getElementById("TituloEdit").style.color = document.getElementById("InputColorFontCampEdit").value;
  document.getElementById("DescreveEdit").innerHTML = document.getElementById("InputDescriptionCampEdit").value;
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
 document.getElementById("inputDateBeginCamp").setAttribute("min", hoje);

</script>
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, "edit_camp" );
  }
</script>


<script src="//code.jquery.com/jquery-3.3.1.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function(){
    $('#tablecampanhas').DataTable({
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
      var str1 = 'ativarcampanha?id=';
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
      var str1 = 'terminarcampanha?id=';
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
function confirmativo3() {
      
      var str2 = document.getElementById('id_passar2').value;
      var str1 = 'eliminarcampanha?id=';
      var passar = str1.concat(str2);
      location.href= passar;
      
   }
</script>
<script>
  function funcaoteste3(parametro_id, parametro_nome){
    document.getElementById('id_passar2').value = parametro_id;
    document.getElementById('nome_passar2').innerHTML = parametro_nome;
  }
</script>







</body>
</html>