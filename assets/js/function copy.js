
// nav active
$(document).ready(function() {
    "use strict";
    $('ul.navbar-nav > li').click(function(e) {
      e.preventDefault();
      $('ul.navbar-nav > li').removeClass('active');
      $(this).addClass('active');
    });
});

// kuula
KuulaPlayerAPI.addEventListener("frameloaded", function(e) {
    e.data.posts.forEach(function(post) {
		var audio  = document.getElementById('audio');
        var ref   = document.getElementById('ref');
        var was   = document.getElementById('was');
        var ac    = document.getElementById('ac');
        var ha    = document.getElementById('ha');
        var sl    = document.getElementById('sl');
        var stage = document.getElementById('stage');

		audio.addEventListener('click', function() {
			KuulaPlayerAPI.load(e.frame, '73hmb');
		});

        ref.addEventListener('click', function() {
			KuulaPlayerAPI.load(e.frame, '73hmZ'); 
		});

        was.addEventListener('click', function() {
			KuulaPlayerAPI.load(e.frame, '73hmK');
		});

        ac.addEventListener('click', function() {
			KuulaPlayerAPI.load(e.frame, '73hmc');
		});

        ha.addEventListener('click', function() {
			KuulaPlayerAPI.load(e.frame, '73hmX');
		});

        sl.addEventListener('click', function() {
			KuulaPlayerAPI.load(e.frame, '73hmJ');
		});

        stage.addEventListener('click', function() {
			KuulaPlayerAPI.load(e.frame, '73hmv');
		});

	});
});



