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
        $dados = array("config" => $this->configuracao);
        if ($this->configuracao) {
            $this->load->view('app/calculo', $dados);
        } else {
            $this->session->set_flashdata("error", "É necessário preencher as configurações para poder fazer o calculo!");
            redirect('../../index.php//configuracao');
        }
    }

    public function calcular() {
        autoriza();
        $marcacao = $this->input->get("kwh");

        // verificando a ocorrencia de ponto para não deixar passar
        $achou = strpos($marcacao, ".");

        // Só entra aqui se não for vazio e for somente numero sem pontos
        if ($achou === false && !empty($marcacao)) {

            $this->load->helper("calculo");
            $this->load->model("config_model");

            $id_usuario = $this->session->userdata("usuario_logado")['id'];
            $configuracao = $this->config_model->buscarConfiguracao($id_usuario);

            $resultado['kwh'] = calcula($marcacao, $configuracao);



            $dados = array("result" => $resultado);


            $this->load->view('app/resultadocalculo', $dados);
        } else {
            $this->session->set_flashdata("error", "Valor informado incorreto!");
            redirect('../../index.php/calculo');
        }
    }

}
