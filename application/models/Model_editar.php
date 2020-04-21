<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_editar extends CI_Model {

    public function editarCamp()
    {
        $data['empresa'] = $this->session->userdata('ID');

        $data['id_campanha'] = $this->input->post('IDCamp');
        $data['titulo'] = $this->input->post('NomeCamp');
        $data['tipo'] = $this->input->post('tipologia');
        $data['desconto'] = $this->input->post('Namedesconto');
        $data['alvo'] = $this->input->post('Namealvo');
        $data['descricao'] = $this->input->post('Namedescricao');
        $fundo = $this->input->post('Namefundo');
        $data['fundo'] = substr($fundo, 1);
        $letra = $this->input->post('Nameletra');
        $data['letra'] = substr($letra, 1);
        $data['data_inicio'] = $this->input->post('NamedataI');
        $data['data_fim'] = $this->input->post('NamedataF');
        
        
        
        $currentDateTime2 = date('Y-m-d H:i');

        $currentDateTime3 = date('Y-m-d H:i',strtotime("$currentDateTime2 - 1 hour"));

        $currentDateTime4 = date('Y-m-d H:i',strtotime("$currentDateTime3 + 5 minutes"));

        $dateandroid = date('Y-m-d H:i',strtotime("$currentDateTime4"));

        $data['data_android'] = $dateandroid;
        
        

        $currentDateTime = date('Y-m-d');

        if($currentDateTime == $this->input->post('NamedataI'))
        {
            $data['estado']= "Ativa";
        }
        else
        {
            $data['estado']="Pendente";
        }

        if($this->input->post('NamedataI')>$this->input->post('NamedataF'))
        { 
            ?>

            <div style="margin: 0; " class="alert alert-danger"> <center>
            Data de inicio nao pode ser anterior a final! </center>
        </div>

        <?php
    }
    else
    {
        
        ?><div style="margin: 0; " class="alert alert-success"> <center>
        Campanha Editada com Sucesso! </center>
        </div><?php
        $this->db->where('id_campanha', $this->input->post('IDCamp'));
        $this->db->update('listaCampanhas', $data);   
    }              
}

public function editarCard()
{
    $data['empresa']= $this->session->userdata('ID');

    $data['id_cartao'] = $this->input->post('IDCard');
    $data['titulo'] = $this->input->post('NomeCartao');
    $data['ncarimbos'] = $this->input->post('CarimbosEDIT');
    $data['descricao'] = $this->input->post('descricaoCardE');
    $data['data_inicio']= $this->input->post('NameDataIEditC');
    $data['data_fim']= $this->input->post('NameDataFEditC');
    
    $currentDateTime = date('Y-m-d');

    if($currentDateTime == $this->input->post('NameDataIEditC'))
    {
        $data['estado']= "Ativo";
    }
    else
    {
        $data['estado']="Pendente";
    }

    if($this->input->post('NameDataIEditC')>$this->input->post('NameDataFEditC'))
    { 
        ?>

        <div style="margin: 0; " class="alert alert-danger"> <center>
        Data de inicio nao pode ser anterior a final! </center>
    </div>

    <?php
}
else
{

    ?><div style="margin: 0; " class="alert alert-success"> <center>
    Cartão Editado com Sucesso! </center>
    </div><?php
    $this->db->where('id_cartao', $this->input->post('IDCard'));
    $this->db->update('listaCartoes', $data);
}              
}

public function aceitarpendente() 
{
    $data['estado']= "Empresa";

    $this->db->where('id_empresa', $_GET['id']);
    $this->db->update('listaEmpresas', $data); 

}

public function terminarcard() 
{
    $data['estado']= "Terminado";

    $this->db->where('id_cartao', $_GET['id']);
    $this->db->update('listaCartoes', $data); 

}

public function terminarcamp() 
{

    $data['estado']= "Terminado";

    $this->db->where('id_campanha', $_GET['id']);
    $this->db->update('listaCampanhas', $data);     
}

public function eliminarcamp() 
{
    $this->db->where('id_campanha', $_GET['id']);
    $this->db->delete('listaCampanhas');     
}

public function eliminarcard() 
{
    $this->db->where('id_cartao', $_GET['id']);
    $this->db->delete('listaCartoes');     
}

public function definicoesE() 
{


    $this->load->helper('file');
    $this->load->helper(array('form', 'url'));
    $this->load->library('upload');




    $data['nome'] =$this->input->post('NomeE');
    $data['descricao'] = $this->input->post('descricaoE');
    $data['localizacao'] = $this->input->post('localizacaoE');
    $data['horario'] = $this->input->post('horarioE');
    $data['contactos'] = $this->input->post('contactosE');



    $passantiga= sha1($this->input->post('PassA'));

    if($this->input->post('PassA')!=NULL && $this->input->post('PassN') !=NULL)
        if($passantiga == $this->session->userdata('Pass'))
        {
            $data['password'] = sha1($this->input->post('PassN'));
            $Pass_session = sha1($this->input->post('PassN'));
            $session_data = array(  
                'Pass'=> $Pass_session,
            );
            $this->session->set_userdata($session_data);
        }
        else{?>

           <div class="alert alert-danger" style="margin: 0;"><center>
           Palavra-Passe Antiga Incorreta!! </center>
       </div>

       <?php
   }

   $config['upload_path'] = './fotografias/';

   $config['allowed_types'] = 'jpeg|jpg|png|gif';

   $config['max_size'] = '10000';

   $config['max_width'] = '10240000';

   $config['max_height'] = '7680000';

   $config['file_name'] = $this->input->post('NomeE')."/foto";

   $this->load->library('upload', $config);
   $this->upload->initialize($config); 

   if ($this->upload->do_upload('fotoU'))
   {
    $info=$this->upload->data();
    $uploadedfile = $info['file_name'];
    $data1['nomef']= $uploadedfile;
    $data1['idEmpresa']= $this->session->userdata('ID');
    $this->db->insert('imagens', $data1);   
}

$this->db->where('email', $this->session->userdata('Email'));
$this->db->update('listaEmpresas', $data);   

}

public function definicoesA() 
{
    $data['nome'] =$this->input->post('NomeE');
    $passantiga= sha1($this->input->post('PassA'));



    if($this->input->post('PassA')!=NULL && $this->input->post('PassN') !=NULL)
        if($passantiga == $this->session->userdata('Pass'))
        {
            $data['password'] = sha1($this->input->post('PassN'));
            $Pass_session = sha1($this->input->post('PassN'));
            $session_data = array(  
                'Pass'=> $Pass_session,
            );
            $this->session->set_userdata($session_data);
        }
        else{
           echo "<center>Password Antiga Errada!</center>";
       }

       if($this->input->post('Emailn')!=NULL)
       {
        $data['estado']='Admin';
        $this->db->where('email', $this->input->post('Emailn'));
        $this->db->update('listaEmpresas', $data);              
    }


    $this->db->where('email', $this->session->userdata('Email'));
    $this->db->update('listaEmpresas', $data);   

}


public function dessacclient(){
   
    $this->db->where('utilizador', $_GET['id']);
    $this->db->delete('listaCarteiras'); 

    
}


public function eliminarfoto2()
{
    $this->db->where('id', $_GET['id']);
    $this->db->delete('imagens');

}


public function ativarcamp() 
{

    $data['estado']= "Ativa";

    $this->db->where('id_campanha', $_GET['id']);
    $this->db->update('listaCampanhas', $data);     
}


public function ativarcard() 
{
    $data['estado']= "Ativo";

    $this->db->where('id_cartao', $_GET['id']);
    $this->db->update('listaCartoes', $data); 

}


public function atualizapasse()
{
    $pass_sujeito = sha1($this->input->post('NovaPass')); 
    $id_sujeito = $this->input->post('id_do_gajo');
    $this->db->where('id_empresa', $id_sujeito);
    $this->db->set('password', $pass_sujeito);
    $this->db->update('listaEmpresas');
}

}
