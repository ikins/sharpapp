  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feedback</h1>
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
                      <th>Date</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Voucher</th>
                      <th>Bagaimana Penilaian Anda secara keseluruhan dari pameran ini?</th>
                      <th>Sudah cukupkah kenyamanan yang ada di dalam pameran ini?</th>
                      <th>Seberapa menarikkah pameran ini bagi Anda?</th>
                      <th>Bagaimana penilaian Anda tentang audio & visual pameran ini?</th>
                      <th>Darimana Anda mengetahui pameran ini?</th>
                      <th>Kategori produk manakah yang membuat Anda tertarik?</th>
                      <th>Produk apakah yang sedang Anda cari atau butuhkan saat ini?</th>
                      <th>Apakah Anda berminat untuk hadir ke pameran berikutnya?</th>
                      <th>Berikan saran dan usulan Anda!</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; foreach ($list as $rows) : $i++; ?>
                    <?php

                    switch ($rows->fb_question_1) {
                      case '1':
                        $fb_q1 = 'Istimewa'; 
                        break;
                      
                      case '2':
                        $fb_q1 = 'Baik';
                        break;

                      case '3':
                        $fb_q1 = 'Cukup';
                        break;

                      case '4':
                        $fb_q1 = 'Kurang';
                        break;
                    }

                    switch ($rows->fb_question_2) {
                      case '1':
                        $fb_q2 = 'Istimewa'; 
                        break;
                      
                      case '2':
                        $fb_q2 = 'Baik';
                        break;

                      case '3':
                        $fb_q2 = 'Cukup';
                        break;

                      case '4':
                        $fb_q2 = 'Kurang';
                        break;
                    }

                    switch ($rows->fb_question_3) {
                      case '1':
                        $fb_q3 = 'Sangat Menarik'; 
                        break;
                      
                      case '2':
                        $fb_q3 = 'Menarik';
                        break;

                      case '3':
                        $fb_q3 = 'Cukup';
                        break;

                      case '4':
                        $fb_q3 = 'Kurang';
                        break;
                    }

                    switch ($rows->fb_question_4) {
                      case '1':
                        $fb_q4 = 'Istimewa'; 
                        break;
                      
                      case '2':
                        $fb_q4 = 'Baik';
                        break;

                      case '3':
                        $fb_q4 = 'Cukup';
                        break;

                      case '4':
                        $fb_q4 = 'Kurang';
                        break;
                    }

                    switch ($rows->fb_question_5) {
                      case '1':
                        $fb_q5 = 'Social Media'; 
                        break;
                      
                      case '2':
                        $fb_q5 = 'Iklan';
                        break;

                      case '3':
                        $fb_q5 = 'Internet';
                        break;

                      case '4':
                        $fb_q5 = 'Teman';
                        break;
                    }

                    switch ($rows->fb_question_6) {
                      case '1':
                        $fb_q6 = 'Audio Visual'; 
                        break;
                      
                      case '2':
                        $fb_q6 = 'Refrigenerator';
                        break;

                      case '3':
                        $fb_q6 = 'Washing Machine';
                        break;

                      case '4':
                        $fb_q6 = 'Air Conditioner & Air Purifier';
                        break;

                      case '5':
                        $fb_q6 = 'Small Home Appliance';
                        break;

                      case '6':
                        $fb_q6 = 'Smartphone & Laptop';
                        break;
                    }

                    switch ($rows->fb_question_7) {
                      case '1':
                        $fb_q7 = 'Audio Visual'; 
                        break;
                      
                      case '2':
                        $fb_q7 = 'Refrigenerator';
                        break;

                      case '3':
                        $fb_q7 = 'Washing Machine';
                        break;

                      case '4':
                        $fb_q7 = 'Air Conditioner & Air Purifier';
                        break;

                      case '5':
                        $fb_q7 = 'Small Home Appliance';
                        break;

                      case '7':
                        $fb_q7 = 'Smartphone & Laptop';
                        break;

                      case '':
                        $fb_q7 = '-';
                        break;
                    }

                    switch ($rows->fb_question_8) {
                      case '1':
                        $fb_q8 = 'Ya'; 
                        break;
                      
                      case '0':
                        $fb_q8 = 'Tidak';
                        break;

                      case '':
                        $fb_q8 = '-';
                        break;
                    }

                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo date('d M Y h:i', strtotime($rows->fb_time)); ?></td>
                      <td><?php echo $rows->fb_name; ?></td>
                      <td><?php echo $rows->fb_email; ?></td>
                      <td><?php echo $rows->fb_phone; ?></td>
                      <td><?php echo $rows->fb_voucher; ?></td>
                      <td><?php echo $fb_q1; ?></td>
                      <td><?php echo $fb_q2; ?></td>
                      <td><?php echo $fb_q3; ?></td>
                      <td><?php echo $fb_q4; ?></td>
                      <td><?php echo $fb_q5; ?></td>
                      <td><?php echo $fb_q6; ?></td>
                      <td><?php echo $fb_q7; ?></td>
                      <td><?php echo $fb_q8; ?></td>
                      <td><?php echo $rows->fb_question_9; ?></td>
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

  
