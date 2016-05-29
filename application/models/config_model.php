<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_model extends CI_Model{
   
    
     public function salvarConfiguracao($cofig){
       return $this->db->insert("configuracoes", $cofig);
        
    }
    
   
}