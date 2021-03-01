<div class="bg-feedback set-question-top">
  <div class="container">
    <div class="row set-padding justify-content-center m-l-5">
      <div class="col-md-10">
          <form action="<?= base_url(); ?>feedback/question-4" method="post" class="needs-validation bg-question-form" novalidate>
            <input type="hidden" name="fb_name" value="<?php echo $fb_name; ?>">
            <input type="hidden" name="fb_email" value="<?php echo $fb_email; ?>">
            <input type="hidden" name="fb_phone" value="<?php echo $fb_phone; ?>">
            <!-- FB-Q -->
            <input type="hidden" name="fb_q1" value="<?php echo $fb_q1; ?>">
            <input type="hidden" name="fb_q2" value="<?php echo $fb_q2; ?>">

                <div class="card-feedback text-center">
                  <div class="form-group m-t-20">
                    <label for="validationCustom01" class="title-question text-center">Seberapa menarikkah pameran ini bagi Anda?</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fb_q3" id="fb_q31" value="1" checked>
                    <label class="form-check-label label-feedback" for="fb_q31">
                      Sangat Menarik
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fb_q3" id="fb_q32" value="2">
                    <label class="form-check-label label-feedback" for="fb_q32">
                      Menarik
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fb_q3" id="fb_q32" value="3">
                    <label class="form-check-label label-feedback" for="fb_q32">
                      Cukup
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fb_q3" id="fb_q32" value="4">
                    <label class="form-check-label label-feedback" for="fb_q32">
                      Kurang
                    </label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-danger">NEXT</button>
                </div>
          </form>
      </div>
    </div>
    </div>
</div>