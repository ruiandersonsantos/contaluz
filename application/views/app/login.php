<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<?php if (!$this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalhosemmenu.php") ?>
<?php endif ?>
<section class="sessao_principal">
    <div class="container">

        <?php if ($this->session->userdata("usuario_logado")) : ?>
            <div style="margin-top: 70px;">
                <?php include("mensagem.php") ?>
            </div>
        <?php endif ?>

        <?php if (!$this->session->userdata("usuario_logado")) : ?>
            <form class="form-horizontal" id="form_login" method="post" action="logar">

                <a href="<?= base_url("/index.php/login/loginfacebook") ?>">Login com Facebook</a>
                <br>
                <p><a href="<?php echo $login_url;?>">Login Google</a></p>
            </form>
        <?php endif ?>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-1.11.3.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>
