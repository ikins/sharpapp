<div class="container-feedback">
  <div class="feedback">
      <div class="bg_feedback">
        <div class="container">
            <div class="row d-flex h-100 justify-content-center">
                <div class="col-md-6 col-xs-12 img-game">
                    <img src="<?php echo base_url("assets/"); ?>images/games/register.png" class="img-fluid game-reg">
                </div>
                <div class="col-md-6 col-xs-12 form-game">
                    <form action="<?= base_url(); ?>games/save" method="post" class="needs-validation bg-register-form m-t-50" novalidate target="_new">
                        <div class="card-body">
                            <div class="form-group">
                            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nama" required>
                            <!-- <div class="invalid-feedback">
                                Silahkan isi nama Anda.
                            </div> -->
                            </div>
                            <div class="form-group">
                            <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Email" required>
                            <!-- <div class="invalid-feedback">
                                Silahkan isi email Anda.
                            </div> -->
                            </div>
                            <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="validationCustom01" placeholder="No. HP" required>
                            <!-- <div class="invalid-feedback">
                                Silahkan isi No. HP Anda.
                            </div> -->
                            </div>
                        </div>
                        <div class="float-right set-margin-button"> 
                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>