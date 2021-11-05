jQuery(window).load(function () {
  $(document).ready(function () {
    var progressbar = $('#progressbar'),
      max = progressbar.attr('max'),
      time = (100 / max) * 10,
      value = progressbar.val();
    var loading = function () {
      value += 1;
      addValue = progressbar.val(value);
      if (value == max) {
        clearInterval(animate);
        $(".loader").fadeOut("slow"); //.delay(1500)
      }
    };
    var animate = setInterval(function () {
      loading();
    }, time);
  });
});

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
document.querySelector('#btnMenus ').addEventListener('click', e => {
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
        prevArrow: '<button type="button" class="arrows-position slider-principal-prev"><svg width="12" height="32" viewBox="0 0 12 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 1L1 16L11 31" stroke="#F2F2F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
        nextArrow: '<button type="button" class="arrows-position slider-principal-next"><svg width="12" height="32" viewBox="0 0 12 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 31L11 16L1 1" stroke="#F2F2F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
      }
    },
  ]
});

$('.img-principal').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.galeria'
});
$('.galeria').slick({
  vertical: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.img-principal',
  dots: false,
  focusOnSelect: true
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

