
<?php include("cabecalho.php") ?>


<section class="sessao_cadastroCorretor" style="margin-top: 40px;">
    <div class="container  col-xs-12" style="float: none;">
        <div class="">
            <h1><?= $this->session->flashdata("sucesso") ?></h1>

            <div class="col-xs-12">
                <form class="form-horizontal" id="form_login" method="post" action="configuracao/teste" style="max-width: 100%; margin: 5px;">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php include("mensagem.php") ?>


                            <h4 style="border-bottom: 1px black solid; margin-bottom: 10px;">
                                <strong>Configurações das Tarifas</strong>
                            </h4>
                            <br />

                            <div class="form-group formulario">                    
                                <div class=" col-xs-offset-1 col-xs-10">
                                    <input type="number" class="form-control" id="tarifaNormal" placeholder="Tarifa Normal"/>
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class=" col-xs-offset-1 col-xs-10">
                                    <input type="number" class="form-control" id="tarifaVermelha" placeholder="Tarifa Vermelha"/>
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class=" col-xs-offset-1 col-xs-10">
                                    <input type="number" class="form-control" id="taxaIluminacao" placeholder="Taxa de Iluminação"/>
                                </div>
                            </div>

                            <br />
                            <br />
                            <h4 style="border-bottom: 1px black solid; margin-bottom: 10px;">
                                <strong>Configurações de Notificação</strong>
                            </h4>
                            <br />




                            <div class="form-group formulario"> 

                                <div class="col-xs-offset-1 col-xs-10">
                                    <label for="tipo"  control-label>Notificar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="checkbox" >
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class=" col-xs-offset-1 col-xs-10">
                                    <input type="number" class="form-control" id="diaNotificacao" placeholder="Dia a ser Notificado"/>
                                </div>
                            </div>

                            <div class="form-group formulario">                    
                                <div class=" col-xs-offset-1 col-xs-10">
                                    <input type="number" class="form-control" id="horaNotificacao" placeholder="Hoda da Notificação" style="margin-bottom: 10px;"/>
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
