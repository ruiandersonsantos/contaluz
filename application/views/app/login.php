<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<?php if (!$this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalhosemmenu.php") ?>
<?php endif ?>
<section class="sessao_principal">
    <div class="container  col-xs-12" style="float: none;">

        <div style="margin-top: 70px;">
            <?php include("mensagem.php") ?>
        </div>

        <!--        renderiza quando não está logado-->
        <?php if (!$this->session->userdata("usuario_logado")) : ?>
            <form class="form-horizontal" id="form_login" method="post" action="logar">

                <a href="<?= base_url("/index.php/login/loginfacebook") ?>">Login com Facebook</a>
                <br>
                <p><a href="<?php echo $login_url; ?>">Login Google</a></p>
            </form>

        <?php endif ?>

        <!--        renderiza quando está logado-->
        <?php if ($this->session->userdata("usuario_logado")) : ?>

          


        <?php endif ?>
    </div>
</section>

<script src="<?= base_url("js/jquery-2.1.1.min.js") ?>"></script>
<script src="<?= base_url("js/materialize.min.js") ?>"></script>
<script src="<?= base_url("js/jscript.js") ?>"></script>
</body>
</html>
