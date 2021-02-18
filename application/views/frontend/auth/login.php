
<div class="login-box">
<!-- /.login-logo -->
  <div class="card card-outline card-red">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1">id.sharp</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?php echo validation_errors('<p class="login-box-msg text-red">'); ?>
        <?php if (isset($error)){ ?>
          <p class="login-box-msg text-red"><?php echo $error; ?></p>
        <?php } ?>
      <form method="post" action="<?php echo base_url(); ?>valid-login">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
