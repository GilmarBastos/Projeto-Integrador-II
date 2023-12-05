<div class="card-body">
    <h1 class="p-3 text-bg-success text-center">Pesquisa de faixa etária eleitor Xtópolis</h1>
    <h4 class="ms-5 mt-1 mb-5"><?php echo $sessao; ?></h4>
    <div class="row">
        <div class="col">
            <p class="ms-5 mb-3">Preencha a informação solicitada</i></p>
            <form action="<?php echo base_url(); ?>/ProfileController/store" method="post" class="m-5 col-5 ">             
                <div class="form-group mb-3">
                    <label for="idade" class="form-label">Digite a idade:</label>
                    <input type="text" name="idade" id="idade" placeholder="idade" class="form-control" >
                </div>
                <input type="hidden" name="situacao" id="situacao" placeholder="Situação eleitor" class="form-control" >
                <div class="d-grid">
                    <button type="button" onclick="confSubmit(this.form);"  class="btn btn-success">Enviar <i class="bi bi-check2-square"></i></button>
                </div>
            </form>
            
        </div>
        <div class="col-4">
            <?php $path= base_url('/img2.png'); ?>
            <img src="<?php echo $path; ?>" alt="img2.jpg" class="img-fluid"> 
            <p class="mt-2 mb-1">Agradecemos pela sua participação <i class="bi bi-hand-thumbs-up"></i></p>
        </div>
    </div>
               
</div>






<script>
    function confSubmit(form) {
        if (confirm("Confirma envio ?")) {

            $idade = Number(document.getElementById("idade").value);
            if (($idade >= 18) && ($idade <= 69)) {
                document.getElementById("situacao").value = "Obrigatorio";
            }

            if (($idade == 16) || ($idade == 17) || ($idade >= 70) )  {
                document.getElementById("situacao").value = "Facultativo";
            }

            if ($idade < 16){
                document.getElementById("situacao").value = "Menor de idade";
            }
                
            form.submit();
        } else {
            alert("Envio cancelado!");
        }
    }
</script>