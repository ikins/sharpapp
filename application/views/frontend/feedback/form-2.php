<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Feedback Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url(); ?>feedback/save" method="post" class="needs-validation" novalidate>
                <div class="card-body">
                  <div class="form-group">
                    <label for="validationCustom01">Nama</label>
                    <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nama" required>
                    <div class="invalid-feedback">
                      Silahkan isi nama Anda.
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="validationCustom01">Email</label>
                    <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Email" required>
                    <div class="invalid-feedback">
                      Silahkan isi email Anda.
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="validationCustom01">No. HP</label>
                    <input type="text" name="phone" class="form-control" id="validationCustom01" placeholder="No. HP" required>
                    <div class="invalid-feedback">
                      Silahkan isi No. HP Anda.
                    </div>
                  </div>

                  
                  <div class="text-center"><p class="lead"><h3>Pertanyaan :</h3></p></div>

                  <!-- Pertanyaan -->
                  <!-- 1 -->
                  <div class="form-group">
                    <label for="validationCustom01">Bagaimana Penilaian Anda secara keseluruhan dari pameran ini?</label>
                    <select class="custom-select" name="question_1" required>
                      <option value="">Pilih Penilaian Anda</option>
                      <option value="1">Istimewa</option>
                      <option value="2">Baik</option>
                      <option value="3">Cukup</option>
                      <option value="4">Kurang</option>
                    </select>
                    <div class="invalid-feedback">
                      Silahkan pilih penilaian Anda.
                    </div>
                  </div>
                  <!-- 2 -->
                  <div class="form-group">
                    <label for="validationCustom01">Sudah cukupkah kenyamanan yang ada di dalam pameran ini?</label>
                    <select class="custom-select" name="question_2" required>
                      <option value="">Pilih Penilaian Anda</option>
                      <option value="1">Istimewa</option>
                      <option value="2">Baik</option>
                      <option value="3">Cukup</option>
                      <option value="4">Kurang</option>
                    </select>
                    <div class="invalid-feedback">
                      Silahkan pilih penilaian Anda.
                    </div>
                  </div>
                  <!-- 3 -->
                  <div class="form-group">
                    <label for="validationCustom01">Seberapa menarikkah pameran ini bagi Anda?</label>
                    <select class="custom-select" name="question_3" required>
                      <option value="">Pilih Penilaian Anda</option>
                      <option value="1">Sangat Menarik</option>
                      <option value="2">Menarik</option>
                      <option value="3">Cukup</option>
                      <option value="4">Kurang</option>
                    </select>
                    <div class="invalid-feedback">
                      Silahkan pilih penilaian Anda.
                    </div>
                  </div>
                  <!-- 4 -->
                  <div class="form-group">
                    <label for="validationCustom01">Bagaimana penilaian Anda tentang audio & visual pameran ini?</label>
                    <select class="custom-select" name="question_4" required>
                      <option value="">Pilih Penilaian Anda</option>
                      <option value="1">Istimewa</option>
                      <option value="2">Baik</option>
                      <option value="3">Cukup</option>
                      <option value="4">Kurang</option>
                    </select>
                    <div class="invalid-feedback">
                      Silahkan pilih penilaian Anda.
                    </div>
                  </div>
                  <!-- 5 -->
                  <div class="form-group">
                    <label for="validationCustom01">Darimana Anda mengetahui pameran ini?</label>
                    <select class="custom-select" name="question_5" required>
                      <option value="">Silahkan pilih</option>
                      <option value="1">Social Media</option>
                      <option value="2">Iklan</option>
                      <option value="3">Internet</option>
                      <option value="4">Teman</option>
                    </select>
                    <div class="invalid-feedback">
                      Silahkan pilih Darimana Anda mengetahui pameran ini.
                    </div>
                  </div>
                  <!-- 6 -->
                  <div class="form-group">
                    <label for="validationCustom01">Kategori produk manakah yang membuat Anda tertarik?</label>
                    <select class="custom-select" name="question_6" required>
                      <option value="">Silahkan pilih</option>
                      <option value="1">Audio Visual</option>
                      <option value="2">Refrigenerator</option>
                      <option value="3">Washing Machine</option>
                      <option value="4">Air Conditioner & Air Purifier</option>
                      <option value="5">Small Home Appliance</option>
                      <option value="6">Smartphone & Laptop</option>
                    </select>
                    <div class="invalid-feedback">
                      Silahkan pilih kategori pilihan Anda.
                    </div>
                  </div>
                  <!-- 7 -->
                  <div class="form-group">
                    <label for="validationCustom01">Produk apakah yang sedang Anda cari atau butuhkan saat ini?</label>
                    <textarea name="question_7" class="form-control" id="invalidCheck" required></textarea>
                    <div class="invalid-feedback">
                      Silahkan tulis Produk apakah yang sedang Anda cari atau butuhkan saat ini?
                    </div>
                  </div>
                  <!-- 8 -->
                  <div class="form-group">
                    <label for="validationCustom01">Apakah Anda berminat untuk hadir ke pameran berikutnya?</label>
                    <textarea name="question_8" class="form-control" id="invalidCheck" required></textarea>
                    <div class="invalid-feedback">
                      Silahkan tulis Apakah Anda berminat untuk hadir ke pameran berikutnya?
                    </div>
                  </div>
                  <!-- 9 -->
                  <div class="form-group">
                    <label for="validationCustom01">Berikan saran dan usulan Anda!</label>
                    <textarea name="question_9" class="form-control" id="invalidCheck" required></textarea>
                    <div class="invalid-feedback">
                      Silahkan tulis saran dan usulan Anda.
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">Saya setuju dengan <a href="#">Persyaratan layanan</a>.</label>
                      <div class="invalid-feedback">
                        Anda harus setuju sebelum mengirimkan.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-primary">Kirim Feedback</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper