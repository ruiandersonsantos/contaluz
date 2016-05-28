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

            <a style="float: left; margin-left:10px; " href="#menu-toggle"  class="navbar-toggle" id="menu-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="container-fluid col-xs-8">

                <a style="color: white; width: 100%; text-align: center;" href="<?= base_url("/index.php/usuario/login") ?>" class="navbar-brand">
                    DEVMEDIA

                </a>

            </div>


            <?php if ($this->session->userdata("usuario_logado")['origem'] == 'FACEBOOK') : ?>
                <img style="height: 35px; margin-right: 10px; margin-top: 8px; float: right;" src="<?= $this->session->userdata("usuario_logado")['picture']['data']['url'] ?>"/>
            <?php endif ?>


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
                            <a href="#">
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



