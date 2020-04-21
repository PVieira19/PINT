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
<body style="background-image: url(<?php echo base_url('images/sun.png');?>);background-attachment: fixed; background-repeat: no-repeat; background-size: 100%; background-size: cover;">
  
  
  <?php foreach ($list->result() as $row){
  if($row->email == $email_rec)
    {
      $id = $row->id;
      $link="http://193.137.7.33/~estgv16833/index.php/Welcome/passenova?id=".$id;
      $assunto = "Recuperação Password - MyCards";
      $mensagem = "Obrigado por nos contactar! Por favor clique no seguinte link para recuperar a sua conta:".$link;
      $from = "alexandrefroberto@gmail.com";
      $headers="MIME-Version= 1.0" . '\r\n';
      $headers .="Content-type: text/html; charset=utf-8" . '\r\n';
      $headers .="From" . $from .'\r\n';

      mail($email_rec, 'Recuperar Password', 'OLA');
      exit();
    }
  }
    echo '<br><br><center><div style="color: red;"><h1>Insira os Dados Corretos!</h1></div></center>';
    $this->load->view('recuperarpass');
  ?>

  

</body>
</html>