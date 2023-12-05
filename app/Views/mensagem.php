<div class="card">
    <div class="card-header">
        Atenção
    </div>
    <div class="card-body">
        <div class="alert alert-<?php echo $mensagem['tipo'] ?>" role="alert">
            <strong>Aviso! <?php echo $mensagem['mensagem'] ?></strong>
        </div>
        <br><br>
        <p><a href="javascript:history.back()" class="alert-link">Voltar página anterior</a></p>
        <br>
        <p><a href="/" class="alert-link">Voltar página Inicial</a></p>
        <!--?php echo anchor('/', 'Voltar página Inicial') ?-->
    </div>

</div>