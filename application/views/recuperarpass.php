<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Recuperar Password</title>

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
</head>
<body style="background-image: url(<?php echo base_url('images/teste.png');?>);background-attachment: fixed; background-repeat: no-repeat; background-size: 100%; background-size: cover;">
  
  
  <?php $this->load->library('form_validation'); ?>
  <?php $this->load->helper('url'); ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('Welcome/recuperarconta'); ?>

  <center>
    <form method="post">
      <br><br>
      <div class="jumbotron" style="width: 80%">
        <h1 style="color: #cd1313">Recuperar Conta</h1><br><br>
        <div class="form-group">
          <label for="inputRecuperarEmail" style="color: #cd1313">Insira o seu email</label>
          <input type="email" name ="RecuperarEmail" class="form-control" id="inputRecuperarEmail" placeholder="Ex: exemplo@gmail.com">
        </div>
        <br>
        <button type="submit" class="btn btn-danger">Recuperar Conta</button>
      </div>
    </form>
  </center>

</body>
</html>