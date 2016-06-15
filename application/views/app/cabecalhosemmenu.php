<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap.min.css") ?>" rel="stylesheet"> 
        
         <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap-social.css") ?>" rel="stylesheet"> 

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

        <nav class="navbar navbar-default no-margin" id="id_navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header fixed-brand" id="div_navTitulo">
                <div id="div_img_logo">
                    <img id="img_logo"  src="<?= base_url("imagens/icone_play.png") ?>" alt=""/>
                </div>
                
               
              
                    <a class="navbar-brand" id="a_titulo" href="#">Calcula Conta de Luz</a>
               
                
            </div><!-- navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                </ul>
            </div>
            <!-- bs-example-navbar-collapse-1 -->

        </nav>
        
      
        <!-- /#wrapper -->