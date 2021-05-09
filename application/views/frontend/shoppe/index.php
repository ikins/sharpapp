<div class="container-shoppe"></div>
<div class="live">
    <!-- for live stream -->
    <div id="player"></div>
    <!-- for schudle -->
    <!-- <img src="<?= base_url(); ?>assets/images/screen/SCREEN_4MARET.jpg" class="img-fluid"> -->
</div> 
<script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            playerVars: {
                rel:0,
                autoplay:1,
                enablejsapi: 1,
                disablekb: 1,
                showinfo: 0,
                controls: 0,
                fs: 0,
                
            },
            height: '100%',
            width: '100%',
            videoId: '7qBSZlC1g0U',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    var done = false;
    function onPlayerStateChange(event) {
        if(event.data === YT.PlayerState.ENDED) {          
                stopVideo();
        }
    }
    function stopVideo() {
        player.stopVideo();
        window.close();


    }
</script> 