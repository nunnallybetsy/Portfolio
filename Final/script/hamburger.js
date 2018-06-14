

	//to fix issue that toggle adds style(hides) to nav
	$(window).resize(function () {
	  if (window.innerWidth > 992) {
	    $('nav ul a').click(function () {
	      $('.menu-toggle').toggleClass('on');
	      $('.menu-section').toggleClass('on');
	      $('nav ul').toggleClass('hidden');

	    });
	  };
	});


	$(document).ready(function () {
	  $('.menu-toggle').click(function (e) {
	    $(this).toggleClass('on');
	    $('.menu-section').toggleClass('on');
	    $('nav ul').toggleClass('hidden');

	    e.preventDefault();
	  });


	  $('nav ul a').click(function () {
	    $('.menu-toggle').toggleClass('on');
	    $('.menu-section').toggleClass('on');
	    $('nav ul').toggleClass('hidden');


	  });

	});







