<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Registar</title>

  <!-- Bootstrap CSS CDN -->
  <link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
  crossorigin="anonymous"
  />
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>"/>

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
    .clica_link:hover{
      color: #cd1313;
    }
  </style>
</head>
<body style="background-image: url(<?php echo base_url('images/teste.png');?>);background-attachment: fixed; background-repeat: no-repeat; background-size: 100%; background-size: cover;">



  <?php 
    $this->load->helper('form');
    echo form_open_multipart('Welcome/adicionarempresa'); ?>

  <center><form method="post" enctype="multipart/form-data">
    <div class="jumbotron" style="width: 80%">
      <h1 style="color: #cd1313">Bem-Vindo ao My Cards!</h1><br><br>
      <div class="form-group">
        <label for="inputName" style="color: #cd1313">Nome da Empresa</label>
        <input type="text" name ="Nomeempresa" class="form-control" id="inputName" placeholder="Ex: Burguer King" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail" style="color: #cd1313">Email</label>
          <input type="email" name ="emailE" class="form-control" id="inputEmail4" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword" style="color: #cd1313">Password</label>
          <input type="password" name ="passE" class="form-control" id="inputPassword4" placeholder="Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress" style="color: #cd1313">Localização</label>
        <input type="text" name ="localizacaoE" class="form-control" id="inputAddress" placeholder="Ex: Bairro de Santa Eulália, Repeses, Viseu " required>
      </div>
      <br>
      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputservico" style="color: #cd1313">Serviço</label>
          <select name ="servicoE" id="inputservico" class="form-control" required>
            <option selected value="0">Escolher...</option>
            <option value="2">Restaurante</option>
            <option value="3">Informática</option>
            <option value="4">Estética</option>
            <option value="5">Cabeleireiro</option>
            <option value="6">Mercearias</option>
            <option value="7">Papelarias</option>
            <option value="8">Dentistas</option>
            <option value="9">Viagens</option>
            <option value="10">Outro</option>
          </select>
        </div>
        <div class="form-group col-md-7">
          <label for="exampleFormControlTextarea1" style="color: #cd1313">Horário</label>
          <input type="text" name ="horarioR" class="form-control" id="exampleFormControlTextarea1" style="height:50%" rows="4" placeholder="Ex: Dias Úteis: 9h - 12h  14h-19h"></textarea>
        </div>

        <div class="form-group col-md-3">
          <label for="exampleFormControlTextarea1" style="color: #cd1313">Contactos</label>
          <input type="text" name ="ContactoR" class="form-control" id="exampleFormControlTextarea1" style="height:50%" rows="4" placeholder="Ex: Email de Contacto"></textarea>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color: #cd1313">Insira a sua Descrição</label>
        <input type="text" name ="descricaoE" class="form-control" id="exampleFormControlTextarea1" style="height:50%" rows="4" placeholder="Ex: Uma Empresa fundada há 10 anos e com muita experiência no ramo!"></textarea>


        <br><br>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="inputFoto" style="color: #cd1313">Envie um Comprovativo da Empresa</label>
            <input name ="comprovativoU" type="file" class="form-control-file" id="comprovativoU" placeholder="Comprovativo" required>
          </div>

        <div class="form-group col-md-6">
          <label for="inputFoto" style="color: #cd1313">Escolha o Logotipo</label>
          <input name ="logoU" type="file" class="form-control-file" id="logoU" placeholder="Logo" required>
        </div>
      </div>
        <div class="form-check">
          <br><br>
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label for="exampleCheck1">Li e Aceito os <a target="_blank" href="<?php echo site_url('Welcome/termos'); ?>" class="clica_link">Termos e Condiçoes</a></label>
  </div>

      <br><br>
      <button type="submit" class="btn btn-danger">Criar Conta</button>
      <br><br>
      <div>
       <small id="nao_tem"><a href="<?php echo site_url('Welcome/index'); ?>"><u>Já Tenho Conta</u></a></small>
     </div>
   </div>
 </div> <!--Fim da Caixa-->
</form>
</div>
</center>

</body>
</html>