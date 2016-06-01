<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Config_model extends CI_Model {

    public function atualizaConfiguracao($config) {
        $this->db->where('id', $config['id']);
        return $this->db->update("configuracoes", $config);
    }

    public function salvarConfiguracao($config) {
        return $this->db->insert("configuracoes", $config);
    }

    public function buscarConfiguracao($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->get("configuracoes")->row_array();
    }

}
