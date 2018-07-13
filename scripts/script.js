$('.popup').hide();
$('#contact').hide();
$('#product').hide();

var home = $('#home');
var serwis = $('#serwis');
var relokacja = $('#relokacja');
var oferta = $('#oferta');

serwis.hide();
relokacja.hide();
oferta.hide();
$('#serwis .machine').hide();
$('#relokacja .machine').hide();
$('#oferta .machine').hide();

$('#serwis .rotech-big-text').css({marginLeft: '-100px', opacity: 0});
$('#relokacja .rotech-big-text').css({marginLeft: '-100px', opacity: 0});
$('#oferta .rotech-big-text').css({marginLeft: '-100px', opacity: 0});
$('#serwis .text').css({left: '-30px', opacity: 0});
$('#relokacja .text').css({left: '-30px', opacity: 0});
$('#oferta .text').css({left: '-30px', opacity: 0});




/* ---- particles.js config ---- */

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 150,
      "density": {
        "enable": true,
        "value_area": 1122.388442605866
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.035,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 0.5684540486109415,
        "opacity_min": 0.15,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 19.24094473038627,
      "direction": "top-right",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});


particlesJS("particles-js-2", {
  "particles": {
    "number": {
      "value": 10,
      "density": {
        "enable": true,
        "value_area": 1122.388442605866
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.10,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 0.40603860615067255,
        "opacity_min": 0.05,
        "sync": false
      }
    },
    "size": {
      "value": 20.042650760819036,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 10,
      "direction": "top-right",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": true,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

var licznik = 0;
var kierunek = 'down';
var l2 = 0, l3 = 0;



function detectswipe(el, func) {
      swipe_det = new Object();
      swipe_det.sX = 0;
      swipe_det.sY = 0;
      swipe_det.eX = 0;
      swipe_det.eY = 0;
      var min_x = 120;  //min x swipe for horizontal swipe
      var max_x = 140;  //max x difference for vertical swipe
      var min_y = 40;  //min y swipe for vertical swipe
      var max_y = 50;  //max y difference for horizontal swipe
      var direc = "";
      ele = document.getElementsByTagName('body')[0];
    
      ele.addEventListener('touchstart',function(e){
        var t = e.touches[0];
        swipe_det.sX = t.screenX; 
        swipe_det.sY = t.screenY;   
      },false);
      ele.addEventListener('touchmove',function(e){
        e.preventDefault();
        var t = e.touches[0];
        swipe_det.eX = t.screenX; 
        swipe_det.eY = t.screenY;    
      },false);
      ele.addEventListener('touchend',function(e){
        //horizontal detection
        if ((((swipe_det.eX - min_x > swipe_det.sX) || (swipe_det.eX + min_x < swipe_det.sX)) && ((swipe_det.eY < swipe_det.sY + max_y) && (swipe_det.sY > swipe_det.eY - max_y)))) {
          if(swipe_det.eX > swipe_det.sX) direc = "r";
          else direc = "l";
        }
        //vertical detection
        /*if ((((swipe_det.eY - min_y > swipe_det.sY) || (swipe_det.eY + min_y < swipe_det.sY)) && ((swipe_det.eX < swipe_det.sX + max_x) && (swipe_det.sX > swipe_det.eX - max_x)))) {
          if(swipe_det.eY > swipe_det.sY) direc = "d";
          else direc = "u";
        }*/
    
        if (direc != "") {
          if(typeof func == 'function') func(el,direc);
        }
        direc = "";
      },false);
    }

    function myfunction(el, d) {
      //alert("you swiped on element with id '"+el+"' to "+d+" direction");
        if ((d=='r') || (d=='u')){
            l3 = licznik - 1;
             if (l3 == -1) return false;

             kierunek = 'up';
             licznik--;

             if ((licznik == 0) && (kierunek == 'up')) {
                serwisUp();
             }
             if ((licznik == 1) && (kierunek == 'up')) {
                relokacjaUp();
             }
             if ((licznik == 2) && (kierunek == 'up')) {
                ofertaUp();
             }
            return false;
        }
        if ((d=='l') || (d=='d')) {
            l2 = licznik + 1;
             if (l2 == 4) return false;

             licznik++;

             kierunek = 'down';


             if ((licznik == 1) && (kierunek == 'down')) {
                homeDown();
             }
             if ((licznik == 2) && (kierunek == 'down')) {
                serwisDown();
             }
             if ((licznik == 3) && (kierunek == 'down')) {
                relokacjaDown();
             }
            return false;
        }
    }

if(window.innerHeight > window.innerWidth) {
    detectswipe('body', myfunction);
}


if (window.addEventListener)
{
    // IE9, Chrome, Safari, Opera
    window.addEventListener("mousewheel", throttle(callback, 500));
    // Firefox
    window.addEventListener("DOMMouseScroll", throttle(callback, 500));
}
// IE 6/7/8
else
{
    window.attachEvent("onmousewheel", throttle(callback, 500));
    
}

function throttle(fn, wait) {
  var time = Date.now();
  return function() {
    if ((time + wait - Date.now()) < 0) {
      fn();
      time = Date.now();
    }
  }
}

function callback() {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    
        
    var e = window.event || e;
    var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail || e.deltaY)));

    if (delta < 0){
        //console.log("DOWN");
        l2 = licznik + 1;
         if (l2 == 4) return false;

         licznik++;

         kierunek = 'down';


         if ((licznik == 1) && (kierunek == 'down')) {
            homeDown();
         }
         if ((licznik == 2) && (kierunek == 'down')) {
            serwisDown();
         }
         if ((licznik == 3) && (kierunek == 'down')) {
            relokacjaDown();
        }
        return false;
    }else if (delta > 0){
        //console.log("UP");
        l3 = licznik - 1;
         if (l3 == -1) return false;

         kierunek = 'up';
         licznik--;

         if ((licznik == 0) && (kierunek == 'up')) {
            serwisUp();
         }
         if ((licznik == 1) && (kierunek == 'up')) {
            relokacjaUp();
         }
         if ((licznik == 2) && (kierunek == 'up')) {
            ofertaUp();
         }
        return false;
    }
}
 
//Firefox
 $('body').bind('DOMMouseScroll', function(e){
     if(e.originalEvent.detail > 0) {
         l2 = licznik + 1;
         if (l2 == 4) return false;
         
         licznik++;
         
         kierunek = 'down';
         
         
         if ((licznik == 1) && (kierunek == 'down')) {
            homeDown();
         }
         if ((licznik == 2) && (kierunek == 'down')) {
            serwisDown();
         }
         if ((licznik == 3) && (kierunek == 'down')) {
            relokacjaDown();
         }
     } else {
         l3 = licznik - 1;
         if (l3 == -1) return false;
         
         kierunek = 'up';
         licznik--;
         
         if ((licznik == 0) && (kierunek == 'up')) {
            serwisUp();
         }
         if ((licznik == 1) && (kierunek == 'up')) {
            relokacjaUp();
         }
         if ((licznik == 2) && (kierunek == 'up')) {
            ofertaUp();
         }
     }
     return false;
 });

/* left */

$('.swipe-left-home').on('click', function() {
    l3 = licznik - 1;
     if (l3 == -1) return false;

     kierunek = 'up';
     licznik--;

    serwisUp();
});
$('.swipe-left-serwis').on('click', function() {
    l3 = licznik - 1;
     if (l3 == -1) return false;

     kierunek = 'up';
     licznik--;

    relokacjaUp();
});
$('.swipe-left-oferta').on('click', function() {
    l3 = licznik - 1;
     if (l3 == -1) return false;

     kierunek = 'up';
     licznik--;

    ofertaUp();
});

/* right */

$('.swipe-home').on('click', function() {
    l2 = licznik + 1;
     if (l2 == 4) return false;

     licznik++;

     kierunek = 'down';
    
    homeDown();
});
$('.swipe-serwis').on('click', function() {
    l2 = licznik + 1;
     if (l2 == 4) return false;

     licznik++;

     kierunek = 'down';
    serwisDown();
});
$('.swipe-relokacja').on('click', function() {
    l2 = licznik + 1;
     if (l2 == 4) return false;

     licznik++;

     kierunek = 'down';
    relokacjaDown();
});

$('.about-us').on('click', function() {
        licznik = 0;
    
         $('#serwis .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#serwis .machine').fadeOut(500);
         $('#serwis .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#serwis .dot:nth-child(2)').removeClass('active', {duration:1000});
    $('.message-btn').removeClass('btn-serwis btn-relokacja btn-sprzedaz').addClass('btn-home', {duration:500});
    
         $('#relokacja .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#relokacja .machine').fadeOut(500);
         $('#relokacja .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#relokacja .dot:nth-child(3)').removeClass('active', {duration:1000});
         relokacja.delay(500).hide();
    
         $('#oferta .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#oferta .machine').fadeOut(500);
         $('#oferta .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#oferta .dot:nth-child(4)').removeClass('active', {duration:1000});
         oferta.delay(500).hide(0);
    
         home.show();
         $('#home .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#home .machine').delay(500).fadeIn(500);
         $('#home .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         //$('#home .dot:nth-child(1)').addClass('active', {duration:1000});
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#7E300B,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
         if(window.innerHeight > window.innerWidth) {
             // mobile - close menu
         $('header').removeClass('header-mobile-active');
         $('.btn-menu-mobile-close').css({display: 'none'});
        $('header ul li:nth-child(1)').css({display: 'block'});
        $('header ul li:nth-child(2)').css({display: 'none'});
        $('header ul li:nth-child(3)').css({display: 'none'});
        $('header ul li:nth-child(4)').css({display: 'none'});
        $('header ul li:nth-child(5)').css({display: 'none'});
         }
});
$('.do-serwisu').on('click', function() {
        licznik = 1;
    
         $('#home .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#home .machine').fadeOut(500);
         $('#home .text').animate({left: '-30px', opacity: 0}, 500);
        $('.message-btn').removeClass('btn-home btn-relokacja btn-sprzedaz').addClass('btn-serwis', {duration:500});
        home.delay(500).hide();
    
         $('#relokacja .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#relokacja .machine').fadeOut(500);
         $('#relokacja .text').animate({left: '-30px', opacity: 0}, 500);
         relokacja.delay(500).hide();
    
         $('#oferta .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#oferta .machine').fadeOut(500);
         $('#oferta .text').animate({left: '-30px', opacity: 0}, 500);
         oferta.delay(500).hide(0);
    
         serwis.show();
         $('#serwis .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#serwis .machine').delay(500).fadeIn(500);
         $('#serwis .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#277E0B,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
         if(window.innerHeight > window.innerWidth) {
             // mobile - close menu
         $('header').removeClass('header-mobile-active');
         $('.btn-menu-mobile-close').css({display: 'none'});
        $('header ul li:nth-child(1)').css({display: 'block'});
        $('header ul li:nth-child(2)').css({display: 'none'});
        $('header ul li:nth-child(3)').css({display: 'none'});
        $('header ul li:nth-child(4)').css({display: 'none'});
        $('header ul li:nth-child(5)').css({display: 'none'});
         }
});
$('.do-relokacji').on('click', function() {
        licznik = 2;
    
         $('#home .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#home .machine').fadeOut(500);
         $('#home .text').animate({left: '-30px', opacity: 0}, 500);
        $('.message-btn').removeClass('btn-home btn-serwis btn-sprzedaz').addClass('btn-relokacja', {duration:500});
        home.delay(500).hide();
    
         $('#serwis .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#serwis .machine').fadeOut(500);
         $('#serwis .text').animate({left: '-30px', opacity: 0}, 500);
         serwis.delay(500).hide();
    
         $('#oferta .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#oferta .machine').fadeOut(500);
         $('#oferta .text').animate({left: '-30px', opacity: 0}, 500);
         oferta.delay(500).hide(0);
    
         relokacja.show();
         $('#relokacja .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#relokacja .machine').delay(500).fadeIn(500);
         $('#relokacja .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#380B7E,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
         if(window.innerHeight > window.innerWidth) {
             // mobile - close menu
         $('header').removeClass('header-mobile-active');
         $('.btn-menu-mobile-close').css({display: 'none'});
        $('header ul li:nth-child(1)').css({display: 'block'});
        $('header ul li:nth-child(2)').css({display: 'none'});
        $('header ul li:nth-child(3)').css({display: 'none'});
        $('header ul li:nth-child(4)').css({display: 'none'});
        $('header ul li:nth-child(5)').css({display: 'none'});
         }
});
$('.do-sprzedazy').on('click', function() {
        licznik = 4;
    
         $('#home .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#home .machine').fadeOut(500);
         $('#home .text').animate({left: '-30px', opacity: 0}, 500);
        $('.message-btn').removeClass('btn-home btn-relokacja btn-serwis').addClass('btn-sprzedaz', {duration:500});
        home.delay(500).hide();
    
         $('#serwis .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#serwis .machine').fadeOut(500);
         $('#serwis .text').animate({left: '-30px', opacity: 0}, 500);
         serwis.delay(500).hide();
    
         $('#relokacja .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#relokacja .machine').fadeOut(500);
         $('#relokacja .text').animate({left: '-30px', opacity: 0}, 500);
         relokacja.delay(500).hide(0);
    
         oferta.show();
         $('#oferta .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#oferta .machine').delay(500).fadeIn(500);
         $('#oferta .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#044A86,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
         if(window.innerHeight > window.innerWidth) {
             // mobile - close menu
         $('header').removeClass('header-mobile-active');
         $('.btn-menu-mobile-close').css({display: 'none'});
        $('header ul li:nth-child(1)').css({display: 'block'});
        $('header ul li:nth-child(2)').css({display: 'none'});
        $('header ul li:nth-child(3)').css({display: 'none'});
        $('header ul li:nth-child(4)').css({display: 'none'});
        $('header ul li:nth-child(5)').css({display: 'none'});
         }
});







function homeDown() {
    $('#home .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
     $('#home .machine').fadeOut(500);
     $('#home .text').animate({left: '-30px', opacity: 0}, 500);
     //$('#home .dot:nth-child(1)').removeClass('active', {duration:1000});
    $('.message-btn').removeClass('btn-home').addClass('btn-serwis', {duration:500});
     home.delay(500).hide(0);
     serwis.delay(500).show(0);
     $('#serwis .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
     $('#serwis .machine').delay(500).fadeIn(500);
    /* $('#serwis .text').delay(500).fadeIn(500);*/
     $('#serwis .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
     //$('#serwis .dot:nth-child(2)').addClass('active', {duration:1000});
     /*$('body').css('background', 'linear-gradient(217deg, rgba(20,20,20,1), rgba(255,0,0,0) 70%), linear-gradient(127deg, rgba(60,60,60,1), rgba(48,54,62,0) 50%), linear-gradient(20deg, rgba(132,175,59,1), rgba(132,175,59,0) 90%)');

     if(window.innerHeight > window.innerWidth) {
         $('body').css('background', 'linear-gradient(190deg, #30363f 27%, #1F2515)');
     }*/
     //$('#particles-js-2').css('background-image', 'url("img/bg-2.png")');
    $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#277E0B,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
}

function serwisDown() {
    //scroll down
         /*$('#serwis .rotech-big-text').animate({marginLeft: '-200px', opacity: 0});*/
         $('#serwis .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#serwis .machine').fadeOut(500);
         /*$('#serwis .text').fadeOut(500);*/
         $('#serwis .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#serwis .dot:nth-child(2)').removeClass('active', {duration:1000});
    $('.message-btn').removeClass('btn-serwis').addClass('btn-relokacja', {duration:500});
         serwis.delay(500).hide(0);
         relokacja.delay(500).show(0);
         /*$('#relokacja .rotech-big-text').delay(500).fadeIn(500);*/
         $('#relokacja .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#relokacja .machine').delay(500).fadeIn(500);
         //$('#relokacja .text').delay(500).fadeIn(500);
         $('#relokacja .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         //$('#relokacja .dot:nth-child(3)').addClass('active', {duration:1000});
         /*$('body').css('background', 'linear-gradient(217deg, rgba(20,20,20,1), rgba(255,0,0,0) 70%), linear-gradient(127deg, rgba(60,60,60,1), rgba(48,54,62,0) 50%), linear-gradient(20deg, rgba(111,75,231,1), rgba(111,75,231,0) 90%)');
         if(window.innerHeight > window.innerWidth) {
             $('body').css('background', 'linear-gradient(190deg, #30363f 27%, #1C172B)');
         }*/
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#380B7E,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
}
function serwisUp() {
    //scroll up
         $('#serwis .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#serwis .machine').fadeOut(500);
         /*$('#serwis .text').fadeOut(500);*/
         $('#serwis .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#serwis .dot:nth-child(2)').removeClass('active', {duration:1000});
    $('.message-btn').removeClass('btn-serwis').addClass('btn-home', {duration:500});
         serwis.delay(500).hide(0);
         home.delay(500).show(0);
         /*$('#home .rotech-big-text').delay(500).fadeIn(500);*/
         $('#home .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#home .machine').delay(500).fadeIn(500); 
         $('#home .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         //$('#home .dot:nth-child(1)').addClass('active', {duration:1000});
         /*$('body').css('background', 'linear-gradient(217deg, rgba(20,20,20,1), rgba(255,0,0,0) 70%), linear-gradient(127deg, rgba(60,60,60,1), rgba(48,54,62,0) 50%), linear-gradient(20deg, rgba(240,130,12,1), rgba(240,130,12,0) 90%)');
         if(window.innerHeight > window.innerWidth) {
             $('body').css('background', 'linear-gradient(190deg, #30363f 27%, #572d15)');
         }*/
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#7E300B,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
}
function relokacjaDown() {
    //scroll down
         $('#relokacja .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#relokacja .machine').fadeOut(500);
         /*$('#relokacja .text').fadeOut(500);*/
         $('#relokacja .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#relokacja .dot:nth-child(3)').removeClass('active', {duration:1000});
    $('.message-btn').removeClass('btn-relokacja').addClass('btn-sprzedaz', {duration:500});
         relokacja.delay(500).hide(0);
         oferta.delay(500).show(0);
         /*$('#oferta .rotech-big-text').delay(500).fadeIn(500);*/
         $('#oferta .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#oferta .machine').delay(500).fadeIn(500);
         $('#oferta .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         //$('#oferta .text').delay(500).fadeIn(500);
         //$('#oferta .dot:nth-child(4)').addClass('active', {duration:1000});
         /*$('body').css('background', 'linear-gradient(217deg, rgba(20,20,20,1), rgba(255,0,0,0) 70%), linear-gradient(127deg, rgba(60,60,60,1), rgba(48,54,62,0) 50%), linear-gradient(20deg, rgba(35,160,228,1), rgba(35,160,228,0) 90%)');
         if(window.innerHeight > window.innerWidth) {
             $('body').css('background', 'linear-gradient(190deg, #30363f 27%, #162731)');
         }*/
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#044A86,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
}
function relokacjaUp() {
    //scroll up
         $('#relokacja .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#relokacja .machine').fadeOut(500);
         /*$('#serwis .text').fadeOut(500);*/
         $('#relokacja .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#serwis .dot:nth-child(2)').removeClass('active', {duration:1000});
    $('.message-btn').removeClass('btn-relokacja').addClass('btn-serwis', {duration:500});
         relokacja.delay(500).hide(0);
         serwis.delay(500).show(0);
         /*$('#home .rotech-big-text').delay(500).fadeIn(500);*/
         $('#serwis .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#serwis .machine').delay(500).fadeIn(500); 
         $('#serwis .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         //$('#home .dot:nth-child(1)').addClass('active', {duration:1000});
         /*$('body').css('background', 'linear-gradient(217deg, rgba(20,20,20,1), rgba(255,0,0,0) 70%), linear-gradient(127deg, rgba(60,60,60,1), rgba(48,54,62,0) 50%), linear-gradient(20deg, rgba(240,130,12,1), rgba(240,130,12,0) 90%)');
         if(window.innerHeight > window.innerWidth) {
             $('body').css('background', 'linear-gradient(190deg, #30363f 27%, #572d15)');
         }*/
          $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#277E0B,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
}
function ofertaUp() {
    //scroll up
         /*$('#oferta .rotech-big-text').fadeOut(500);*/
         $('#oferta .rotech-big-text').animate({marginLeft: '-100px', opacity: 0});
         $('#oferta .machine').fadeOut(500);
         /*$('#oferta .text').fadeOut(500);*/
         $('#oferta .text').animate({left: '-30px', opacity: 0}, 500);
         //$('#oferta .dot:nth-child(4)').removeClass('active', {duration:1000});
    $('.message-btn').removeClass('btn-sprzedaz').addClass('btn-relokacja', {duration:500});
         oferta.delay(500).hide(0);
         relokacja.delay(500).show(0);
         /*$('#relokacja .rotech-big-text').delay(500).fadeIn(500);*/
         $('#relokacja .rotech-big-text').delay(750).animate({marginLeft: '0', opacity: 1});
         $('#relokacja .machine').delay(500).fadeIn(500);
         $('#relokacja .text').delay(750).animate({left: '0', opacity: 0.7}, 500);
         //$('#relokacja .dot:nth-child(3)').addClass('active', {duration:1000});
         /*$('body').css('background', 'linear-gradient(217deg, rgba(20,20,20,1), rgba(255,0,0,0) 70%), linear-gradient(127deg, rgba(60,60,60,1), rgba(48,54,62,0) 50%), linear-gradient(20deg, rgba(111,75,231,1), rgba(111,75,231,0) 90%)');
         if(window.innerHeight > window.innerWidth) {
             $('body').css('background', 'linear-gradient(190deg, #30363f 27%, #1C172B)');
         }*/
         $('#particles-js-2')
        .animate({opacity: 0.2}, 500, function() {
            $(this)
                .css({'background-image': 'radial-gradient(circle at 37% 122%,#380B7E,#0E0E0E 55%)'})
                .animate({opacity: 1}, 500);
        });
}

//##################

/* CHANGE MESSAGE ICON ON MOBILE (portrait) */
if(window.innerHeight > window.innerWidth){
    //alert('ok');
    $('.message-btn img').attr('src', 'img/phone.svg');
    
    $('.message-btn img').on('click', function() {
        $('.message-btn img').attr("href", "tel:600");
    });
};
    



/* OFERTA */




$('.btn-popup').on('click', function() {
    $('.popup').css({'z-index': 100});
    $('.popup').fadeIn();
});

$('.btn-popup-close').on('click', function() {
    $('.popup').fadeOut();
});

/* CONTACT */

$('.open-contact').on('click', function() {
    $('#contact').fadeIn();
    $('#contact').css({'z-index': 999999999999999999});
});

$('.btn-popup-contact-close').on('click', function() {
    $('#contact').fadeOut();
});


/*mobile */
$('.btn-menu-mobile-close').on('click', function() {
    $('header').removeClass('header-mobile-active');
    $('.btn-menu-mobile-close').css({display: 'none'});
    $('header ul li:nth-child(1)').css({display: 'block'});
    $('header ul li:nth-child(2)').css({display: 'none'});
    $('header ul li:nth-child(3)').css({display: 'none'});
    $('header ul li:nth-child(4)').css({display: 'none'});
    $('header ul li:nth-child(5)').css({display: 'none'});
});
$('.menu-mobile').on('click', function() {
    $('header').addClass('header-mobile-active');
    $('.btn-menu-mobile-close').css({display: 'block'});
    $('header ul li:nth-child(1)').css({display: 'none'});
    $('header ul li:nth-child(2)').css({display: 'block'});
    $('header ul li:nth-child(3)').css({display: 'block'});
    $('header ul li:nth-child(4)').css({display: 'block'});
    $('header ul li:nth-child(5)').css({display: 'block'});
});

/* PRODUCT ICONS */

/*$('.menu-icon').on('click', function() {
    $('#product').fadeOut();
    $('.popup').fadeIn();
});

$('.product-arrow-left').on('click', function() {
    $('#product').fadeOut();
    $('.popup').fadeOut();
});*/






/*
var parallax = $('#scene').parallax();

var speed = 800;

for (var i = 1; i < 6; i++) {
  twinkleLoop(i);
};

function twinkleLoop(i) {
  var duration = Math.random() * 5 + 3;

  duration = duration - (495 - speed) / 100;
  twinkle(i, duration);

  setTimeout(function () {
    twinkleLoop(i);
  }, duration * 1000);
}

function twinkle(id, duration) {
  var top = Math.floor(Math.random() * 85) + 0 + '%';
  var left = Math.floor(Math.random() * 85) + 0 + '%';

  $('#speck' + id).remove();
  $('#specks').append("<div class='speck' id='speck" + id + "'></div>");
  $('#speck' + id).css({
    'top': top,
    'left': left,
    'animation-duration': duration + 's',
    'animation-timing-function': 'cubic-bezier(0.250, 0.250, 0.750, 0.750)',
    'animation-name': 'twinkle'
  });
};*/



/* VALIDATE FORM */

function validateForm() {
    var fname = document.forms["contact-form"]["fname"].value;
    var femail = document.forms["contact-form"]["femail"].value;
    var ftextmessage = document.forms["contact-form"]["ftextmessage"].value;
    
    if ((fname == "" || !isNaN(fname)) &&
        (femail == "" || !isNaN(femail)) &&
        (ftextmessage == "" || !isNaN(ftextmessage)))
    {
        $("#name").addClass('input-error');
        $("#email").addClass('input-error');
        $("#message").addClass('input-error');
        
        return false;
    }
    
    else if ((fname == "" || !isNaN(fname)) &&
        (femail == "" || !isNaN(femail)))
    {
        $("#name").addClass('input-error');
        $("#email").addClass('input-error');
        $("#message").removeClass('input-error');
        
        return false;
    }
    
    else if ((fname == "" || !isNaN(fname)) &&
        (ftextmessage == "" || !isNaN(ftextmessage)))
    {
        $("#name").addClass('input-error');
        $("#message").addClass('input-error');
        $("#email").removeClass('input-error');
        return false;
    }
    
    else if ((femail == "" || !isNaN(femail)) &&
        (ftextmessage == "" || !isNaN(ftextmessage)))
    {
        $("#email").addClass('input-error');
        $("#message").addClass('input-error');
        $("#name").removeClass('input-error');
        return false;
    }
    
    
    else if ((fname == "") || (!isNaN(fname))) {
        
        $("#name").addClass('input-error');
        $("#email").removeClass('input-error');
        $("#message").removeClass('input-error');
        return false;
    }
    
    else if ((femail == "") || (!isNaN(femail))) {
        
        $("#email").addClass('input-error');
        $("#name").removeClass('input-error');
        $("#message").removeClass('input-error');
        return false;
    }
    else if ((ftextmessage == "") || (!isNaN(ftextmessage))) {
        
        $("#email").removeClass('input-error');
        $("#name").removeClass('input-error');
        $("#message").addClass('input-error');
        return false;
    }
    
    else if ((ftextmessage == "") || (!isNaN(ftextmessage))) {
        
        $("#message").addClass('input-error');
        $("#email").removeClass('input-error');
        $("#name").removeClass('input-error');
        return false;
    }
    else if ((ftextmessage != "") || (isNaN(ftextmessage))) {
        
        $("#message").removeClass('input-error');
        
        //return false;
    }
    else if ((fname != "") || (isNaN(fname))) {
        
        $("#name").removeClass('input-error');
        
        //return false;
    }
    else if ((femail != "") || (isNaN(femail))) {
        
        $("#email").removeClass('input-error');
        
        //return false;
    }
}


