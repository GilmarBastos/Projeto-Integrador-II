        <div class="row justify-content-md-center m-5">
            <div class="col-5">
                
                <h2>Login in</h2>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Senha" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Login <i class="bi bi-box-arrow-in-left"></i></button>
                    </div>     
                </form>
            </div>

            <p class="mt-2 mb-1">Se não tiver login <a href="/signup">inscreva-se aqui</a></p>
        </div>