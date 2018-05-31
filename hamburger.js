$(window).resize(function() {
        location.reload();
});

if($(window).width() < 992){

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
  
};





