<div class="bg-feedback set-question-top">
  <div class="container">
    <div class="row set-padding justify-content-center m-l-5">
      <div class="col-md-10">
          <form action="<?= base_url(); ?>feedback/question-8" method="post" class="needs-validation bg-question-form" novalidate>
            <input type="hidden" name="fb_name" value="<?php echo $fb_name; ?>">
            <input type="hidden" name="fb_email" value="<?php echo $fb_email; ?>">
            <input type="hidden" name="fb_phone" value="<?php echo $fb_phone; ?>">
            <!-- FB-Q -->
            <input type="hidden" name="fb_q1" value="<?php echo $fb_q1; ?>">
            <input type="hidden" name="fb_q2" value="<?php echo $fb_q2; ?>">
            <input type="hidden" name="fb_q3" value="<?php echo $fb_q3; ?>">
            <input type="hidden" name="fb_q4" value="<?php echo $fb_q4; ?>">
            <input type="hidden" name="fb_q5" value="<?php echo $fb_q5; ?>">
            <input type="hidden" name="fb_q6" value="<?php echo $fb_q6; ?>">
                <div class="card-feedback">
                  <div class="form-group m-t-20 text-center">
                    <label for="validationCustom01" class="title-question text-center">Produk apakah yang sedang Anda cari atau butuhkan saat ini?</label>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q7" id="fb_q71" value="1" checked>
                        <label class="form-check-label label-feedback-product" for="fb_q71">
                          Audio Visual
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q7" id="fb_q72" value="2">
                        <label class="form-check-label label-feedback-product" for="fb_q72">
                          Air Conditioner &<br> Air Purifier
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q7" id="fb_q72" value="3">
                        <label class="form-check-label label-feedback-product" for="fb_q72">
                          Refrigenerator
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q7" id="fb_q72" value="4">
                        <label class="form-check-label label-feedback-product" for="fb_q72">
                          Small Home<br> Appliance
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q7" id="fb_q72" value="5">
                        <label class="form-check-label label-feedback-product" for="fb_q72">
                          Washing Machine
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q7" id="fb_q72" value="6">
                        <label class="form-check-label label-feedback-product" for="fb_q72">
                          Smartphone &<br> Laptop
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn-feedback-note text-center p-t-20">
                <div class="card-feedback text-center">
                  <div class="form-group m-t-20">
                    <label for="validationCustom01" class="title-question text-center">Produk apakah yang sedang Anda cari atau butuhkan saat ini?</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <textarea name="fb_q7" class="form-control" cols="55" rows="3"></textarea>
                  </div>
                </div>
                <div class="btn-feedback-note text-center">
                  <button type="submit" class="btn btn-danger">NEXT</button>
                </div>
          </form>
      </div>
    </div>
    </div>
</div>