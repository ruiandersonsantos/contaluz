<?php if ($this->session->flashdata("error")) : ?>
    <h5 class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= $this->session->flashdata("error") ?>
    </h5>
<?php endif ?>

<?php if ($this->session->flashdata("sucesso")) : ?>
    <h5 class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= $this->session->flashdata("sucesso") ?>
    </h5>
    <?php
 endif ?>