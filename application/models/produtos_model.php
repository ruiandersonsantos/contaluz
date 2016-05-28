<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produtos_model extends CI_Model {

    public function insereProduto($produto) {
        return $this->db->insert("produtos", $produto);
    }
    
    public function ativarProduto($produto) {
        $this->db->query("UPDATE produtos SET ordem =".$produto["ordem"].", status='".$produto["status"]."' WHERE id='".$produto["id"]."' ");
    }
    
    public function alterarProduto($produto) {
        
        $produtoantes = $this->buscarPorId($produto['id']);
        
        $arquivogrande = $produtoantes['img_full_path'];
        $thumbs = $produtoantes['img_path']."thumbs/".$produtoantes['img_nome'];
        
        $this->db->where('id', $produto['id']);
        if($this->db->update("produtos", $produto)){
            unlink($arquivogrande);
            unlink($thumbs);
            return true;
        } else {
            return false;
            
        }
    }

    public function listaProduto() {
        //return $this->db->get("produtos")->result_array();
        return $this->db->query("select * from produtos order by ordem desc")->result_array();
    }

    public function buscarPorId($id) {

        $this->db->where('id', $id);
        return $this->db->get("produtos")->row_array();
    }

    public function delete($produto) {
        
        $arquivogrande = $produto['img_full_path'];
        $thumbs = $produto['img_path']."thumbs/".$produto['img_nome'];
        
        $this->db->where('id', $produto['id']);
        if ($this->db->delete("produtos", $produto)) {
            unlink($arquivogrande);
            unlink($thumbs);
            return true;
        } else {
            return false;
            
        }
    }

}
