<?php

defined('BASEPATH') OR exit ('Acão não permitida');

class Login extends CI_Controller {

    public function index() {

     /* 
    [email] => canalti@gmail.com
    [password] => 1234
*/

$identity = $this->security->xss_clean($this->input->post('email'));
$password =  $this->security->xss_clean($this->input->post('password'));
$remember = FALSE; // remember the user
if($this->ion_auth->login($identity, $password, $remember)) {
    
    redirect('home');
} else {

    $this->session->set_flashdata('error', 'Verifique o seu e-mail ou senha');
        
        $this->load->view('layout/header');
        $this->load->view('Login/index');
        $this->load->view('layout/footer');
    }
  }
}