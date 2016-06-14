<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_principal" style="margin-top: 70px;">
    <div class="container  col-xs-12" style="float: none;">
        <div class="">
            <div class="col-xs-12">

                <div class="row">
                    <div>
                      
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Resultado Bandeira verde</h3>
                            </div>
                            <div class="panel-body">

                                <?= $result["kwh"]?>
                            </div>
                        </div>
                        
                        
                         <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Resultado Bandeira amarela</h3>
                            </div>
                            <div class="panel-body">

                                Resultado calculo bandeira amarela
                            </div>
                        </div>
                        
                        
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Resultado Bandeira vermelha</h3>
                            </div>
                            <div class="panel-body">

                                Resultado calculo bandeira vermelha
                            </div>
                        </div>
                        


                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-2.1.1.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>

