<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_cadastroCorretor" style="margin-top: 40px;">
    <div class="container  col-xs-12" style="float: none;">
        <div class="">
            <h1><?= $this->session->flashdata("sucesso") ?></h1>

            <div class="col-xs-12">
                <form class="form-horizontal" id="form_login" method="post" action="configuracao/teste" style="max-width: 100%; margin: 5px;">
                    <div class="row">
                        <div>
                            <?php include("mensagem.php") ?>


                            <h5 style="border-bottom: 1px black solid; margin-bottom: 10px; text-align: left;">
                                <strong>TARIFAS</strong>
                            </h5>
                            <br />

                            <div class="col-xs-12">

                            </div>

                            <div class="form-group formulario">                    
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success">
                                                <span class="glyphicon glyphicon-flag"></span>
                                            </button>
                                        </span>
                                        <input type="number" placeholder="Informe a tarifa verde" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-warning" style="background: gold;">
                                                <span class="glyphicon glyphicon-flag"></span>
                                            </button>
                                        </span>
                                        <input type="number" placeholder="Informe a tarifa amarela" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-flag"></span>
                                            </button>
                                        </span>
                                        <input type="number" placeholder="Informe a tarifa vermelha" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">
                                                <span class="glyphicon glyphicon-flash"></span>
                                            </button>
                                        </span>
                                        <input type="number" placeholder="Informe a taxa de iluminação" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <br/>

                            <h5 style="border-bottom: 1px black solid; margin-bottom: 10px; text-align: left;">
                                <strong>NOTIFICAÇÃO</strong>
                            </h5>
                            <br />




                            <div class="form-group formulario"> 

                                <div class="col-xs-offset-1 col-xs-10">
                                    <label for="tipo"  control-label>Notificar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="checkbox" >
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </button>
                                        </span>
                                        <input type="number" placeholder="Dia da notificação" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </button>
                                        </span>
                                        <input type="number" placeholder="Hora da notificação" class="form-control"/>
                                    </div>
                                </div>
                            </div>


                            <div style="border-top: 1px solid black;">
                                <button type="submit" class="btn btn-primary col-xs-offset-1 col-xs-10" style="margin-top: 20px;">Gravar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-1.11.3.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap-switch.js") ?>"></script>

<script src="<?= base_url("js_b/main.js") ?>"></script>
<script src="<?= base_url("js_b/highlight.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>

