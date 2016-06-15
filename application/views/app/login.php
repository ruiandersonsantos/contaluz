<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<?php if (!$this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalhosemmenu.php") ?>
<?php endif ?>
<section class="sessao_principal">
    <div class="container  col-xs-12" style="float: none;">

        <div style="margin-top: 30px;">
            <?php include("mensagem.php") ?>
        </div>



        <!--        renderiza quando não está logado-->
        <?php if (!$this->session->userdata("usuario_logado")) : ?>
            <form class="form-horizontal" id="form_login" method="post" action="logar">
                <div style="text-align: center;">
                    <img src="<?= base_url("imagens/logo_telaLogin.png") ?>" alt=""/>
                </div>

                <div id="div_icone_carregando" style="text-align: center;">
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    <p>Carregando...</p>
                </div>

                <div  style="margin-top: 50px;">
                    <a class="btn btn-block btn-social btn-facebook" href="#" id="btn_face" name="<?= base_url("/index.php/login/loginfacebook") ?>" >
                        <span class="fa fa-facebook fa-lg"></span>
                        Login com Facebook
                    </a>
                </div>

                <div style="text-align: center; margin-top: 50px;">
                    <a id="btn_google" name="<?php echo $login_url; ?>"class="btn btn-block btn-social btn-google" >
                        <span class="fa fa-google-plus fa-lg"></span>
                        Login com Google
                    </a>
                </div>
              




                <br>
                <p></p>
            </form>

        <?php endif ?>

        <!--        renderiza quando está logado-->
        <?php if ($this->session->userdata("usuario_logado")) : ?>




        <?php endif ?>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-2.1.1.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>
