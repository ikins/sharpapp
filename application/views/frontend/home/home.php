<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ring.css">
    
    <script src="https://static.kuula.io/api.js"></script>
</head>
<body>
    <!-- welcome -->
    <div class="arc-container" id="bg_video">
        <div class="arc-reactor">
            <div class="arc-reactor-desc">
            </div>
            <div class="arc-reactor-core">
                <audio id="audio-intro" autoplay loop>
                    <source src="<?= base_url(); ?>assets/intro.wav">
                </audio>
                <button id="play-welcome" class="active"></button>
            </div>
            <div class="arc-reactor-effects">
                <div class="arc-reactor-effect-ring"></div>
                <div class="arc-reactor-effect-ring"></div>
                <div class="arc-reactor-effect-ring"></div>
            </div>
        </div>
    </div> 
    <!-- Welcome video -->
     <video id="welcomevideo" preload="auto" style="display: none;">
        <source src="<?= base_url(); ?>assets/video/welcome.mp4">
    </video>   
    <!-- frame -->
    <div id="menu" style="display: none;">
        <div class="row menu-link">
            <div class="col-md-2  col-2 text-center  px-0">
                <a type="button" class="menu_link" modal-url="<?php echo base_url('welcome/feedback') ?>" modal-title="Mekanisme">
                    <img class="icononframe" src="<?= base_url(); ?>assets/images/feedback-icon.png">
                </a>
            </div>

            <div class="col-2 text-center offset-2  px-0">
                <a type="button" id="on_bt">
                    <img class="icononframe" src="<?= base_url(); ?>assets/images/sound-icon-on.png">
                </a>

                <a type="button" id="off_bt" style="display:none">
                    <img class="icononframe" src="<?= base_url(); ?>assets/images/sound-icon.png">
                </a>
            </div>
        </div>
    </div>
    
    <div class="kuula" style="display: none;">
    
        <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/collection/7YlPH?fs=0&vr=1&zoom=1&sd=1&thumbs=-1&inst=0&info=0&logo=-1" data-css="ku-embed"></script>
        <audio id="audio-bg" autoplay loop>
            <source src="<?= base_url(); ?>assets/bg_music.mp3">
        </audio>
        <nav class="navbar nav-justified fixed-bottom navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                
                    <li class="nav-item" >
                        <a class="nav-link " style="vertical-align: middle; line-height: 50px;"  id="audio" type="button">Audio Visual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="vertical-align: middle; line-height: 50px;" id="ref" type="button">Refrigenerator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="was" type="button">Washing Machine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ac" type="button">Air Conditioner & Air Purifier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ha" type="button">Small Home Appliance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sl" type="button">Smartphone & Laptop</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" style="vertical-align: middle; line-height: 50px;"  id="stage" type="button">Stage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="vertical-align: middle; line-height: 50px;"  id="games" type="button" data-toggle="modal" data-target="#popGame">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="vertical-align: middle; line-height: 50px;"  id="photo" type="button" data-toggle="modal" data-target="#popPhotobooth">Photo Booth</a>
                    </li> 
                </ul>
            </div>
        </nav>
        
    </div> 


    <div class="modal fade" id="modalfeedback" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content" >
                <div class="modal-body p-0" >
                    
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/function.js"></script>
<script type='text/javascript'>
    $(document).ready(function() {
        var ctrlVideo = document.getElementById("welcomevideo");
        var audio = document.getElementById("audio-intro");
        var x = document.getElementById("audio-bg"); 
        x.pause();
        document.getElementById('welcomevideo').addEventListener('ended', myHandler, false);
        $('button').click(function() {
            $("#welcomevideo").show();
            ctrlVideo.play();
            $('button').toggleClass("active");
                audio.pause();
            $("#bg_video").slideUp();
        });

        function myHandler(e) {
            $("#welcomevideo").hide();
            $(".kuula").show();
            $("#menu").show();
            x.play();
        }

    });
</script>
<script>
    $(".menu_link").on("click",function()
        {
          $("#modalfeedback .modal-dialog").addClass('modal-lg');
            url = $(this).attr("modal-url");
          $("#modalfeedback .modal-body").html("<div class='p-4'>Loading...</div>").load(url);
          $("#modalfeedback").modal('show');
          
        });

    var x = document.getElementById("audio-bg"); 
    $("#on_bt").on("click",function(){
      $("#on_bt").hide();
      $("#off_bt").show();
      x.muted = true;
    });

    $("#off_bt").on("click",function(){
      $("#off_bt").hide();
      $("#on_bt").show();
      x.muted = false;
    });
    

    // kuula load frame
    KuulaPlayerAPI.addEventListener("frameloaded", function(e) {
    var x = document.getElementById("audio-bg"); 
        document.querySelector("#audio").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 100);
            KuulaPlayerAPI.setZoom(e.frame, -15);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#ref").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 135);
            KuulaPlayerAPI.setZoom(e.frame, -15);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#was").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 165);
            KuulaPlayerAPI.setZoom(e.frame, -15);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#ac").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 195);
            KuulaPlayerAPI.setZoom(e.frame, -15);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#ha").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 225);
            KuulaPlayerAPI.setZoom(e.frame, -15);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#sl").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 255);
            KuulaPlayerAPI.setZoom(e.frame, -15);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#stage").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 0);
            KuulaPlayerAPI.setZoom(e.frame, 0);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#games").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, -60);
            KuulaPlayerAPI.setZoom(e.frame, -5);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });

        document.querySelector("#photo").addEventListener("click", function() {
            KuulaPlayerAPI.setHeading(e.frame, 60);
            KuulaPlayerAPI.setZoom(e.frame, -5);
            $("#on_bt").show();
            $("#off_bt").hide();
            x.muted = false;
        });


    });


    // kuula hotspot event
    KuulaPlayerAPI.addEventListener("hotspot", function(e)  {
        var x = document.getElementById("audio-bg"); 
        $("#on_bt").hide();
        $("#off_bt").show();
        x.muted = true;

    });

</script>
</body>
</html>