<div class="bg-feedback">

    <div class="row h-100 d-flex justify-content-center content-feedback">
      <div class="col-md-5 my-auto">
        <img src="<?php echo base_url("assets/"); ?>images/feedback/form.png" class="img-fluid">
      </div>
      <div class="col-md-6 my-auto">
          <form action="<?= base_url(); ?>feedback/question-1" method="post" class="needs-validation bg-register-form m-t-50" novalidate>
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control" id="validationCustom01" placeholder="No. HP" required>
                  </div>
                </div>
                <div class="float-right set-margin-button-feedback">
                  <button type="submit" class="btn btn-danger">NEXT</button>
                </div>
          </form>
      </div>
    </div>

</div>