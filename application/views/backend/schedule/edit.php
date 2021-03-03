  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schedule Edit</h1>
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
                <form action="<?= base_url(); ?>dashboard/schedule/save" method="post" class="needs-validation" novalidate>
                  <?php foreach ($detail as $row) : ?>
                    <input type="hidden" name="s_id" value="<?= $row->s_id; ?>">
                    <div class="card-body">
                    <div class="form-group">
                      <label>Date</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="s_date" value="<?= date('d-m-Y',strtotime($row->s_date)); ?>" class="form-control datetimepicker-input" data-target="#reservationdate" required>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Time Start</label>
                      <div class="input-group date" id="start" data-target-input="nearest">
                        <input type="text" name="s_start" value="<?= $row->s_start; ?>" class="form-control datetimepicker-input" data-target="#start" required>
                        <div class="input-group-append" data-target="#start" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Time End</label>
                      <div class="input-group date" id="end" data-target-input="nearest">
                        <input type="text" name="s_end" value="<?= $row->s_end; ?>" class="form-control datetimepicker-input" data-target="#end" required>
                        <div class="input-group-append" data-target="#end" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Time Duration</label>
                      <div class="input-group date" id="duration" data-target-input="nearest">
                        <input type="text" name="s_duration" value="<?= $row->s_duration; ?>" class="form-control datetimepicker-input" data-target="#duration" required>
                        <div class="input-group-append" data-target="#duration" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom01">Program</label>
                      <input type="text" name="s_program" value="<?= $row->s_program; ?>" class="form-control" id="validationCustom01" placeholder="Program" required>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom01">Talent</label>
                      <input type="text" name="s_talent" value="<?= $row->s_talent; ?>" class="form-control" id="validationCustom01" placeholder="Talent" required>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom01">Format</label>
                      <input type="text" name="s_format" value="<?= $row->s_format; ?>" class="form-control" id="validationCustom01" placeholder="Format" required>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom01">Location</label>
                      <input type="text" name="s_location" value="<?= $row->s_location; ?>" class="form-control" id="validationCustom01" placeholder="Location" required>
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

  
