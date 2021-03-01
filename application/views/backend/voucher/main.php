  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Voucher</h1>
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
                <table class="table table-hover text-nowrap" id="tabledashboard">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Voucher Code</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; foreach ($list as $rows) : $i++; ?>
                    <tr>
                      <?php
                      switch ($rows->v_category) {
                        case '1':
                          $v_cat = 'Feedback';
                          break;
                        
                        case '2':
                          $v_cat = 'Game';
                          break;

                        case '':
                          $v_cat = '-';
                          break;
                      }

                      switch ($rows->v_status) {
                        case '1':
                          $v_stat = 'Active';
                          break;
                        
                        case '0':
                          $v_stat = '<small class="badge badge-danger">Suspended</small>';
                          break;

                        case '':
                          $v_stat = '-';
                          break;
                      }

                      ?>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $rows->v_name; ?></td>
                      <td><?php echo $rows->v_code; ?></td>
                      <td><?php echo $v_cat; ?></td>
                      <td><?php echo $v_stat; ?></td>
                      <td><?php echo date('d M Y h:i', strtotime($rows->v_date)); ?></td>
                      <td><a href="<?= base_url(); ?>dashboard/voucher/edit/<?= $rows->v_id ?>" class="btn btn-primary" style="color: #fff;"><i class="fas fa-edit"></i> Edit</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
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

  
