
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_Model {



    public function listempresas() 
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('listaServicos','listaEmpresas.servico = listaServicos.id_servico');
        $query=$this->db->get();
        return $query;
    }

    public function listclientadmin() 
    {
        $this->db->select('*');
        $this->db->from('utilizadores');
        $this->db->join('listaServicos','utilizadores.preferencias = listaServicos.id_servico');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Nome_AdmCliente() 
    {
        $this->db->select('*');
        $this->db->from('utilizadores');
        $this->db->join('listaServicos','utilizadores.preferencias = listaServicos.id_servico');
        $this->db->order_by('utilizadores.nome', 'ASC');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Idade_AdmCliente() 
    {
        $this->db->select('*');
        $this->db->from('utilizadores');
        $this->db->join('listaServicos','utilizadores.preferencias = listaServicos.id_servico');
        $this->db->order_by('utilizadores.data_nascimento', 'ASC');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Genero_AdmCliente() 
    {
        $this->db->select('*');
        $this->db->from('utilizadores');
        $this->db->join('listaServicos','utilizadores.preferencias = listaServicos.id_servico');
        $this->db->order_by('utilizadores.genero', 'ASC');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Nome_AdmEmpresas()
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('listaServicos','listaEmpresas.servico = listaServicos.id_servico');
        $this->db->order_by('listaEmpresas.nome', 'ASC');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Servico_AdmEmpresas()
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('listaServicos','listaEmpresas.servico = listaServicos.id_servico');
        $this->db->order_by('listaServicos.designacao', 'ASC');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Avaliacao_AdmEmpresas()
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('listaServicos','listaEmpresas.servico = listaServicos.id_servico');
        $this->db->order_by('listaEmpresas.avaliacao', 'DESC');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Nome_AdmPendentes()
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('listaServicos','listaEmpresas.servico = listaServicos.id_servico');
        $this->db->where('estado',"Pendente");
        $this->db->order_by('listaEmpresas.nome', 'ASC');
        $query=$this->db->get();
        return $query;
    }

    public function buscar_db_model_Ord_Servico_AdmPendentes()
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('listaServicos','listaEmpresas.servico = listaServicos.id_servico');
        $this->db->where('estado',"Pendente");
        $this->db->order_by('listaServicos.designacao', 'ASC');
        $query=$this->db->get();
        return $query;
    }



    public function listpendente() 
    {
        $this->db->select('*');
        $this->db->from('listaEmpresas');
        $this->db->join('listaServicos','listaEmpresas.servico = listaServicos.id_servico');
        $this->db->where('estado',"Pendente");
        $query=$this->db->get();
        return $query;
    }

    public function reportse()
    {
        $this->db->select('id_reporte,listaEmpresas.nome as EmpresaNome, utilizadores.nome as UtilizadorNome, listaReportse.data_report,listaReportse.motivo,listaReportse.comentario');
        $this->db->from('listaReportse');
        $this->db->join('listaEmpresas','listaReportse.deempresa = listaEmpresas.id_empresa');
        $this->db->join('utilizadores','listaReportse.parautilizador = utilizadores.id_utilizador');
        $query=$this->db->get();
        return $query;

    }

    public function reportsu()
    {
        $this->db->select('id_reportu,listaEmpresas.nome as EmpresaNome, utilizadores.nome as UtilizadorNome, listaReportsu.data_report,listaReportsu.motivo,listaReportsu.comentario');
        $this->db->from('listaReportsu');
        $this->db->join('listaEmpresas','listaReportsu.paraempresa = listaEmpresas.id_empresa');
        $this->db->join('utilizadores','listaReportsu.deutilizador = utilizadores.id_utilizador');
        $query=$this->db->get();
        return $query;

    }


    public function eliminarclient() 
    {
        $this->db->where('parautilizador', $_GET['id']);
        $this->db->delete('listaReportse'); 

        $this->db->where('deutilizador', $_GET['id']);
        $this->db->delete('listaReportsu'); 

        $this->db->where('utilizador', $_GET['id']);
        $this->db->delete('listaCarteiras');

        
        $this->db->where('id_utilizador', $_GET['id']);
        $this->db->delete('utilizadores');    



    }

    public function eliminarempresa() 
    {
        $this->db->where('empresa', $_GET['id']);
        $this->db->delete('listaCampanhas'); 

        $this->db->where('empresa', $_GET['id']);
        $this->db->delete('listaCartoes'); 

        $this->db->where('deempresa', $_GET['id']);
        $this->db->delete('listaReportse'); 

        $this->db->where('paraempresa', $_GET['id']);
        $this->db->delete('listaReportsu'); 


        

        $this->db->where('empresa', $_GET['id']);
        $this->db->delete('listaCarteiras');

     

        $this->db->where('id_empresa', $_GET['id']);
        $this->db->delete('listaEmpresas');    

    }

    public function eliminarreportemputi() 
    {
        $this->db->where('id_reporte', $_GET['id']);
        $this->db->delete('listaReportse');    

    }
    public function eliminarreportutiemp() 
    {
        $this->db->where('id_reportu', $_GET['id']);
        $this->db->delete('listaReportsu');    

    }

}