<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('bonito');
	}

	public function login(){

		$config = array(
			array(
				'field' => 'Email_Log',
				'label' => 'Email Utilizador',
				'rules' => 'required|min_length[4]|max_length[40]'
			),
			array(
				'field' => 'Pass_Log',
				'label' => 'Password',
				'rules' => 'required|min_length[4]|max_length[20]'
			)
		);
		$this->load->library('form_validation');
		$this->form_validation->set_rules($config);
		if(($this->form_validation->run())==FALSE)
		{
			$this->load->view('login');

		}
		else
		{
			$this->load->database();
			$this->load->model('Model_login');
			$this->load->model('Model_admin');
			$data['list'] = $this->Model_login->buscar_db_model();
			$data['list2'] = $this->Model_login->buscar_db_model2();
			$data['list3'] = $this->Model_login->buscar_db_model3();
			$data['list4'] = $this->Model_login->buscar_db_model4();
			$data['list5'] = $this->Model_login->buscar_db_model5();
			$data['list10'] = $this->Model_admin->listclientadmin();
			$data['list11'] = $this->Model_login->avaliacoes();
			$data['list12'] =$this->Model_login->buscar_db_model101();
			$data['Email'] = $this->Model_login->login_email();
			$data['Password'] = $this->Model_login->login_pass();
			$this->load->view('valida_login', $data);
			
		}
	}

	public function bonito()
	{
		$this->load->view('bonito');
	}

	public function add_camp()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('add_campanha.php',$data);
	}

	public function edit_camp()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('edit_campanha.php',$data);

	}

	public function edit_camp_nome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model_Ord_Nome();
		$this->load->view('edit_campanha.php',$data);

	}

	public function edit_camp_datai()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model_Ord_DataI();
		$this->load->view('edit_campanha.php',$data);
	}

	public function edit_camp_dataf()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model_Ord_DataF();
		$this->load->view('edit_campanha.php',$data);

	}

	public function edit_camp_estado()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model_Ord_Estado();
		$this->load->view('edit_campanha.php',$data);

	}

	public function add_card()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$this->load->view('add_cartao.php',$data);
	}

	public function edit_card()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$this->load->view('edit_cartao.php',$data);

	}

	public function edit_card_nome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model_Ord_Nome_Card();
		$this->load->view('edit_cartao.php',$data);

	}

	public function edit_card_datai()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model_Ord_DataI_Card();
		$this->load->view('edit_cartao.php',$data);

	}

	public function edit_card_dataf()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model_Ord_DataF_Card();
		$this->load->view('edit_cartao.php',$data);

	}

	public function edit_card_estado()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model_Ord_Estado_Card();
		$this->load->view('edit_cartao.php',$data);

	}

	public function list_client()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model3();
		$data['list6'] = $this->Model_login->listclient();
		$this->load->view('list_clientes.php',$data);

	}

	public function edit_cliente_nome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list6'] = $this->Model_login->buscar_db_model_Ord_Nome_Cliente();
		$this->load->view('list_clientes.php',$data);

	}
	public function edit_cliente_data()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list6'] = $this->Model_login->buscar_db_model_Ord_Nome_Cliente();
		$this->load->view('list_clientes.php',$data);

	}

	public function edit_cliente_idade()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list6'] = $this->Model_login->buscar_db_model_Ord_Nome_Cliente();
		$this->load->view('list_clientes.php',$data);

	}

	public function edit_cliente_genero()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list6'] = $this->Model_login->buscar_db_model_Ord_Nome_Cliente();
		$this->load->view('list_clientes.php',$data);

	}

	public function admin_clientes_nome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list5'] = $this->Model_login->buscar_db_model5();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Nome_AdmCliente();
		$this->load->view('admin_clientes.php',$data);
	}

	public function admin_clientes_idade()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list5'] = $this->Model_login->buscar_db_model5();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Idade_AdmCliente();
		$this->load->view('admin_clientes.php',$data);

	}
	public function admin_clientes_genero()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list5'] = $this->Model_login->buscar_db_model5();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Genero_AdmCliente();
		$this->load->view('admin_clientes.php',$data);

	}

	public function admin_empresas_nome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Nome_AdmEmpresas();
		$this->load->view('admin_empresas.php',$data);
	}

	public function admin_empresas_servico()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Servico_AdmEmpresas();
		$this->load->view('admin_empresas.php',$data);

	}

	public function admin_empresas_avaliacao()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Avaliacao_AdmEmpresas();
		$this->load->view('admin_empresas.php',$data);

	}
	

	public function admin_pendentes_nome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Nome_AdmPendentes();
		$this->load->view('admin_pendentes.php',$data);
	}

	public function admin_pendentes_servico()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->buscar_db_model_Ord_Servico_AdmPendentes();
		$this->load->view('admin_pendentes.php',$data);
	}


	public function list_est()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('estat_clientes.php',$data);

	}

	public function registar()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$this->load->view('register.php',$data);
	}


	public function definicoes()
	{
		$this->load->database();
		$this->load->Model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model100();
		$this->load->view('definicoes.php',$data);
	}

	public function client_ava()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list1'] = $this->Model_login->buscar_db_model();
		$data['list'] = $this->Model_login->avaliacoes();


		$this->load->view('avaliacoes.php',$data);
	}



	public function logout()
	{
		unset($_SESSION['Email']);
		session_destroy();
		//echo($_SESSION['Email']);
		//unset($_SESSION['Email']);
  		//$this->session->sess_destroy();
		//unset($this->session->userdata('Email'));
		//unset($Pass_session);
		//session_destroy();

		$this->load->view('bonito.php');
	}


	public function home()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$data['list4'] = $this->Model_login->buscar_db_model4();
		$data['list11'] = $this->Model_login->avaliacoes();
		$this->load->view('home.php',$data);
	}


	public function adicionarcampanha()
	{
		$config = array(
			array(
				'field' => 'NameDataIAdd',
				'rules' => 'required|min_length[4]|max_length[40]'
			),
		);

		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_adicionar');
		$this->Model_adicionar->adicionarCamp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('add_campanha.php',$data);

	}

	public function editarcampanha()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->editarCamp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('edit_campanha.php',$data);
	}
	public function adicionarcartao()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_adicionar');
		$this->Model_adicionar->adicionarCard();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$this->load->view('add_cartao.php',$data);

	}
	public function editarcartao()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->editarCard();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$this->load->view('edit_cartao.php',$data);

	}
	public function listaclientes()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->Model_login->listclient();
		$data['list5'] = $this->Model_login->buscar_db_model5();
		$this->load->view('list_clients.php',$data);

	}

	public function adicionarempresa()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_login->registarempresa();
		$data['list'] = $this->Model_login->buscar_db_model();
		$this->load->view('login.php',$data);
	}

	public function terminarcartao()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->terminarcard();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$this->load->view('edit_cartao.php',$data);
	}

	public function terminarcampanha()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->terminarcamp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('edit_campanha.php',$data);
	}

	public function eliminarcampanha()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->eliminarcamp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('edit_campanha.php',$data);
	}

	public function eliminarcartao()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->eliminarcard();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$this->load->view('edit_cartao.php',$data);
	}


	public function exibe()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->editarCamp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('edit_campanha.php',$data);

	}





	public function adminclient()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list5'] = $this->Model_login->buscar_db_model5();
		$data['list10'] = $this->Model_admin->listclientadmin();
		$data['list12'] = $this->Model_login->buscar_db_model101();
		$this->load->view('admin_clientes.php',$data);

	}



	public function admindef()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list2'] = $this->Model_login->buscar_db_model5();
		$data['list'] = $this->Model_login->buscar_db_model();
		$this->load->view('admin_definicoes.php',$data);

	}

	public function adminreport()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse();
		$data['list4'] = $this->Model_admin->reportsu();
		$this->load->view('admin_denuncias.php',$data);

	}

	public function adminreport_empre_util_nomeE()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse_nomeE();
		$data['list4'] = $this->Model_admin->reportsu();
		$this->load->view('admin_denuncias.php',$data);

	}

	public function adminreport_empre_util_nomeU()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse_nomeU();
		$data['list4'] = $this->Model_admin->reportsu();
		$this->load->view('admin_denuncias.php',$data);

	}

	public function adminreport_empre_util_data()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse_data();
		$data['list4'] = $this->Model_admin->reportsu();
		$this->load->view('admin_denuncias.php',$data);

	}

	public function adminreport_util_empre_nomeE()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse();
		$data['list4'] = $this->Model_admin->reportsu_nomeE();
		$this->load->view('admin_denuncias.php',$data);

	}

	public function adminreport_util_empre_nomeU()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse();
		$data['list4'] = $this->Model_admin->reportsu_nomeU();
		$this->load->view('admin_denuncias.php',$data);

	}

	public function adminreport_util_empre_data()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse();
		$data['list4'] = $this->Model_admin->reportsu_data();
		$this->load->view('admin_denuncias.php',$data);

	}






	public function adminempresas()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->listempresas();
		$this->load->view('admin_empresas.php',$data);

	}
	public function adminpedidos()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->listpendente();
		$this->load->view('admin_pendentes.php',$data);

	}

	public function aceitarpendente()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->load->model('Model_admin');
		$this->Model_editar->aceitarpendente();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->listpendente();
		$this->load->view('admin_pendentes.php',$data);
	}

	public function recuperar()
	{
		$this->load->view('recuperarpass.php');  
	}

	public function recuperarconta()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['email_rec'] = $this->Model_login->email_recup();
		$this->load->view('validarecuperar.php',$data);
	}

	public function LerQrcode()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$data['list'] = $this->Model_login->buscar_db_model();
		$this->load->view('ler_qr.php',$data);
	}

	public function editardef()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->definicoesE();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model100();
		$this->load->view('definicoes.php',$data);
	}


	public function editardefa()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->definicoesA();
		$data['list'] = $this->Model_login->buscar_db_model();
		$this->load->view('admin_definicoes.php',$data);

	}


	public function desassociarcliente()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->dessacclient();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model3();
		$data['list6'] = $this->Model_login->listclient();
		$this->load->view('list_clientes.php',$data);




	}

	public function eliminarfoto()
	{
		$this->load->database();
		$this->load->model('Model_editar');
		$this->load->model('Model_login');
		$this->Model_editar->eliminarfoto2();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model100();
		$this->load->view('definicoes.php',$data);

	}
	public function termos()
	{
		$this->load->view('termos.php');
	}

	public function terminarcampanhahome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->terminarcamp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$data['list4'] = $this->Model_login->buscar_db_model4();
		$data['list11'] = $this->Model_login->avaliacoes();
		$this->load->view('home.php',$data);

	}

	public function terminarcartaohome()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->terminarcard();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$data['list4'] = $this->Model_login->buscar_db_model4();
		$data['list11'] = $this->Model_login->avaliacoes();
		$this->load->view('home.php',$data);
	}

	public function ativarcampanha()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->ativarcamp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$this->load->view('edit_campanha.php',$data);
	}

	public function ativarcartao()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_editar->ativarcard();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list3'] = $this->Model_login->buscar_db_model3();
		$this->load->view('edit_cartao.php',$data);
	}

	public function eliminarclient()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$this->Model_admin->eliminarclient();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list5'] = $this->Model_login->buscar_db_model5();
		$data['list10'] = $this->Model_admin->listclientadmin();
		$data['list12'] = $this->Model_login->buscar_db_model101();
		$this->load->view('admin_clientes.php',$data);

	}

	public function eliminarempresa()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$this->Model_admin->eliminarempresa();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->listempresas();
		$this->load->view('admin_empresas.php',$data);
		

	}

	
	public function eliminarreportemputi()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$this->Model_admin->eliminarreportemputi();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse();
		$data['list4'] = $this->Model_admin->reportsu();
		$this->load->view('admin_denuncias.php',$data);
		

	}

	public function eliminarreportutiemp()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$this->Model_admin->eliminarreportutiemp();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model2();
		$data['list3'] = $this->Model_admin->reportse();
		$data['list4'] = $this->Model_admin->reportsu();
		$this->load->view('admin_denuncias.php',$data);
		

	}

	public function passenova()
	{
		$id_mudar['id']= $_GET['id'];
		$this->load->view('passenovaview', $id_mudar);
	}

	public function alterapassenova()
	{
		$this->load->database();
		$id_mudar['id'] = $this->input->post('id_do_gajo');
		$passenova= $this->input->post('NovaPass');
		$passenovasegunda= $this->input->post('IgualNovaPass');			

		if ( $passenova == $passenovasegunda )
		{
			$this->load->model('Model_editar');
			$this->Model_editar->atualizapasse();
			?><div style="margin: 0; " class="alert alert-success"> <center>
			Password Alterada com Sucesso! </center>
			</div><?php
			$this->load->view('login.php');
		}
		else{
			?><div style="margin: 0; " class="alert alert-danger"> <center>
			As Password's Inseridas não são Iguais! </center>
			</div><?php
			$this->load->view('passenovaview', $id_mudar);
		}
	}


	
	public function reportempresa()
	{
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_editar');
		$this->Model_login->pocaralho();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list2'] = $this->Model_login->buscar_db_model3();
		$data['list6'] = $this->Model_login->listclient();
		$this->load->view('list_clientes.php',$data);


	}


		public function eliminarempresa2()
	{
		
		$this->load->database();
		$this->load->model('Model_login');
		$this->load->model('Model_admin');
		$this->Model_admin->eliminarempresa();
		$data['list'] = $this->Model_login->buscar_db_model();
		$data['list10'] = $this->Model_admin->listpendente();
		$this->load->view('admin_pendentes.php',$data);

	}

}
