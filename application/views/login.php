<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Login</title>

    <!-- Bootstrap CSS CDN -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
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
  </head>

<body style="background-image: url(<?php echo base_url('images/teste.png');?>);
 background-attachment: fixed; 
 background-repeat: no-repeat; 
 background-size: 100%; 
 background-size: cover;">

  <?php $this->load->library('form_validation'); ?>
  <?php $this->load->helper('url'); ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('Welcome/login'); ?>

	<center><form method="post"><br><br>
		<div class="jumbotron" style="width: 80%">
			<h1 style="color: #cd1313">Bem-Vindo ao My Cards!</h1><br><br>	
			<div class="form-group">
    <label for="InputEmail" style="color: #cd1313"><i class="fas fa-envelope"></i> Endereço Email</label>
    <input type="email" name ="Email_Log" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="email@example.com" style="width: 80%;">
  </div>
  <div class="form-group">
    <label for="InputPassword" style="color: #cd1313"><i class="fas fa-unlock-alt"></i> Palavra-Passe</label>
    <input type="password" name ="Pass_Log" class="form-control" id="InputPassword" placeholder="********" style="width: 80%;">
  </div>
    <div>
    	<small id="esqueci"><a href="<?php echo site_url('Welcome/recuperar'); ?>"><u>Esqueci Palavra-Passe</u></a></small> &ensp;
    	<small id="nao_tem"><a href="<?php echo site_url('Welcome/registar'); ?>"><u>Não Tenho Conta</u></a></small>
    </div>
  <br>
  <button type="submit" class="btn btn-danger">Entrar</button>
</div>
</form></center>
</body>
</html>
