<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_cadastroCorretor">
    <div class="container">


        <h1><?= $this->session->flashdata("sucesso") ?></h1>

        <?php if ($this->session->userdata("usuario_logado")) : ?>
            <form class="form-horizontal" id="form_login" method="post" action="configuracao/teste">
                <div class="row">
                    <?php include("mensagem.php") ?>

                </div>

                <h1>Pagina de configuração</h1>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-success active">
                        <input type="radio" name="options" value="Rui" id="option1" autocomplete="off" checked> Sim
                    </label>
                    <label class="btn btn-danger">
                        <input type="radio" name="options" value="Simone" id="option2" autocomplete="off"> Não
                    </label>

                </div>

                <input type="submit" value="Enviar"/>

            </form>
        <?php endif ?>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-1.11.3.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>
