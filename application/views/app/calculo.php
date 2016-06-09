<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_principal" style="margin-top: 40px;">
    <div class="container  col-xs-12" style="float: none;">
        <div class="">
            <div class="col-xs-12">
                <form class="form-horizontal" id="form_login" method="post" action="calculo/calcular" style="max-width: 100%; margin: 5px;">
                    <div class="row">
                        <div>
                            <?php include("mensagem.php") ?>

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Marcações para cálculo</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group formulario">                    
                                        <div class="col-xs-12">


                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon3">Ultimo Kwh</span>
                                                <input  disabled="disabled" value="<?= $config['kwh_ultima'] ?>" name="kwh_ultima" id="kwh_ultima" type="number" class="form-control"/>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="form-group formulario">                    
                                        <div class="col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button  type="button" class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-modal-window"></span>
                                                    </button>
                                                </span>
                                                <input  min="<?= $config['kwh_ultima'] + 1 ?>" value="" name="kwh_relogio" id="kwh_relogio" type="number" placeholder="Informe o Kwh atual" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div>
                                <button id="troca-estado" data-loading-text="Calculando...." type="button" class="btn btn-primary col-xs-offset-1 col-xs-10" style="margin-top: 20px;">Calcular</button>
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

