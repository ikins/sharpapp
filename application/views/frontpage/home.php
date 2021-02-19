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

    <div class="welcomeWrapper">
        <div id="welcomevideo"></div>
    </div>
    
    <div class="kuula" id="homescreen" style="display: none;">
        <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/collection/7YGLt?fs=1&vr=1&sd=1&thumbs=-1&inst=0&info=0&logo=0" data-width="100%" data-height="640px"></script>
    </div>

    <nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-light" id="nav-bar" style="display: none;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
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
                    <a class="nav-link " style="vertical-align: middle; line-height: 50px;"  id="games" type="button">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="vertical-align: middle; line-height: 50px;"  id="photo" type="button">Photo Booth</a>
                </li> 
            </ul>
        </div>
        <div class="access-video">
            <button type="button" id="watch-audio" class="btn btn-light btn-buy" style="display: none;">Watch</button>
            <button type="button" id="watch-ref" class="btn btn-light btn-buy" style="display: none;">Watch</button>
            <button type="button" id="watch-ws" class="btn btn-light btn-buy" style="display: none;">Watch</button>
            <button type="button" id="watch-ac" class="btn btn-light btn-buy" style="display: none;">Watch</button>
            <button type="button" id="watch-ha" class="btn btn-light btn-buy" style="display: none;">Watch</button>
            <button type="button" id="watch-sl" class="btn btn-light btn-buy" style="display: none;">Watch</button>
        </div>
        <div class="access-ecommerce">
            <a href="https://shopee.co.id/shop/76765337/search?page=0&shopCollection=32844503" target="_new" type="button" id="audio-buy" class="btn btn-light btn-buy" style="display: none;">Buy Now</a>
            <a href="https://shopee.co.id/shop/76765337/search?page=0&shopCollection=32843177" target="_new" type="button" id="ref-buy" class="btn btn-light btn-buy" style="display: none;">Buy Now</a>
            <a href="https://shopee.co.id/shop/76765337/search?page=0&shopCollection=32845014" target="_new" type="button" id="ws-buy" class="btn btn-light btn-buy" style="display: none;">Buy Now</a>
            <a href="https://shopee.co.id/shop/76765337/search?page=0&shopCollection=32843176" target="_new" type="button" id="ac-buy" class="btn btn-light btn-buy" style="display: none;">Buy Now</a>
            <a href="https://shopee.co.id/shop/76765337/search?page=0&shopCollection=32843790" target="_new" type="button" id="ha-buy" class="btn btn-light btn-buy" style="display: none;">Buy Now</a>
            <a href="https://shopee.co.id/shop/76765337/search?page=0&shopCollection=34850994" target="_new" type="button" id="sl-buy" class="btn btn-light btn-buy" style="display: none;">Buy Now</a>
        </div>
    </nav>

    <div class="tv">
        <div class="frame-tv" id="audio-play" style="display: none;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/o_Sg7RirgWc?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="frame-tv" id="ref-play" style="display: none;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/InIs6Oq1dOk?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="frame-tv" id="ws-play" style="display: none;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/km50Wx1ileE?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="frame-tv" id="ac-play" style="display: none;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Vnwc_Z7GsKI?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="frame-tv" id="ha-play" style="display: none;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YO6yr33hwUQ?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="frame-tv" id="sl-play" style="display: none;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1yP9cW8dbUQ?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/function.js"></script>

    <script type='text/javascript'>
        $(document).ready(function() {
            var audio = document.getElementById("audio-intro");
            $('button').click(function() {
                $('button').toggleClass("active");
                audio.pause();
                $("#bg_video").slideUp();
            });

        });
    </script>

    <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var welcomevideo;

        function onYouTubeIframeAPIReady() {
            welcomevideo = new YT.Player('welcomevideo', {
                height: '315',
                width: '560',
                videoId: '1yP9cW8dbUQ',
                playerVars: {
                'cc_lang_pref' : 0,
                'cc_load_policy': 0,
                'controls': 0,
                'disablekb': 0,
                'fs':0,
                'modestbranding': 1,
                'showinfo' : 0, 
                'wmode' : 'transparent',

                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            var playButton = document.getElementById("play-welcome");
            playButton.addEventListener("click", function () {
                welcomevideo.playVideo();
            });
        }

         var done = false;

        function onPlayerStateChange(event) {
            if(event.data === YT.PlayerState.ENDED) {          
                stopVideo();
            }
        }

        function stopVideo() {
            welcomevideo.stopVideo();
            $("#welcomevideo").hide();
            $("#nav-bar").show();
            $("#homescreen").show();
        }
    </script>

    <!-- NAV BAR FUNCTION -->
    <script type='text/javascript'>
        $("#stage").click(function(){
            $("#homescreen").show();
            // tombol youtube
            $("#watch-audio").hide();
            $("#watch-ref").hide();
            $("#watch-ws").hide();
            $("#watch-ac").hide();
            $("#watch-ha").hide();
            $("#watch-sl").hide();
            // frame tv
            $("#audio-play").hide();
            $("#ref-play").hide();
            $("#ws-play").hide();
            $("#ac-play").hide();
            $("#ha-play").hide();
            $("#sl-play").hide();
            // btn-shop
            $("#audio-buy").hide();
            $("#ref-buy").hide();
            $("#ws-buy").hide();
            $("#ac-buy").hide();
            $("#ha-buy").hide();
            $("#sl-buy").hide();
        });

        $("#audio").click(function(){
            $("#homescreen").show();
            // tombol youtube
            $("#watch-audio").show();
            $("#watch-ref").hide();
            $("#watch-ws").hide();
            $("#watch-ac").hide();
            $("#watch-ha").hide();
            $("#watch-sl").hide();
            // frame tv
            $("#audio-play").hide();
            $("#ref-play").hide();
            $("#ws-play").hide();
            $("#ac-play").hide();
            $("#ha-play").hide();
            $("#sl-play").hide();
            // btn-shop
            $("#audio-buy").hide();
            $("#ref-buy").hide();
            $("#ws-buy").hide();
            $("#ac-buy").hide();
            $("#ha-buy").hide();
            $("#sl-buy").hide();
        });

        $("#ref").click(function(){
            $("#homescreen").show();
            // tombol youtube
            $("#watch-ref").show();
            $("#watch-audio").hide();
            $("#watch-ws").hide();
            $("#watch-ac").hide();
            $("#watch-ha").hide();
            $("#watch-sl").hide();
            // frame tv
            $("#audio-play").hide();
            $("#ref-play").hide();
            $("#ws-play").hide();
            $("#ac-play").hide();
            $("#ha-play").hide();
            $("#sl-play").hide();
            // btn-shop
            $("#audio-buy").hide();
            $("#ref-buy").hide();
            $("#ws-buy").hide();
            $("#ac-buy").hide();
            $("#ha-buy").hide();
            $("#sl-buy").hide();
        });

        $("#was").click(function(){
            $("#homescreen").show();

            // tombol youtube
            $("#watch-ws").show();
            $("#watch-audio").hide();
            $("#watch-ref").hide();
            $("#watch-ac").hide();
            $("#watch-ha").hide();
            $("#watch-sl").hide();
            // frame tv
            $("#audio-play").hide();
            $("#ref-play").hide();
            $("#ws-play").hide();
            $("#ac-play").hide();
            $("#ha-play").hide();
            $("#sl-play").hide();
            // btn-shop
            $("#audio-buy").hide();
            $("#ref-buy").hide();
            $("#ws-buy").hide();
            $("#ac-buy").hide();
            $("#ha-buy").hide();
            $("#sl-buy").hide();
        });

        $("#ac").click(function(){
            $("#homescreen").show();

            // tombol youtube
            $("#watch-ac").show();
            $("#watch-audio").hide();
            $("#watch-ref").hide();
            $("#watch-ws").hide();
            $("#watch-ha").hide();
            $("#watch-sl").hide();
            // frame tv
            $("#audio-play").hide();
            $("#ref-play").hide();
            $("#ws-play").hide();
            $("#ac-play").hide();
            $("#ha-play").hide();
            $("#sl-play").hide();
            // btn-shop
            $("#audio-buy").hide();
            $("#ref-buy").hide();
            $("#ws-buy").hide();
            $("#ac-buy").hide();
            $("#ha-buy").hide();
            $("#sl-buy").hide();
        });

        $("#ha").click(function(){
            $("#homescreen").show();

            // tombol youtube
            $("#watch-ha").show();
            $("#watch-audio").hide();
            $("#watch-ref").hide();
            $("#watch-ws").hide();
            $("#watch-ac").hide();
            $("#watch-sl").hide();
            // frame tv
            $("#audio-play").hide();
            $("#ref-play").hide();
            $("#ws-play").hide();
            $("#ac-play").hide();
            $("#ha-play").hide();
            $("#sl-play").hide();
            // btn-shop
            $("#audio-buy").hide();
            $("#ref-buy").hide();
            $("#ws-buy").hide();
            $("#ac-buy").hide();
            $("#ha-buy").hide();
            $("#sl-buy").hide();
        });

        $("#sl").click(function(){
            $("#homescreen").show();

            // tombol youtube
            $("#watch-sl").show();
            $("#watch-audio").hide();
            $("#watch-ref").hide();
            $("#watch-ws").hide();
            $("#watch-ac").hide();
            $("#watch-ha").hide();
            // frame tv
            $("#audio-play").hide();
            $("#ref-play").hide();
            $("#ws-play").hide();
            $("#ac-play").hide();
            $("#ha-play").hide();
            $("#sl-play").hide();
            // btn-shop
            $("#audio-buy").hide();
            $("#ref-buy").hide();
            $("#ws-buy").hide();
            $("#ac-buy").hide();
            $("#ha-buy").hide();
            $("#sl-buy").hide();
        });

    </script>

    <!-- BUTTON VIDEO FUNCTION -->
    <script type='text/javascript'>
        $("#watch-audio").click(function(){
            // tombol youtube
            $("#watch-audio").hide();
            // stage
            $("#homescreen").hide();
            // frametv
            $("#audio-play").show();
            // btn-shop
            $("#audio-buy").show();

        });

        $("#watch-ref").click(function(){
            // tombol youtube
            $("#watch-ref").hide();
            // stage
            $("#homescreen").hide();
            // frametv
            $("#ref-play").show();
            // btn-shop
            $("#ref-buy").show();

        });

        $("#watch-ws").click(function(){
            // tombol youtube
            $("#watch-ws").hide();
            // stage
            $("#homescreen").hide();
            // frametv
            $("#ws-play").show();
            // btn-shop
            $("#ws-buy").show();

        });

        $("#watch-ac").click(function(){
            // tombol youtube
            $("#watch-ac").hide();
            // stage
            $("#homescreen").hide();
            // frametv
            $("#ac-play").show();
            // btn-shop
            $("#ac-buy").show();

        });

        $("#watch-ha").click(function(){
            // tombol youtube
            $("#watch-ha").hide();
            // stage
            $("#homescreen").hide();
            // frametv
            $("#ha-play").show();
            // btn-shop
            $("#ha-buy").show();

        });

        $("#watch-sl").click(function(){
            // tombol youtube
            $("#watch-sl").hide();
            // stage
            $("#homescreen").hide();
            // frametv
            $("#sl-play").show();
            // btn-shop
            $("#sl-buy").show();

        });
    </script>

    

</body>

</html>