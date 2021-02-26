<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              Terima kasih atas partisipasi Anda dalam pengisian feedback form <strong>Sharp Virtual Exhibition
              Beyonf Future The Ultimate Innovation</strong>.<br>
              Selamat Anda Kode Voucher tambahan potongan harga senilai Rp. 50.000,- untuk berbelanja
              ditoko Resmi Sharp di Shopee.
              <br><br>
              <span class="badge badge-success p-t-20 p-b-20 p-l-20 p-r-20">Kode Voucher : SHARP098982</span>
            </div>
            <form action="<?= base_url(); ?>feedback/share" method="post" class="needs-validation" novalidate>
                <div class="card-body">
                  <div class="form-group">
                    <label for="validationCustom01">Share to Email</label>
                    <input type="text" name="email" class="form-control" id="validationCustom01" placeholder="Email Anda" required>
                    <div class="invalid-feedback">
                      Silahkan isi email Anda.
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-primary">Kirim Feedback</button>
                </div>
              </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>