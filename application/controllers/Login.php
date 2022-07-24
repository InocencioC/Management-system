<?php

defined('BASEPATH') OR exit ('Acão não permitida');

class Login extends CI_Controller {

    public function index() {

        $this->load->view('layout/header');
        $this->load->view('Login/index');

    }

}