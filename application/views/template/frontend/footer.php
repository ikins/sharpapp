	</div>
  <!-- base_url -->
  <input type="hidden" id="url" value="<?php echo base_url();?>">
<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/js/adminlte.min.js"></script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<script type="text/javascript">
   $('#feedback-close').click(function(){
    $('#feedbackModal').modal('toggle');
   });
  //
    var base_url = $("#url").val();
  //
  $('#audio-buy').click(function(){
        $.ajax({
               type: "POST",
               dataType: "html",
               url: base_url+'visit-buy',
               data: { category:+'1' },
               beforeSend: function() {},
               success: function(msg){}
        });
  });

  $('#ref-buy').click(function(){
        $.ajax({
               type: "POST",
               dataType: "html",
               url: base_url+'visit-buy',
               data: { category:+'2' },
               beforeSend: function() {},
               success: function(msg){}
        });
    });

    $('#wm-buy').click(function(){
        $.ajax({
               type: "POST",
               dataType: "html",
               url: base_url+'visit-buy',
               data: { category:+'3' },
               beforeSend: function() {},
               success: function(msg){}
        });
    });

    $('#ac-buy').click(function(){
        $.ajax({
               type: "POST",
               dataType: "html",
               url: base_url+'visit-buy',
               data: { category:+'4' },
               beforeSend: function() {},
               success: function(msg){}
        });
    });

    $('#sh-buy').click(function(){
        $.ajax({
               type: "POST",
               dataType: "html",
               url: base_url+'visit-buy',
               data: { category:+'5' },
               beforeSend: function() {},
               success: function(msg){}
        });
    });

    $('#sl-buy').click(function(){
        $.ajax({
               type: "POST",
               dataType: "html",
               url: base_url+'visit-buy',
               data: { category:+'6' },
               beforeSend: function() {},
               success: function(msg){}
        });
    });
</script>

</body>
</html>