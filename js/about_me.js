let topin = document.querySelector('.topin');
let report = document.querySelectorAll('.report');
let topper = document.querySelector('.topper');
topin.addEventListener("click", function(e) {
    topper.classList.toggle("votet");
});





$('.responsive').slick({
  dots: false,
  infinite: false,
  slidesToShow: 4,
  slidesToScroll: 4,
  variableWidth: true,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});			

