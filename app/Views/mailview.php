<div class="card-body">
    <h1 class="p-3 text-bg-success text-center">Avaliação de funcionalidades da aplicação </h1>
    <p class="ms-3 mb-4">Por favor relate os testes feito no Site:</i></p>
    <div class="row">
        <div class="col-9">
        <form method="post" action="<?php echo base_url('SendMail/enviarEmail') ?>" class="m-2 row">

                <div class="form-group mb-3 col-4">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" >
                </div>
                
                <div class="form-group mb-3 col-4">
                    <label for="mailTo" class="form-label">e-mail:</label>
                    <input type="text" name="mailTo" id="mailTo" class="form-control" >
                </div>

                <div class="form-group mb-3 col-4">
                    <label for="created_at" class="form-label">Data:</label>
                    <input type="datetime" name="created_at" id="created_at" class="form-control" >
                </div>

                <div class="form-group mb-3 col-12">
                    <label for="sim_funcionou" class="form-label">O que testou e funcionou:</label>
                    <textarea type="text" name="sim_funcionou" id="sim_funcionou" class="form-control"></textarea>
                </div>

                <div class="form-group mb-3 col-12">
                    <label for="nao_funcionou" class="form-label">O que testou e não funcionou – O que deve ser corrigido:</label>
                    <textarea type="text" name="nao_funcionou" id="nao_funcionou" class="form-control"></textarea>
                </div>

                <div class="form-group mb-3 col-12">
                    <label for="nao_implementou" class="form-label">Funcionalidade não testada (faltou ou não foi implementada): </label>
                    <textarea type="text" name="nao_implementou" id="nao_implementou" class="form-control" ></textarea>
                </div>
                
                <div class="d-grid col-3">
                    <button type="submit" class="btn btn-success">Enviar <i class="bi bi-check2-square"></i></button>
                </div>
            </form>
        </div>
        <div class="col-3">
            <?php $path= base_url('/img2.png'); ?>
            <img src="<?php echo $path; ?>" alt="img2.jpg" class="img-fluid"> 
            <p class="mt-2 mb-1">Agradecemos pela sua participação <i class="bi bi-hand-thumbs-up"></i></p>
        </div>
    </div>
               
</div>