  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Voucher Edit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= base_url(); ?>dashboard/voucher/add" class="btn btn-primary btn-flat" style="color: #fff;"><i class="fas fa-plus-square"></i>  Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <form action="<?= base_url(); ?>dashboard/voucher/save" method="post" class="needs-validation" novalidate>
                  <?php foreach ($detail as $row) : ?>
                    <input type="hidden" name="v_id" value="<?= $row->v_id; ?>">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="validationCustom01">Kategori</label>
                      <select class="custom-select" name="category" required>
                        <option value="1" <?php if($row->v_category == "1") : echo 'selected'; endif; ?>>Feedback</option>
                        <option value="2" <?php if($row->v_category == "2") : echo 'selected'; endif; ?>>Game</option>
                      </select>
                      <div class="invalid-feedback">
                        Silahkan pilih Kategori
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom01">Nama Voucher</label>
                      <input type="text" name="name" value="<?= $row->v_name; ?>" class="form-control" id="validationCustom01" placeholder="Nama Voucher" required>
                      <div class="invalid-feedback">
                        Silahkan isi Nama Voucher.
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom01">Kode Voucher</label>
                      <input type="text" name="code" value="<?= $row->v_code; ?>" class="form-control" id="validationCustom01" placeholder="Kode Voucher" required>
                      <div class="invalid-feedback">
                        Silahkan isi Kode Voucher.
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom01">Status</label>
                      <select class="custom-select" name="status" required>
                        <option value="0" <?php if($row->v_status == "0") : echo 'selected'; endif; ?>>Suspended</option>
                        <option value="1" <?php if($row->v_status == "1") : echo 'selected'; endif; ?>>Active</option>
                      </select>
                      <div class="invalid-feedback">
                        Silahkan pilih Kategori
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-block btn-primary">Save</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
