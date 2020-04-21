<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Alterar Password</title>

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
<body style="background-image: url(<?php echo base_url('images/sun.png');?>);background-attachment: fixed; background-repeat: no-repeat; background-size: 100%; background-size: cover;">
  
  
  

<center>
  <form method="post">
  <br><br>
    <div class="jumbotron" style="width: 60%">
        <h1 style="color: #cd1313">Recuperar Password</h1><br><br>
        <div class="form-group" style="width: 40%">
          <label for="inputName" style="color: #cd1313">Insira a nova password</label>
          <input type="password" name ="Nomeempresa" class="form-control" id="inputName" placeholder="********">
          <br><br>
          <label for="inputName" style="color: #cd1313">Confirme a nova password</label>
          <input type="password" name ="Nomeempresa" class="form-control" id="inputName" placeholder="********">
        </div>
    </div>
  
</form>
</center>

</body>
</html>