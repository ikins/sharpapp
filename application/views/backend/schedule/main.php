  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schedule</h1>
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
                <a href="<?= base_url(); ?>dashboard/schedule/add" class="btn btn-primary btn-flat" style="color: #fff;"><i class="fas fa-plus-square"></i>  Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="tabledashboard">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Status</th>
                      <th>Start</th>
                      <th>End</th>
                      <th>Duration</th>
                      <th>Program</th>
                      <th>Talent</th>
                      <th>Format</th>
                      <th>Location</th>
                      <th>Date</th>
                      <th>#</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; foreach ($list as $rows) : $i++; ?>
                    <?php
                    switch ($rows->s_status) {
                      case '0':
                        $status = 'Suspended';
                        break;
                      
                      default:
                        $status = 'Aktif';
                        break;
                    }
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $status; ?></td>
                      <td><?php echo $rows->s_start; ?></td>
                      <td><?php echo $rows->s_end; ?></td>
                      <td><?php echo $rows->s_duration; ?></td>
                      <td><?php echo $rows->s_program; ?></td>
                      <td><?php echo $rows->s_talent; ?></td>
                      <td><?php echo $rows->s_format; ?></td>
                      <td><?php echo $rows->s_location; ?></td>
                      <td><?php echo date('d M Y h:i', strtotime($rows->s_date)); ?></td>
                      <td><a href="<?= base_url(); ?>dashboard/schedule/edit/<?= $rows->s_id ?>" class="btn btn-primary" style="color: #fff;"><i class="fas fa-edit"></i> Edit</a>
                      </td>
                      <td>
                        <?php if ($rows->s_status == '0') { ?>
                          <a href="<?= base_url(); ?>dashboard/schedule/status/<?= $rows->s_id ?>/1" class="btn btn-primary" style="color: #fff;"><i class="fas fa-edit"></i> Aktifkan</a>
                        <?php }else{ ?>
                          <a href="<?= base_url(); ?>dashboard/schedule/status/<?= $rows->s_id ?>/0" class="btn btn-danger" style="color: #fff;"><i class="fas fa-edit"></i> Suspended</a>
                        <?php } ?>
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

  
