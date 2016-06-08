<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Calculo extends CI_Controller {
    
    private $configuracao;
    
    public function __construct() {
        parent::__construct();
         autoriza();
        $this->load->model("config_model");
        $id_usuario = $this->session->userdata("usuario_logado")['id'];
        $this->configuracao = $this->config_model->buscarConfiguracao($id_usuario);
    }

    public function index() {
        autoriza();
        $dados = array("config" =>  $this->configuracao);
        $this->load->view('app/calculo', $dados);
    }
    
    public function calcular() {
        autoriza();
        $marcacao = $this->input->get("kwh");
        
        $resultado['kwh'] = $marcacao;
       
        $dados = array("result" => $resultado);
             
        
        $this->load->view('app/resultadocalculo',$dados);
    }

}
