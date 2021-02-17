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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://static.kuula.io/api.js"></script>

    <script type='text/javascript'>
        $(document).ready(function() {
            var ctrlVideo = document.getElementById("welcomevideo");
            var audio = document.getElementById("intro");
            $('button').click(function() {
                if ($('button').hasClass("active")) {
                    ctrlVideo.play();
                    $('button').toggleClass("active");
                    audio.pause();
                    $("#bg_video").slideUp();
                } else {
                    ctrlVideo.pause();
                    $('button').toggleClass("active");
                }
            });

        });
    </script>

    <script type='text/javascript'>
        $(document).ready(function() {
            $("#greetings").hide();
            var ctrlVideoGreetings = document.getElementById("greetings");
            document.getElementById('welcomevideo').addEventListener('ended', myHandler, false);

            function myHandler(e) {
                $("#welcomevideo").hide();
                $("#greetings").show();
                ctrlVideoGreetings.play();
            }
        });
    </script>

    <script type='text/javascript'>
        $(document).ready(function() {
            $("#homescreen").hide();
            document.getElementById('greetings').addEventListener('ended', myHandler, false);

            function myHandler(e) {
                $("#greetings").hide();
                $("#homescreen").show();
            }
        });
    </script>



</head>

<body>

    <div class="arc-container" id="bg_video">
        <div class="arc-reactor">
            <div class="arc-reactor-desc">
            </div>
            <div class="arc-reactor-core">
                <audio id="intro" autoplay loop>
                    <source src="<?= base_url(); ?>assets/intro.mp3">
                </audio>
                <button class="active"></button>
            </div>
            <div class="arc-reactor-effects">
                <div class="arc-reactor-effect-ring"></div>
                <div class="arc-reactor-effect-ring"></div>
                <div class="arc-reactor-effect-ring"></div>
            </div>
        </div>
    </div>

    <video id="welcomevideo" preload="auto">
        <source src="<?= base_url(); ?>assets/video/welcome.mp4">
    </video>

    <video id="greetings" preload="auto">
        <source src="<?= base_url(); ?>assets/video/vid4.mp4">
    </video>


    <div class="row" id="homescreen">
        <div class="col-sm-12">
            <iframe width="100%" height="640" style="width: 100%; height: 640px; border: none; max-width: 100%;" frameborder="0" allowfullscreen allow="xr-spatial-tracking; gyroscope; accelerometer" scrolling="no" src="https://kuula.co/share/7d47c?fs=1&vr=1&sd=1&initload=0&thumbs=1&info=0&logo=0"></iframe>

        </div>
    </div>



</body>

</html>