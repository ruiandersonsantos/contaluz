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

                <div style="text-align: center; margin-top: 50px;">
                    <button id="btn_face" name="<?= base_url("/index.php/login/loginfacebook") ?>" style="width: 100%;" class="btn btn-primary"  type="button">
                        <img style="float: left;" class="img-rounded" src="<?= base_url("imagens/icone_face.png") ?>" alt=""/>

                        Login com Facebook
                    </button>
                </div>

                <div style="text-align: center; margin-top: 50px;">
                    <button id="btn_google" name="<?php echo $login_url; ?>" style="width: 100%;" class="btn btn-danger" type="button">
                        <img style="float: left;" class="img-rounded" src="<?= base_url("imagens/icone-google.png") ?>" alt=""/>

                        Login com Google
                    </button>
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
