'use strict'

const menuSize = '100%';

let open = false;

document.querySelector('#btnMenu').addEventListener('click', e => {
  open = !open;
  toggleMenu();
})

document.querySelector('#btnClose').addEventListener('click', e => {
  open = false;
  toggleMenu();
})
document.querySelector('#btnMenus').addEventListener('click', e => {
  open = false;
  toggleMenu();
})
document.querySelector('.background-slider').addEventListener('click', e => {
  open = false;

  toggleMenu();
})

function toggleMenu() {
  document.querySelector('.background-slider').style.display = "block";
  if (open) {
    document.querySelector('#slideMenu').style.left = "0%";
    document.querySelector('body').style.overflow = "hidden";
    return;
  }
  document.querySelector('.background-slider').style.display = "none";
  document.querySelector('body').style.overflow = "auto";
  document.querySelector('#slideMenu').style.left = `-${menuSize}`;
}

$('.slider-principal').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: '<button type="button" class="arrows-position slider-principal-prev"><img class="img-fluid" src="img/arrowleft-p.png"></button>',
  nextArrow: '<button type="button" class="arrows-position slider-principal-next"><img class="img-fluid" src="img/arrowright-p.png"></button>',
  dots: true,
  dotsClass: 'dots-slider-principal',
  enterMode: true,
  variableWidth: false
});

$('.slider-produto').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: '<button type="button" class="arrows-position slider-principal-prev"><svg width="22" height="52" viewBox="0 0 22 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999999 51L21 26L0.999999 1" stroke="#336699" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
  nextArrow: '<button type="button" class="arrows-position slider-principal-next"><svg width="22" height="52" viewBox="0 0 22 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999999 51L21 26L0.999999 1" stroke="#336699" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
  dots: false, responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      }
    },
  ]
});





/* Scroll Top*/

var btn = $('#buttonTop');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});



/* Scroll Top*/