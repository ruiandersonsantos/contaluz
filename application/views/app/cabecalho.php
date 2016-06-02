<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap.min.css") ?>" rel="stylesheet">  
        
        <link href="<?= base_url("css_b/bootstrap-switch.min.css") ?>" rel="stylesheet">  
        
        <link href="<?= base_url("css_b/highlight.css") ?>" rel="stylesheet">  
        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/estilo.css") ?>" rel = "stylesheet" media = "screen">

        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/simple-sidebar.css") ?>" rel = "stylesheet" media = "screen">

        <title>Area Administrativa</title>
    </head>

    <body>

        <!-- navbar logado -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navPrincipal">
            <div class="container-fluid col-xs-12" id="div_container-fluid">

                <div class="col-xs-2" id="div_menu-toogle">
                    <a class="navbar-toggle" id="menu-toggle" href="#menu-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </div>

                <div class="col-xs-8" id="div_navbar-brand">
                    <div>
                        <span class="navbar-brand" id="span_navbar-brand">
                            CALCULA CONTA
                        </span>
                    </div>
                </div>

                <div class="col-xs-2" id="div_msg_logado">
                    <?php if ($this->session->userdata("usuario_logado")['origem'] == 'FACEBOOK') : ?>
                        <img id="img_msg_logado-face" src="<?= $this->session->userdata("usuario_logado")['picture']['data']['url'] ?>"/>
                    <?php endif ?>
                        
                        
                      <?php if ($this->session->userdata("usuario_logado")['origem'] == 'GOOGLE') : ?>
                        <img id="img_msg_logado-google" src="<?= $this->session->userdata("usuario_logado")['picture'] ?>"/>
                    <?php endif ?>   
                </div>

            </div>

            <!-- wrapper -->
            <div id="wrapper" >
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav" >
                        <li class="sidebar-brand">
                            <a href="<?= base_url("/index.php/login") ?>">
                                BEM VINDO
                                <span class="glyphicon glyphicon-home " aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-list-alt " aria-hidden="true"></span>
                                Calculo
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-scale " aria-hidden="true"></span>
                                Marcação Diária
                            </a>

                        </li>
                        <li>
                            <a href="<?= base_url("/index.php/configuracao") ?>">
                                <span class="glyphicon glyphicon-cog " aria-hidden="true"></span>
                                Configurações
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-envelope " aria-hidden="true"></span>
                                Fale Conosco
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-info-sign " aria-hidden="true"></span>
                                Sobre
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url("index.php/login/logout") ?>">
                                <span class="glyphicon glyphicon-log-out " aria-hidden="true"></span>
                                Sair
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- fim - Sidebar -->
            </div>
            <!-- fim - wrapper -->
        </nav>
        <!-- fim - navbar logado -->


        



