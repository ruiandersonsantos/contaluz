<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Login extends CI_Controller {

    private $uid;
    private $access_token;

    public function __construct() {
        parent::__construct();

        $this->load->library("facebook", array(
            "appId" => "522431077945997",
            "secret" => "4af0e2d727b801985770f9273d17a5ed"));


        $this->uid = $this->facebook->getUser();

        $this->access_token = $this->facebook->getAccessToken();

        $this->facebook->setAccessToken($this->access_token);
    }

    public function index() {
        $contents['login_url'] = $this->googleplus->loginURL();
        $this->load->view('app/login', $contents);
    }

    public function loginfacebook() {

        $teste = '';
        if ($this->uid) {


            try {
                $usuario = $this->facebook->api('/me?fields=email,first_name,last_name,gender,name,id,birthday,picture');
                if ($usuario) {
                    $usuario['origem'] = 'FACEBOOK';
                    $this->load->model("usuarios_model");
                    $retorno = $this->usuarios_model->buscarUsuario($usuario['id'], $usuario['origem']);
                    if ($retorno) {

                        $usuario['id'] = $retorno['id'];
                    } else {
                        $usuariogravar['id_social'] = $usuario['id'];
                        $usuariogravar['nome'] = $usuario['name'];
                        $usuariogravar['email'] = $usuario['email'];
                        $usuariogravar['origem'] = 'FACEBOOK';

                        $salvou = $this->usuarios_model->salvarUsuario($usuariogravar);

                        if ($salvou) {
                            $retorno = $this->usuarios_model->buscarUsuario($usuario['id'], $usuario['origem']);
                            $usuario['id'] = $retorno['id'];
                        }
                    }
                }



                $this->session->set_userdata("usuario_logado", $usuario);
                $this->session->set_flashdata("sucesso", "Seja bem vindo ao sistema!");
            } catch (Exception $exc) {
                $this->uid = NULL;
                echo $exc->getTraceAsString();
            }
        } else {

            die("<script>top.location='" . $this->facebook->getLoginUrl(array(
                        "scope" => "email,user_likes,public_profile,user_friends",
                        "redirect_url" => site_url("/")
                    )) . "'</script>");
        }

        redirect('../../');
    }

    public function loginGoogle() {

        if ($this->session->userdata('usuario_logado') == true) {
            redirect('../../');
        }

        if (isset($_GET['code'])) {

            $this->googleplus->getAuthenticate();
            $this->session->set_userdata('login', true);
            $usuario = array();
            $usuario = $this->googleplus->getUserInfo();
            
             if ($usuario) {
                    $usuario['origem'] = 'GOOGLE';
                    $this->load->model("usuarios_model");
                    $retorno = $this->usuarios_model->buscarUsuario($usuario['id'], $usuario['origem']);
                    if ($retorno) {

                        $usuario['id'] = $retorno['id'];
                    } else {
                        $usuariogravar['id_social'] = $usuario['id'];
                        $usuariogravar['nome'] = $usuario['name'];
                        $usuariogravar['email'] = $usuario['email'];
                        $usuariogravar['origem'] = 'GOOGLE';

                        $salvou = $this->usuarios_model->salvarUsuario($usuariogravar);

                        if ($salvou) {
                            $retorno = $this->usuarios_model->buscarUsuario($usuario['id'], $usuario['origem']);
                            $usuario['id'] = $retorno['id'];
                        }
                    }
                }

            $this->session->set_userdata('usuario_logado', $usuario);
            $this->session->set_flashdata("sucesso", "Seja bem vindo ao sistema!");
            redirect('../../');
        }

        //redirect('usuario/login');

        $contents['login_url'] = $this->googleplus->loginURL();
        $this->load->view('app/login', $contents);
    }

    public function logout() {
        $this->session->unset_userdata("usuario_logado");
        redirect('../../');
    }

}
