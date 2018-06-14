var slideIndex = 1;
var t;

showSlides(slideIndex);

function plusSlides(n) {    
  slideIndex = slideIndex + n;
  clearTimeout(t);
  showSlides(slideIndex);
  console.log(slideIndex);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

  var i;
  var slides = document.getElementsByClassName("mySlides");

  if (n == undefined) {
    n = ++slideIndex;
  }

  if (n > slides.length) {
    slideIndex = 1
  }

  if (n < 1) {
    slideIndex = slides.length
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

   var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  slides[slideIndex - 1].style.display = "block";
  t = setTimeout(showSlides, 3000);
}


