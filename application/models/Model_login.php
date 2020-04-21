<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {

   public function buscar_db_model()
   {
      $result = $this->db->get('listaEmpresas');
      return $result;
  }
  public function buscar_db_model2()
  {
      $result = $this->db->get('listaCampanhas');
      return $result;
  }
  public function buscar_db_model3()
  {
    $result = $this->db->get('listaCartoes');
    return $result;
}

public function buscar_db_model4()
{
    $result = $this->db->get('listaAvaliacoes');
    return $result;
}

public function buscar_db_model5()
{
    $result = $this->db->get('utilizadores');
    return $result;
}

public function buscar_db_model6()
{
    $result = $this->db->get('listaCarteiras');
    return $result;
}

public function buscar_db_model100()
{
    $result = $this->db->get('imagens');
    return $result;
}

public function buscar_db_model101()
{
    $this->db->select('*');
    $this->db->from('preferencias');
    $this->db->join('listaServicos','preferencias.preferencia = listaServicos.id_servico');
    $query=$this->db->get();
    return $query;

}

public function buscar_db_model_Ord_Nome()
{
    $this->db->from('listaCampanhas');
    $this->db->order_by('titulo', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_DataI()
{
    $this->db->from('listaCampanhas');
    $this->db->order_by('data_inicio', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_DataF()
{
    $this->db->from('listaCampanhas');
    $this->db->order_by('data_fim', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_Estado()
{
    $this->db->from('listaCampanhas');
    $this->db->order_by('estado', 'ASC');
    $result = $this->db->get();   
    return $result;
}

public function buscar_db_model_Ord_Nome_Card()
{
    $this->db->from('listaCartoes');
    $this->db->order_by('titulo', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_DataI_Card()
{
    $this->db->from('listaCartoes');
    $this->db->order_by('data_inicio', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_DataF_Card()
{
    $this->db->from('listaCartoes');
    $this->db->order_by('data_fim', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_Estado_Card()
{
    $this->db->from('listaCartoes');
    $this->db->order_by('estado', 'ASC');
    $result = $this->db->get();   
    return $result;
}


public function buscar_db_model_Ord_Nome_Cliente()
{
    $this->db->select('*');
    $this->db->from('listaCarteiras');
    $this->db->join('utilizadores','listaCarteiras.utilizador = utilizadores.id_utilizador');
    $this->db->order_by('utilizadores.nome', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_Data_Cliente()
{
    $this->db->select('*');
    $this->db->from('listaCarteiras');
    $this->db->join('utilizadores','listaCarteiras.utilizador = utilizadores.id_utilizador');
    $this->db->order_by('data_a', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_Idade_Cliente()
{
    $this->db->select('*');
    $this->db->from('listaCarteiras');
    $this->db->join('utilizadores','listaCarteiras.utilizador = utilizadores.id_utilizador');
    $this->db->order_by('data_nascimento', 'ASC');
    $result = $this->db->get();   
    return $result;
}
public function buscar_db_model_Ord_Genero_Cliente()
{
    $this->db->select('*');
    $this->db->from('listaCarteiras');
    $this->db->join('utilizadores','listaCarteiras.utilizador = utilizadores.id_utilizador');
    $this->db->order_by('genero', 'ASC');
    $result = $this->db->get();   
    return $result;
}

public function login_email()
{
    $result = $this->input->post('Email_Log');
    return $result;
}
public function login_pass()
{
    $result = $this->input->post('Pass_Log');
    return $result;
}

public function listclient() 
{
    $this->db->select('*');
    $this->db->from('listaCarteiras');
    $this->db->join('utilizadores','listaCarteiras.utilizador = utilizadores.id_utilizador');
    $query=$this->db->get();
    return $query;
}

public function registarempresa() 
{
    $logof=0;
    $comprovativof=0;
    $email=0;



    $this->load->helper('file');
    $this->load->helper(array('form', 'url'));
    $this->load->library('upload');


    $data['nome'] = $this->input->post('Nomeempresa');
    $data['email'] = $this->input->post('emailE');
    $data['password']= sha1($this->input->post('passE'));
    $data['localizacao']= $this->input->post('localizacaoE');
    $data['servico']= $this->input->post('servicoE');
    $data['descricao']= $this->input->post('descricaoE');
    $data['horario']= $this->input->post('horarioR');
    $data['contactos']= $this->input->post('ContactoR');
    $data['avaliacao']= "0";
    $data['navaliacoes']= "0";
    $data['fundo']= "ffffff"; 
    $data['estado']= 'Pendente';

    $this->load->model('Model_login');
    $listmail= $this->Model_login->buscar_db_model();
    

    foreach ($listmail->result() as $user) {
        if ($user->email == $this->input->post('emailE')) 
            {
            	
              $email=2;
          }
           else
           {
       
            $email=1;
        }
    }

if($email==2){?>
     <div style="margin: 0; " class="alert alert-danger"> <center>
               Já existe este email </center>
               </div> <?php
           }


    $config['upload_path'] = './comprovativo/';

    $config['allowed_types'] = 'pdf';

    $config['max_size'] = '10000';

    $config['max_width'] = '10240000';

    $config['max_height'] = '7680000';

    $config['file_name'] = $this->input->post('Nomeempresa')."/comprovativo";

    $this->load->library('upload', $config);
    $this->upload->initialize($config); 



    if ($this->upload->do_upload('comprovativoU'))
    {
        $comprovativof=1;
        $info=$this->upload->data();
        $uploadedfile = $info['file_name'];
        $data['comprovativo']= $uploadedfile;

    }
    else
    {
        ?>
        <div style="margin: 0; " class="alert alert-danger"> <center>
        Erro no Upload do Comprovativo, tem de ser PDF </center>
    </div>

    <?php
}

$config['upload_path'] = './images/';

$config['allowed_types'] = 'jpeg|jpg|gif|png';

$config['max_size'] = '10000';

$config['max_width'] = '10240000';

$config['max_height'] = '7680000';

$config['file_name'] = $this->input->post('Nomeempresa')."/logo";


$this->load->library('upload', $config);
$this->upload->initialize($config);  

if ($this->upload->do_upload('logoU'))
{
    $logof=1;
    $info=$this->upload->data();
    $uploadedfile = $info['file_name'];
    $data['logo']= $uploadedfile;
}
else
{
echo $this->upload->display_errors();
    ?>

    <div style="margin: 0; " class="alert alert-danger"> <center>
    Erro no Upload do Logo, tem de ser Jpeg ou Jpng </center>
</div>
<?php
}
if($logof==1 && $comprovativof==1 && $email==1)
{
    ?>
    <div style="margin: 0; " class="alert alert-success"> <center>
    Registo Concluido com Sucesso, Agora Espere Resposta por Email </center>
</div>
<?php

$this->db->insert('listaEmpresas',$data);
}

}

public function avaliacoes() 
{
    $this->db->select('*');
    $this->db->from('listaAvaliacoes');
    $this->db->join('listaCarteiras','listaAvaliacoes.carteira = listaCarteiras.id_carteira');
    $this->db->join('listaEmpresas','listaCarteiras.empresa = listaEmpresas.id_empresa');
    $this->db->join('utilizadores','listaCarteiras.utilizador = utilizadores.id_utilizador');
    $query=$this->db->get();
    return $query;
}

    public function email_recup()
    {
        $result = $this->input->post('RecuperarEmail');
        return $result;
    }

    public function fotos() 
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('imagens','listaEmpresas.id_empresa = imagens.idEmpresa');
        $query=$this->db->get();
        return $query;
    }

    public function pocaralho() 
    {
    $data['deempresa'] = $this->session->userdata('ID');
    $data['parautilizador'] = $_GET['id'];

    $this->db->insert('listaReportse',$data);

    }



}
?>