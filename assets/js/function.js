
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
	document.querySelector("#audio").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 100);
        KuulaPlayerAPI.setZoom(e.frame, -15);
	});

    document.querySelector("#ref").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 135);
        KuulaPlayerAPI.setZoom(e.frame, -15);
	});

    document.querySelector("#was").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 165);
        KuulaPlayerAPI.setZoom(e.frame, -15);
	});

    document.querySelector("#ac").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 195);
        KuulaPlayerAPI.setZoom(e.frame, -15);
	});

    document.querySelector("#ha").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 225);
        KuulaPlayerAPI.setZoom(e.frame, -15);
	});

    document.querySelector("#sl").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 255);
        KuulaPlayerAPI.setZoom(e.frame, -15);
	});

    document.querySelector("#stage").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 0);
        KuulaPlayerAPI.setZoom(e.frame, 0);
	});

    document.querySelector("#games").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, -60);
        KuulaPlayerAPI.setZoom(e.frame, -5);
	});

    document.querySelector("#photo").addEventListener("click", function() {
		KuulaPlayerAPI.setHeading(e.frame, 60);
        KuulaPlayerAPI.setZoom(e.frame, -5);
	});


});
