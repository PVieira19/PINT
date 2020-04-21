<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php


    $Password = sha1($Password);

    foreach ($list->result() as $user) {
      if($user->email == $Email && $user->password == $Password && $user->estado != 'Pendente')
      { 
        $Email_session = $Email;
        $Pass_session = $Password;
        $session_data = array(
        'Email'=> $Email_session,
        'Pass'=> $Pass_session
          );
      $this->session->set_userdata($session_data);

        $data = $user;
        if($user->estado == 'Admin' )
        {

          $this->load->view('admin_clientes', $data);
          exit();  
        }
        if($user->estado = 'Empresa') 
        {
          $this->load->view('home', $data);
          exit();
        }
      }

    }
    echo '<br><br><center><div style="color: red;"><h1>Insira os Dados Corretos!</h1></div></center>';
    $this->load->view('login');
  ?>
</body>
</html>