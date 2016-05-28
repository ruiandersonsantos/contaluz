<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teste extends CI_Controller {
       
     public function simone() {
                
         $dadosmensagem = array(
                "nome" =>  "Rui Anderso Paim Santos",
                "senha" => "12345",
                "site" => "www.rui.com.br"
         );
       
         $dados = array("mensagem" => $dadosmensagem);
            
        $this->load->view('adm/mensagemrecuperasenha',$dados);
    }
    
}