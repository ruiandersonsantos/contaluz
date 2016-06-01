<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_principal" style="margin-top: 40px;">
    <div class="container  col-xs-12" style="float: none;">
        <div class="">
            <div class="col-xs-12">
                <form class="form-horizontal" id="form_login" method="post" action="configuracao/saveConfig" style="max-width: 100%; margin: 5px;">
                    <div class="row">
                        <div>
                            <?php include("mensagem.php") ?>


                            <h5 style="border-bottom: 1px black solid; margin-bottom: 10px; text-align: left;">
                                <strong>TARIFAS</strong>
                            </h5>
                            <br />

                            <input type="hidden" size="80" value="<?= $config['id'] ?>" name="id" id="id"/>
                            <div class="form-group formulario">                    
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success">
                                                <span class="glyphicon glyphicon-flag"></span>
                                            </button>
                                        </span>
                                        <input step="any" value="<?= $config['tarifa_verde'] ?>" name="tarifa_verde" id="tarifa_verde" type="number" placeholder="Informe a tarifa verde" class="form-control"/>
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
                                        <input step="any" value="<?= $config['tarifa_amarela'] ?>" name="tarifa_amarela" id="tarifa_amarela" type="number" placeholder="Informe a tarifa amarela" class="form-control"/>
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
                                        <input step="any" value="<?= $config['tarifa_vermelha'] ?>" name="tarifa_vermelha" id="tarifa_vermelha" type="number" placeholder="Informe a tarifa vermelha" class="form-control"/>
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
                                        <input step="any" value="<?= $config['taxa_iluminacao'] ?>" name="taxa_iluminacao" id="taxa_iluminacao" type="number" placeholder="Informe a taxa de iluminação" class="form-control"/>
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
                                    <input <?= $config['notifica'] ?> type="checkbox" name="notifica" id="notifica">
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
                                        <input min="1" max="31" value="<?= $config['dia_notifica'] ?>" name="dia_notifica" id="dia_notifica" type="number" placeholder="Dia da notificação" class="form-control"/>
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
                                        <input min="0" max="24" value="<?= $config['hora_notifica'] ?>" name="hora_notifica" id="hora_notifica" type="number" placeholder="Hora da notificação" class="form-control"/>
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

