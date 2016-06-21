<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_principal" style="margin-top: 20px;">
    <div class="container" style="float: none;">
        <div class="row">
            <div class="col-xs-12">
                <form class="form-horizontal" id="form_login" method="post" action="configuracao/saveConfig" style="max-width: 100%; margin: 5px;">

                    <?php include("mensagem.php") ?>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h5 class="panel-title"><strong>kWh final da ultima conta</strong></h5>
                        </div>

                        <div class="panel-body" >

                            <div class="input-group bandeiras">
                                <span class="input-group-btn">
                                    <button  type="button" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-modal-window"></span>
                                    </button>
                                </span>
                                <input  required=""  value="<?= $config['kwh_ultima'] ?>" name="kwh_ultima" id="kwh_ultima" type="number" placeholder="Marcação inicial para calculo." class="form-control"/>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h5 class="panel-title"><strong>Tarifas</strong></h5>
                        </div>

                        <input type="hidden" size="80" value="<?= $config['id'] ?>" name="id" id="id"/>
                        <div class="panel-body" >
                            <div class="input-group bandeiras">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-flag"></span>
                                    </button>
                                </span>
                                <input step="any" value="<?= $config['tarifa_verde'] ?>" name="tarifa_verde" id="tarifa_verde" type="number" placeholder="Informe a tarifa verde" class="form-control"/>
                            </div>
                            <div class="input-group bandeiras">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning" style="background: gold;">
                                        <span class="glyphicon glyphicon-flag"></span>
                                    </button>
                                </span>
                                <input step="any" value="<?= $config['tarifa_amarela'] ?>" name="tarifa_amarela" id="tarifa_amarela" type="number" placeholder="Informe a tarifa amarela" class="form-control"/>
                            </div>
                            <div class="input-group bandeiras">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-flag"></span>
                                    </button>
                                </span>
                                <input step="any" value="<?= $config['tarifa_vermelha'] ?>" name="tarifa_vermelha" id="tarifa_vermelha" type="number" placeholder="Informe a tarifa vermelha" class="form-control"/>
                            </div>
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

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h5 class="panel-title"><strong>Notificação</strong></h5>
                        </div>

                        <div class="panel-body" >

                            <div class="bandeiras">
                                <label style="margin-right: 15%;" for="tipo"  control-label>Notificar:</label>
                                <input <?= $config['notifica'] ?> type="checkbox" name="notifica" id="notifica">
                            </div>

                            <div class="input-group bandeiras">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </button>
                                </span>
                                <input min="1" max="31" value="<?= $config['dia_notifica'] ?>" name="dia_notifica" id="dia_notifica" type="number" placeholder="Dia da notificação" class="form-control"/>
                            </div>

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

                    <div class="bandeiras">
                        <button type="submit" class="btn btn-primary bandeiras" style=" margin-left: 15%; width: 70%;">Gravar</button>
                    </div>


                </form>
            </div>


        </div>
    </div>
</section>		

<script src="<?= base_url("js_b/jquery-2.1.1.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap-switch.js") ?>"></script>
<script src="<?= base_url("js_b/main.js") ?>"></script>
<script src="<?= base_url("js_b/highlight.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>

