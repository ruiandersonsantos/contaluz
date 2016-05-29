<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap.min.css") ?>" rel="stylesheet">  
        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/estilo.css") ?>" rel = "stylesheet" media = "screen">

        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/simple-sidebar.css") ?>" rel = "stylesheet" media = "screen">

        <title>Area Administrativa</title>
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navPrincipal">
            <div class="container-fluid col-xs-12" style="padding-left: 0px; padding-right: 0px;">

                <div class="col-xs-2" style="padding-left: 0px; padding-right: 0px;">
                    <a style="float: left; margin-left: 10px;" href="#menu-toggle"  class="navbar-toggle" id="menu-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </div>

                <div class="col-xs-8" style="padding-left: 0px; padding-right: 0px;">
                    <div>
                        <span style="color: white; width: 100%; text-align: center; padding-left: 0px; padding-right: 0px;" class="navbar-brand">
                            CALCULA CONTA
                        </span>
                    </div>
                </div>

                <div class="col-xs-2" style="padding-left: 0px; padding-right: 0px;">
                    <?php if ($this->session->userdata("usuario_logado")['origem'] == 'FACEBOOK') : ?>
                        <img style="height: 35px; margin-right: 10px; margin-top: 8px; float: right;" src="<?= $this->session->userdata("usuario_logado")['picture']['data']['url'] ?>"/>
                    <?php endif ?>
                </div>

            </div>

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
                                <span class="glyphicon glyphicon-calendar " aria-hidden="true"></span>
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
        </nav>


        <!-- /#wrapper -->



