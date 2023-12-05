        <div class="row justify-content-md-center m-5 ">
            <div class="col-5">
                <h2>Cadastrar usuário</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Nome" value="<?= set_value('name') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Senha" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirme a senha" class="form-control" >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Inscrever-se <i class="bi bi-box-arrow-in-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
 