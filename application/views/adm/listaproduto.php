<?php include("cabecalho.php")
?>


<section class="sessao_cadastroCorretor" style="margin-top: 90px; text-align: center;" >
    <div class="container">
        
        <table class="table">
        <?php foreach($lista as $produto) : ?>
            <tr>
                <td><?= $produto["id"]?></td>
                <td><?= $produto["titulo"]?></td>
                <td><img src="<?= base_url("imagens/")."/thumbs/".$produto["img_nome"] ?>"></td>
                
                <td id="status<?= $produto["id"]?>" class="scp_coluna">
                    
                    <?= $produto["status"]?>
                
                </td>
                
                <td>
                    <input <?= $produto["status"] == 0 ? "" : "disabled='disabled'" ?>
                           type="number"  
                           value="<?= $produto['ordem'] ?>" 
                           id="ordem<?= $produto["id"]?>" 
                           name="ordem" 
                           class="form-control" size="10" style="width: 100px;">
                </td>
                <td>
                   <a href="<?= base_url("/index.php/produto/prealterar?id=".$produto["id"]) ?>" class="btn btn-warning" role="button">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        Atualizar
                   </a>
                </td>
                
                <td>
                    <a id="btn<?= $produto["id"]?>" itemid= "<?= base_url("/index.php/produto/ativar?id=".$produto["id"]) ?>"  
                       class="scp_btn btn <?= $produto["status"] == 0 ? "btn-primary" : "btn-success" ?>" role="button">
                         <?= $produto["status"] == 0 ? "Ativar" : "Desativar" ?>
                    </a>
                </td>
                
                <td>
                    <a href="<?= base_url("/index.php/produto/deletar?id=".$produto["id"]) ?>" class="btn btn-danger" role="button">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        </table>
      
    </div>
</section>

<!-- rodape -->
<footer>
    <div class="footer">
        Todos os Direitos Reservados a <strong>RS Soluções</strong>
    </div>
</footer>
<!-- ./rodape -->
     
<?php include("rodape.php")?>




