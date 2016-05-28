<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function cadastrar() {
        $this->load->model("produtos_model");

        $produto = array(
            "id" => '',
            "titulo" => '',
            "descricao" => '',
            'img_nome' => '',
            'img_path' => '',
            'img_full_path' => '',
            'img_ext' => '',
            'img_size' => 0,
            'img_largura' => 0,
            'img_altura' => 0,
            'img_tipo' => '',
            'status' => 0,
            
        );

        $dados = array("produto" => $produto);
        $this->load->view('adm/produto', $dados);
    }

    public function listar() {
        $this->load->model("produtos_model");
        $retorno = $this->produtos_model->listaProduto();
        $listaprodutos = array("lista" => $retorno);

        $this->load->view('adm/listaproduto', $listaprodutos);
    }

    public function deletar() {
        $this->load->model("produtos_model");
        $id = $this->input->get("id");
        $produto = $this->produtos_model->buscarPorId($id);

        $retorno = $this->produtos_model->delete($produto);

        redirect('produto/listar');
    }
    
     public function ativar(){
        
       $this->load->model("produtos_model");
       
       $id = $this->input->get("id");
       $status = $this->input->get("status");
       $ordem = $this->input->get("ordem");
       
       $produto = $this->produtos_model->buscarPorId($id);
       
       if($status == 1){
           $produto['status'] = 0;
           $produto['ordem'] = 0;
       }else{
           $produto['status'] = 1;
           $produto['ordem'] = $ordem;
       }
       
       
       
       
       $this->produtos_model->ativarProduto($produto);
       
        //$retorno = $this->produtos_model->listaProduto();
        //$listaprodutos = array("lista" => $retorno);

        //$this->load->view('adm/listaproduto', $listaprodutos);
        
    }
    
    public function prealterar(){
        
        $this->load->model("produtos_model");
        $id = $this->input->get("id");
        $produto = $this->produtos_model->buscarPorId($id);

        $dados = array("produto" => $produto);
        $this->load->view('adm/produto', $dados);
        
    }

    public function salvar() {

        $this->load->model("produtos_model");

        $config['upload_path'] = './imagens/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $config['file_ext_tolower'] = true;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        
        
        
        if (!$this->upload->do_upload("inputFile")) {
            echo $this->upload->display_errors('', '');
        } else {

            // upload da imagem
            $data = $this->upload->data();

            //verificando se retornou dados da imagem
            if (isset($data)) {

                $config = array(
                    'source_image' => $data['full_path'],
                    'new_image' => './imagens/thumbs',
                    'maintain_ration' => true,
                    'width' => 60,
                    'height' => 30
                );

                // redimencionando
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                //preenchendo objeto para gravar no bd (gravação
                
                $id = $this->input->post("id");
                if($id === '') {
                    $this->gravar($data);
                    
                } else {
                    $this->alterar($data);
                }
            }
        }
    }
    
    private function alterar($data){
         $produto = array(
                        "id" => $this->input->post("id"),
                        "titulo" => $this->input->post("titulo"),
                        "descricao" => $this->input->post("descricao"),
                        'img_nome' => $data['file_name'],
                        'img_path' => $data['file_path'],
                        'img_full_path' => $data['full_path'],
                        'img_ext' => $data['file_ext'],
                        'img_size' => $data['file_size'],
                        'img_largura' => $data['image_width'],
                        'img_altura' => $data['image_height'],
                        'img_tipo' => $data['image_type'],
                        'status' => 0,
                        'ordem' => 0
                    );

                    $retorno = $this->produtos_model->alterarProduto($produto);

                    if ($retorno) {
                        $this->session->set_flashdata("sucesso", "Produto alterado com sucesso.");
                    } else {
                        $this->session->set_flashdata("error", "Problemas na alteração do produto.");
                    }

                    redirect('produto/listar');
    }


    private function gravar($data){
        $produto = array(
                        "titulo" => $this->input->post("titulo"),
                        "descricao" => $this->input->post("descricao"),
                        'img_nome' => $data['file_name'],
                        'img_path' => $data['file_path'],
                        'img_full_path' => $data['full_path'],
                        'img_ext' => $data['file_ext'],
                        'img_size' => $data['file_size'],
                        'img_largura' => $data['image_width'],
                        'img_altura' => $data['image_height'],
                        'img_tipo' => $data['image_type'],
                        'status' => 0,
                        'ordem' => 0
                    );

                    $retorno = $this->produtos_model->insereProduto($produto);

                    if ($retorno) {
                        $this->session->set_flashdata("sucesso", "Produto gravado com sucesso.");
                    } else {
                        $this->session->set_flashdata("error", "Problemas na gravação do produto.");
                    }

                    redirect('produto/cadastrar');
    }

}
