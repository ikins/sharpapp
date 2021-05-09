  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Visitor Daily</h1>
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
              <div class="card-header"></div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="tabledashboard">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Last IP</th>
                      <th>Date</th>
                      <th>Hits</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; foreach ($list as $rows) : $i++; ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $rows->vd_ip; ?></td>
                      <td><?php echo date('d M Y H:i', strtotime($rows->vd_time)); ?></td>
                      <td><?php echo $rows->vd_hit; ?></td>
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

  
