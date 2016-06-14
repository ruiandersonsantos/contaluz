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

        <script src="https://use.fontawesome.com/5ddc58b82b.js"></script>
        <title>Area Administrativa</title>
    </head>

    <body>

        <nav class="navbar navbar-default no-margin">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header fixed-brand">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                </button>
                <a class="navbar-brand" href="#">Calcula Conta de Luz</a>
            </div><!-- navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                </ul>
            </div>
            <!-- bs-example-navbar-collapse-1 -->

        </nav>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">


                    <div id="div_topo_menu"> 
                        <div>
                            <?php if ($this->session->userdata("usuario_logado")['origem'] == 'FACEBOOK') : ?>
                                <img class="img-circle" id="img_msg_logado-face" src="<?= $this->session->userdata("usuario_logado")['picture']['data']['url'] ?>"/>
                            <?php endif ?>


                            <?php if ($this->session->userdata("usuario_logado")['origem'] == 'GOOGLE') : ?>
                                <img class="img-circle" id="img_msg_logado-google" src="<?= $this->session->userdata("usuario_logado")['picture'] ?>"/>
                            <?php endif ?>
                        </div>

                        <div id="div_nome">
                            <Strong ><?= $this->session->userdata("usuario_logado")['name'] ?></strong>
                        </div>
                    </div>


                    <li class="sidebar-brand">
                        <a href="<?= base_url("/index.php/login") ?>">
                            BEM VINDO
                            <span class="glyphicon glyphicon-home " aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url("/index.php/calculo") ?>">
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
            </div><!-- /#sidebar-wrapper -->

            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->