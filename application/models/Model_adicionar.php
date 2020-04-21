<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_adicionar extends CI_Model {


    public function adicionarCamp()
    {
        $data['titulo'] = $this->input->post('NomeC');
        $data['descricao'] = $this->input->post('descricaocamp');
        $data['tipo']= $this->input->post('NameTipologiaAdd');
        $data['desconto']= $this->input->post('NameDescontoAdd');
        $data['alvo']= $this->input->post('NameAlvoAdd');
        $fundo = $this->input->post('Namefundo');
        $data['fundo'] = substr($fundo, 1);
        $letra = $this->input->post('Nameletra');
        $data['letra'] = substr($letra, 1);
        $data['data_inicio']= $this->input->post('NameDataIAdd');
        $data['data_fim']= $this->input->post('NameDataFAdd');
        $data['empresa']= $this->session->userdata('ID');
        
        $currentDateTime2 = date('Y-m-d H:i');

        $currentDateTime3 = date('Y-m-d H:i',strtotime("$currentDateTime2 - 1 hour"));

        $currentDateTime4 = date('Y-m-d H:i',strtotime("$currentDateTime3 + 5 minutes"));

        $dateandroid = date('Y-m-d H:i',strtotime("$currentDateTime4"));

        $data['data_android'] = $dateandroid;

        $currentDateTime = date('Y-m-d');

        if($currentDateTime == $this->input->post('NameDataIAdd'))
        {
            $data['estado']= "Ativa";
        }
        else
        {
            $data['estado']= "Pendente";
 
        }


        if($this->input->post('NameDataIAdd')>$this->input->post('NameDataFAdd'))
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
        Campanha Criada com Sucesso! </center>
        </div><?php
        $this->db->insert('listaCampanhas',$data);
    }


}

public function adicionarCard()
{
    $data['titulo'] = $this->input->post('NomeCardAdd');
    $data['ncarimbos'] = $this->input->post('inputNumberCard');
    $data['descricao'] = $this->input->post('descricaoCard');
    $data['data_inicio']= $this->input->post('NameDataIAddC');
    $data['data_fim']= $this->input->post('NameDataFAddC');
    $data['empresa']= $this->session->userdata('ID');
    $fundo = $this->input->post('NameFundoAdd');
        $data['fundo'] = substr($fundo, 1);
        $quadrados = $this->input->post('NameQuadradosAdd');
        $data['quadrados'] = substr($quadrados, 1);
     $currentDateTime = date('Y-m-d');

        if($currentDateTime == $this->input->post('NameDataIAddC'))
        {
            $data['estado']= "Ativo";
        }
        else
        {
            $data['estado']= "Pendente";
 
        }

    if($this->input->post('NameDataIAddC')>$this->input->post('NameDataFAddC'))
    { 
        ?>

        <div style="margin: 0; " class="alert alert-danger"> <center>
        Data de inicio nao pode ser anterior a final! </center>
    </div>

    <?php
}
else{
    ?><div style="margin: 0; " class="alert alert-success"> <center>
    Cartão Criado com Sucesso! </center>
    </div><?php

    $this->db->insert('listaCartoes',$data);}

}
}