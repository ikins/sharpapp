<div class="container-feedback">
  <div class="feedback">
      <div class="bg_feedback">
        <div class="container">
          <div class="bg-question-form">
            <div class="row d-flex h-100 justify-content-center">
              <div class="col-12 from-qs-1">
              <div class="col-md-12">
              <form action="<?= base_url(); ?>feedback/save" method="post" class="needs-validation" novalidate>
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
            <input type="hidden" name="fb_q7" value="<?php echo $fb_q7; ?>">
            <input type="hidden" name="fb_q8" value="<?php echo $fb_q8; ?>">
            
                <div class="card-feedback text-center">
                  <div class="form-group m-t-20">
                    <label for="validationCustom01" class="title-question text-center">Berikan saran dan usulan Anda!</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <textarea name="fb_q9" class="form-control" cols="55" rows="3"></textarea>
                  </div>
                </div>
                <div class="btn-feedback-note-8 text-center">
                  <button type="submit" class="btn btn-danger">SUBMIT</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
