<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<section class="sessao_principal" style="margin-top: 20px;">
    <div class="container" style="float: none;">
        <div class="row">
            <div class="col-xs-12">

                <!-- Resultado Bandeira Verde -->
                <div class="panel divPanel_resultCalculo">
                            <div class="panel-heading" id="resultVerde">
                        <h5 class="panel-title">
                            <strong>Resultado Bandeira Verde</strong>
                            <span class="glyphicon glyphicon-flag" style="float: right;"></span>
                        </h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Descrição</strong></td>
                                    <td class="align_td"><strong>Quant.</strong></td>
                                    <td class="align_td"><strong>Tarifa</strong></td>
                                    <td class="align_td"><strong>Valor</strong></td>
                                </tr>
                               
                                <tr>
                                    <td>Consumo</td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['total_kwh']?></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['tarifa_verde']?></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['total_verde']?></td>
                                </tr>
                                <tr>
                                    <td>Ilum. Publica</td>
                                    <td></td>
                                    <td></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['taxa_iluminacao']?></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['resultado']?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Resultado Bandeira Amarela -->
                <div class="panel divPanel_resultCalculo">
                            <div class="panel-heading" id="resultAmarelo">
                        <h5 class="panel-title">
                            <strong>Resultado Bandeira Amarela</strong>
                            <span class="glyphicon glyphicon-flag" style="float: right;"></span>
                        </h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Descrição</strong></td>
                                    <td class="align_td"><strong>Quant.</strong></td>
                                    <td class="align_td"><strong>Tarifa</strong></td>
                                    <td class="align_td"><strong>Valor</strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Consumo</td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['total_kwh']?></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['tarifa_verde']?></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['total_verde']?></td>
                                </tr>
                               
                                <tr>
                                    <td>Adicional</td>
                                    <td class="align_td"><?= $result["kwh"]['amarela']['total_kwh']?></td>
                                    <td class="align_td"><?= $result["kwh"]['amarela']['tarifa_amarela']?></td>
                                    <td class="align_td"><?= $result["kwh"]['amarela']['total_amarela']?></td>
                                </tr>
                                <tr>
                                    <td>Ilum. Publica</td>
                                    <td></td>
                                    <td></td>
                                    <td class="align_td"><?= $result["kwh"]['amarela']['taxa_iluminacao']?></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                     <td></td>
                                    <td></td>
                                    <td class="align_td"><?= $result["kwh"]['amarela']['resultado']?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 
                
                
                <!-- Resultado Bandeira Vermelha -->
                <div class="panel divPanel_resultCalculo">
                            <div class="panel-heading" id="resultVermelho">
                        <h5 class="panel-title">
                            <strong>Resultado Bandeira Vermelha</strong>
                            <span class="glyphicon glyphicon-flag" style="float: right;"></span>
                        </h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Descrição</strong></td>
                                    <td class="align_td"><strong>Quant.</strong></td>
                                    <td class="align_td"><strong>Tarifa</strong></td>
                                    <td class="align_td"><strong>Valor</strong></td>
                                </tr>
                                
                                 <tr>
                                    <td>Consumo</td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['total_kwh']?></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['tarifa_verde']?></td>
                                    <td class="align_td"><?= $result["kwh"]['verde']['total_verde']?></td>
                                </tr>
                               
                                <tr>
                                    <td>Adicional</td>
                                    <td class="align_td"><?= $result["kwh"]['vermelha']['total_kwh']?></td>
                                    <td class="align_td"><?= $result["kwh"]['vermelha']['tarifa_vermelha']?></td>
                                    <td class="align_td"><?= $result["kwh"]['vermelha']['total_vermelha']?></td>
                                </tr>
                                <tr>
                                    <td>Ilum. Publica</td>
                                    <td></td>
                                    <td></td>
                                    <td class="align_td"><?= $result["kwh"]['vermelha']['taxa_iluminacao']?></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td></td>
                                    <td class="align_td"><?= $result["kwh"]['vermelha']['resultado']?></td>
                                </tr>
                            </tbody>
                        </table>
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

