<?php
defined('BASEPATH') OR exit ('Ação não permitida');


class Sistema extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

    if (!$this->ion_auth->logged_in()) {
        $this->session->set_flashdata('info', 'Sua sessão expirou!');
        redirect('login');

    }   
  }
   public function index() {
   
    $data = array(
        'titulo' => 'Editar informações do sistema',
        'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
    );
    /*
  
    [sistema_id] => 1
    [sistema_razao_social] => system ordem inc
    [sistema_nome_fantasia] => sistema ordem Now
    [sistema_cnpj] => 50.389.234/0001-40
    [sistema_ie] => 
    [sistema_telefone_fixo] => 
    [sistema_telefone_movel] => 
    [sistema_email] => ordemnow@gmail.com
    [sistema_site_url] => http://localhost/ordem/
    [sistema_cep] => 80428-000
    [sistema_endereco] => Rua da programação
    [sistema_numero] => 38
    [sistema_cidade] => Luanda
    [sistema_estado] => LA
    [sistema_txt_ordem_servico] => 
    [sistema_data_alteracao] => 2022-07-25 18:36:36

    
    */

  //  echo '<pre>';
   // print_r($data['sistema']);
   // exit();

    $this->load->view('layout/header', $data);
    $this->load->view('sistema/index');
    $this->load->view('layout/footer');
    
   }
}

