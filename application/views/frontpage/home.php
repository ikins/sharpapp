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
                    <source src="<?= base_url(); ?>assets/intro.mp3">
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
    <div class="kuula" style="display: none;">
        <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/collection/7YlPH?fs=0&vr=1&zoom=1&sd=1&thumbs=-1&inst=0&info=0&logo=-1" data-css="ku-embed"></script>
            <nav class="navbar nav-justified fixed-bottom navbar-expand navbar-light bg-light">
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
            </nav>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/function.js"></script>
<script type='text/javascript'>
    $(document).ready(function() {
        var ctrlVideo = document.getElementById("welcomevideo");
        var audio = document.getElementById("audio-intro");
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
        }

    });
</script>
</body>
</html>