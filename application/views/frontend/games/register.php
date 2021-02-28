<div class="bg-pop set-padding-top">
	<div class="container">
	  <div class="row set-padding justify-content-center">
	    <div class="col-md-6 text-center p-r-10">
	      <img src="<?php echo base_url("assets/"); ?>images/games/register.png" class="img-fluid">
	    </div>
	    <div class="col-md-6 bg-register-form p-t-10">
	      	<form action="<?= base_url(); ?>game/save" method="post" class="needs-validation" novalidate>
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nama" required>
                    <div class="invalid-feedback">
                      Silahkan isi nama Anda.
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Email" required>
                    <div class="invalid-feedback">
                      Silahkan isi email Anda.
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control" id="validationCustom01" placeholder="No. HP" required>
                    <div class="invalid-feedback">
                      Silahkan isi No. HP Anda.
                    </div>
                  </div>
              	</div>
              	<div class="float-right set-margin-button">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
          </form>
	    </div>
	  </div>
  	</div>
</div>