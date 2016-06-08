<?php

// teste simone
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Configuracao extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("config_model");
    }

    public function index() {
        autoriza();
        $id_usuario = $this->session->userdata("usuario_logado")['id'];

        $configuracao = $this->config_model->buscarConfiguracao($id_usuario);

        if (sizeof($configuracao) == 0) {
            $configuracao['id'] = 0;
            $configuracao['tarifa_verde'] = "";
            $configuracao['tarifa_amarela'] = "";
            $configuracao['tarifa_vermelha'] = "";
            $configuracao['taxa_iluminacao'] = "";
            $configuracao['notifica'] = "";
            $configuracao['dia_notifica'] = "";
            $configuracao['hora_notifica'] = "";
            $configuracao['kwh_ultima'] = "";
        }

        if ($configuracao['notifica'] != 0) {
            $configuracao['notifica'] = "Checked";
        }

        $dados = array("config" => $configuracao);

        $this->load->view('app/config', $dados);
    }

    public function saveConfig() {
        autoriza();
        $salvou = false;
        $configuracao_atualiza = $this->input->post();


        if ($configuracao_atualiza['id'] != 0) {
            
            if (!isset($configuracao_atualiza['notifica'])) {
                $configuracao_atualiza['notifica'] = 0;
            } else {
                $configuracao_atualiza['notifica'] = 1;
            }

            $salvou = $this->config_model->atualizaConfiguracao($configuracao_atualiza);
        } else {

            $configuracao = $this->input->post();
            $configuracao['id_usuario'] = $this->session->userdata("usuario_logado")['id'];

            if (!isset($configuracao['notifica'])) {
                $configuracao['notifica'] = 0;
            } else {
                $configuracao['notifica'] = 1;
            }

            $salvou = $this->config_model->salvarConfiguracao($configuracao);
        }

        if ($salvou) {
            $this->session->set_flashdata("sucesso", "Configuração realizada com sucesso!");
        } else {
            $this->session->set_flashdata("error", "Problemas na gravação dos dados.");
        }

        redirect('../../index.php/configuracao');
        //$dados = array("config" => $configuracao);
        //$this->load->view('app/config', $dados);
    }

    public function simone() {
        $this->load->view('app/teste');
    }

}
