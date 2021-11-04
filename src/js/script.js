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
document.querySelector('.background-slider').addEventListener('click', e => {
    open = false;

    toggleMenu();
})

function toggleMenu() {
    document.querySelector('.background-slider').style.display = "block";
    if (open) {
        document.querySelector('#slideMenu').style.left = "0%";
        return;
    }
    document.querySelector('.background-slider').style.display = "none";
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
});

$('.slider-produto').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<button type="button" class="arrows-position slider-principal-prev"><img class="img-fluid" src="img/arrowleft-produto.png"></button>',
    nextArrow: '<button type="button" class="arrows-position slider-principal-next"><img class="img-fluid" src="img/arrowrigth-produto.png"></button>',
    dots: false,
});

var basicScrollTop = function () {  
    // The button
    var btnTop = document.querySelector('#btnUp');
    // Reveal the button
    var btnReveal = function () { 
      var position = document.querySelector('#position');
          position.innerHTML = window.scrollY + 'px';
      if (window.scrollY >= 300) {
        btnTop.classList.add('is-visible');
      } else {
        btnTop.classList.remove('is-visible');
      }    
    }  
    // Smooth scroll top
    // Thanks to => http://stackoverflow.com/a/22610562
    var TopscrollTo = function () {
      if(window.scrollY!=0) {
        setTimeout(function() {
          window.scrollTo(0,window.scrollY-30);
          TopscrollTo();
        }, 5);
      }
    }
    // Listeners
    window.addEventListener('scroll', btnReveal);
    btnTop.addEventListener('click', TopscrollTo);  
      
  };
  basicScrollTop();
  
  
  
  