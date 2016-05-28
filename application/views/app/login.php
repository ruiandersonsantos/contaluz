<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<?php if (!$this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalhosemmenu.php") ?>
<?php endif ?>
<section class="sessao_cadastroCorretor">
    <div class="container">


        <h1><?= $this->session->flashdata("sucesso") ?></h1>
        
        <?php if (!$this->session->userdata("usuario_logado")) : ?>
            <form class="form-horizontal" id="form_login" method="post" action="logar">
                <div class="row">
                    <?php include("mensagem.php") ?>
                                  
                </div>
                
                <h1>teste</h1>
                    
                
                <a href="<?= base_url("/index.php/login/loginfacebook") ?>">Login com Facebook</a>
                <br>
                <a href="<?= base_url("/index.php/login/loginGoogle") ?>">Login com Google</a>
            </form>
        <?php endif ?>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-1.11.3.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>
