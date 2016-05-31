<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_cadastroCorretor">
    <div class="container">
        <div class="col-xs-offset-2 col-xs-10">
            <h1><?= $this->session->flashdata("sucesso") ?></h1>

            <?php if ($this->session->userdata("usuario_logado")) : ?>

                <form class="form-horizontal" id="form_login" method="post" action="configuracao/teste">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php include("mensagem.php") ?>


                            <h1 style="border-bottom: 1px black solid;">
                                <strong>Configurações das Tarifas</strong>
                            </h1>

                            <div class="form-group formulario">                    
                                <div class="col-xs-10">
                                    <input type="number" class="form-control" id="tarifaNormal" placeholder="Tarifa Normal"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            <?php endif ?>
        </div>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-1.11.3.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>
