<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS personalizado -->
        <link href = "<?= base_url("css/estilo.css") ?>" rel = "stylesheet" media = "screen">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?= base_url("css/materialize.min.css") ?>"  media="screen,projection">


        <title>Area Administrativa</title>
    </head>

    <body>

        <!-- navbar -->
        <!-- teste subindo para o git -->
        <div class="navbar-fixed">
            <nav class="blue darken-3">

                <div class="nav-wrapper">
                    <a href="/" class="brand-logo">Calcula Conta</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>



                    <!-- menu-mobile -->
                    <ul class="side-nav" id="mobile-demo">
                        <div class="col-xs-2" id="div_msg_logado">
                            <?php if ($this->session->userdata("usuario_logado")['origem'] == 'FACEBOOK') : ?>
                                <img id="img_msg_logado-face" src="<?= $this->session->userdata("usuario_logado")['picture']['data']['url'] ?>"/>
                            <?php endif ?>


                            <?php if ($this->session->userdata("usuario_logado")['origem'] == 'GOOGLE') : ?>
                                <img id="img_msg_logado-google" src="<?= $this->session->userdata("usuario_logado")['picture'] ?>"/>
                            <?php endif ?>   
                        </div>
                        <li>
                            <div style="float: left;">
                                <img src="../../../imagens/home.png" alt=""/>
                            </div>

                            <div>

                                <a href="<?= base_url("/index.php/login") ?>">
                                    BEM VINDO
                                </a>

                            </div>

                        </li>
                        <li>
                            <div style="float: left;">
                                <img src="../../../imagens/calculator.png" alt=""/>
                            </div>
                            <div>
                                <a href="<?= base_url("/index.php/calculo") ?>">
                                    Calculo
                                </a>
                            </div>
                        </li>
                        <li>
                            <div style="float: left;">
                                <img src="../../../imagens/stopwatch.png" alt=""/>
                            </div>
                            <div>
                                <a href="#">
                                    Marcações
                                </a>
                            </div>

                        </li>
                        <li>
                            <div style="float: left;">
                                <img src="../../../imagens/settings.png" alt=""/>
                            </div>
                            <div>
                                <a href="<?= base_url("/index.php/configuracao") ?>">
                                    Configurações
                                </a>
                            </div>
                        </li>
                        <li>
                            <div style="float: left;">
                                <img src="../../../imagens/phone-book.png" alt=""/>
                            </div>
                            <div>
                                <a href="#">
                                    Fale Conosco
                                </a>
                            </div>
                        </li>
                        <li>
                            <div style="float: left;">
                                <img src="../../../imagens/info.png" alt=""/>
                            </div>
                            <div>
                                <a href="#">
                                    Sobre

                                </a>
                            </div>
                        </li>
                        <li>
                            <div style="float: left;">
                                <img src="../../../imagens/exit.png" alt=""/>
                            </div>
                            <div>
                                <a href="<?= base_url("index.php/login/logout") ?>">
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>
                    <!-- ./menu-mobile -->

                </div>
            </nav>
        </div>
        <!-- ./navbar -->






