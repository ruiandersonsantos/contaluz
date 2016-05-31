<?php

// teste simone
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Configuracao extends CI_Controller {

    public function index() {

        $this->load->view('app/config');
    }

    public function saveConfig() {

        $this->load->model("config_model");
        
        $cofiguracao = array(
            'tarifa_normal' => 0.765,
            'tarifa_vermelha' => 0.987,
            'taxa_iluminacao' => 13.89,
            'notifica' => 1,
            'dia_notifica' => 20,
            'hora_notifica' => 14,
            'id_usuario' => $this->session->userdata("usuario_logado")['id']
        );
        
        $salvou = $this->config_model->salvarConfiguracao($cofiguracao);

        $this->load->view('app/config');
    }
    
    
    public function simone() {
        $this->load->view('app/teste');
    }
   
}
