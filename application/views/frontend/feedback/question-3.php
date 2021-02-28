<div class="bg-pop set-question-top">
  <div class="container">
    <div class="row set-padding justify-content-center m-l-5">
      <div class="col-md-10 bg-question-form p-t-80 p-b-80 p-r-80 p-l-80">
          <form action="<?= base_url(); ?>game/save" method="post" class="needs-validation" novalidate>
                <div class="card-body text-center">
                  <div class="form-group">
                    <label for="validationCustom01" class="title-question">Bagaimana Penilaian Anda secara keseluruhan dari pameran ini?</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Istimewa
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      Baik
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      Cukup
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
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