<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
       
        
    public function buscarUsuario($id_social, $origem){
        
        $this->db->where('id_social', $id_social);
        $this->db->where('origem', $origem);
        
        return $this->db->get("usuarios")->row_array();
        
    }
    
    
     public function salvarUsuario($usuario){
       return $this->db->insert("usuarios", $usuario);
        
    }
    
   
}