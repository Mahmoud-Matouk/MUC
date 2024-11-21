import Swiper from "swiper/bundle";
import "swiper/swiper-bundle.css";
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles



// ..
AOS.init();
window.Swiper = Swiper;


window.addEventListener("scroll", () => initNavbar());

window.initNavbar = function () {
    const navbar = document.getElementById("nav");

    const nav_classes = navbar?.classList;

    if (document.documentElement.scrollTop >= 100) {
        if (!nav_classes?.contains("navscroll"))
            nav_classes?.toggle("navscroll");
    } else {
        if (nav_classes?.contains("navscroll"))
            nav_classes?.toggle("navscroll");
    }
};

const swiper = new Swiper(".swiper", {
    loop: true,
    autoplay: false,
    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 16,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 16,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 16,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 16,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination:{
        el:".swiper-pagination",
    }
});
const swiper_icons = new Swiper(".swiper-icons", {
    loop: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    breakpoints: {
        1024: {
            slidesPerView: 8,
            spaceBetween: 32,
        },
        768: {
            slidesPerView: 6,
            spaceBetween: 16,
        },
        640: {
            slidesPerView: 6,
            spaceBetween: 16,
        },
        320: {
            slidesPerView: 4,
            spaceBetween: 16,
        },
    }
});
const swiper3 = new Swiper(".swiper3", {
    loop: true,
    autoplay: true,
    breakpoints: {
        1024: {
            slidesPerView: 6,
            spaceBetween: 4,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 4,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 4,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 4,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const swiper2 = new Swiper(".swiper2", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 16,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 16,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 16,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 16,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

window.scrollToElement = function (id) {
    const element = document.getElementById(id);
    const headerOffset = 88;
    let offsetPosition = 0;

    if (element) {
        const elementPosition = element.getBoundingClientRect().top;
        offsetPosition = elementPosition + window.pageYOffset - headerOffset;
    }

    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
    });
};

window.whatsapp = function (message = "", number) {
    const whatsapp = new CustomEvent("event:whatsapp");
    document.dispatchEvent(whatsapp);

    window.open(
        `https://wa.me/966${number}?text=${encodeURIComponent(message)}`,
    );
};

window.callus = function (number) {
    const call = new CustomEvent("event:call");
    document.dispatchEvent(call);

    window.open(`tel:+966${number}`);
};

window.mailto = function (email) {
    const mail = new CustomEvent("event:email");
    document.dispatchEvent(mail);

    window.open(`mailto:${email}`);
};

window.register = function () {
    const register = new CustomEvent("event:register");
    document.dispatchEvent(register);

    window.open(
        `${config.public.dashURL}/book/join?_lang=${locale.value}&_source=${source.value}`,
        "_blank",
    );
};

window.joinNow = function (packge = "", email = "") {
    const join = new CustomEvent("event:join");
    document.dispatchEvent(join);

    const utms = window.location.search;

    let link = `${config.public.dashURL}/join?_lang=${locale.value}`;

    if (packge) {
        link += `&packge=${packge}`;
    }

    window.open(link, `_blank`);
};

window.joinTeachers = function () {
    const join = new CustomEvent("event:joinTeachers");
    document.dispatchEvent(join);

    let link = `${config.public.dashURL}/apply/teacher`;

    window.open(link, `_blank`);
};




// gsap.from("#progress2", {
// scrollTrigger: {
//     trigger: "#progress2",
//     scrub: true,
//     start: "top top",
//     end: "+=900",
//     markers: true,
//     onEnter: ({progress, direction, isActive}) =>{ console.log(progress, direction, isActive)
//     },

// },
// scaleY: 0,
// transformOrigin: "top center", 
// ease: "none"
// });



import { gsap } from "gsap";
    
import { ScrollTrigger } from "gsap/ScrollTrigger";
import gasp from "gasp";
gsap.registerPlugin(ScrollTrigger);

var tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".progress-S1",
      scrub: true,
      pin: false,
      
      start:"center center",
      end:"+=400px",
      toggleActions: "restart pause reverse pause",
    }
  });

tl.from(".progress-S1", {scaleY: 0, transformOrigin: "top center", ease: "power1.inOut",duration:2}, 0)
.to(".progress-S1",{backgroundColor:"#172e82"});


var circle1 =gsap.timeline({
        scrollTrigger: {
          trigger: "#circle1",
          scrub: true,
          pin: false,
          
          start:"center center",
          end:"top 20px",
          toggleActions: "restart pause reverse pause",
        }
});

circle1.from("#circle1",{backgroundColor:"#E2E5EE"})
.from(".circle-text1",{color:"#172e82"})
.to(".circle-text1",{color:"#E2E5EE"})
.to("#circle1",{backgroundColor:"#172e82"});

var t2 = gsap.timeline({
    scrollTrigger: {
      trigger: ".progress-S2",
      scrub: true,
      pin: false,
      
      start:"center center",
      end:"+=400px",
      toggleActions: "restart pause reverse pause",
    }
  });

t2.from(".progress-S2", {scaleY: 0, transformOrigin: "top center", ease: "power1.inOut",duration:2}, 0)
.to(".progress-S2",{backgroundColor:"#172e82"});


var circle2 =gsap.timeline({
        scrollTrigger: {
          trigger: "#circle2",
          scrub: true,
          pin: false,
          
          start:"center center",
          end:"top 20px",
          toggleActions: "restart pause reverse pause",
        }
});

circle2.from("#circle2",{backgroundColor:"#E2E5EE"})
.from(".circle-text2",{color:"#172e82"})
.to(".circle-text2",{color:"#E2E5EE"})
.to("#circle2",{backgroundColor:"#172e82"});

var t3 = gsap.timeline({
    scrollTrigger: {
      trigger: ".progress-S3",
      scrub: true,
      pin: false,
      
      start:"center center",
      end:"+=400px",
      toggleActions: "restart pause reverse pause",
    }
  });

t3.from(".progress-S3", {scaleY: 0, transformOrigin: "top center", ease: "power1.inOut",duration:2}, 0)
.to(".progress-S3",{backgroundColor:"#172e82"});


var circle3 =gsap.timeline({
        scrollTrigger: {
          trigger: "#circle3",
          scrub: true,
          pin: false,
          
          start:"center center",
          end:"top 20px",
          toggleActions: "restart pause reverse pause",
        }
});

circle3.from("#circle3",{backgroundColor:"#E2E5EE"})
.from(".circle-text3",{color:"#172e82"})
.to(".circle-text3",{color:"#E2E5EE"})
.to("#circle3",{backgroundColor:"#172e82"});




function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
  
let numbers_logic = ()=>{
    console.log("numbers_logic start");
    let missions_text =document.querySelector(".missions");
    let branches_text =document.querySelector(".branches");
    let percentage_text =document.querySelector(".percentage");
    let towns_text =document.querySelector(".towns");
    // let missions=1;
    // let branches=500;
    // let percentage=70;
    // let towns=5;
    // missions_text.innerText = missions;
    // branches_text.innerText = branches;
    // percentage_text.innerText = percentage;
    // towns_text.innerText= towns;
    animateValue(missions_text, 0, 74, 5000);
    animateValue(branches_text, 0, 2500, 5000);
    animateValue(percentage_text, 0, 99, 5000);
    animateValue(towns_text, 0, 100, 5000);

    // gsap.fromTo(".missions",{x:0},{x:5,duration:0.5});
    // gsap.fromTo(".branches",{y:-5},{y:0,duration:0.5});
    // gsap.fromTo(".percentage",{y:-5},{y:0,duration:0.5});
    // gsap.fromTo(".towns",{y:-5},{y:0,duration:0.5});

    // setTimeout(()=>{
    //     missions=30;
    //     branches=1000;
    //     percentage=80;
    //     towns=50;
    //     missions_text.innerText = missions;
    //     branches_text.innerText = branches;
    //     percentage_text.innerText = percentage;    
    //     towns_text.innerText = towns;
    //     gsap.fromTo(".missions",{x:0},{x:5,duration:0.5});
    //     gsap.fromTo(".branches",{y:-5},{y:0,duration:0.5});
    //     gsap.fromTo(".percentage",{y:-5},{y:0,duration:0.5});
    //     gsap.fromTo(".towns",{y:-5},{y:0,duration:0.5});
    // },1000);

    // setTimeout(()=>{
    //     missions=74;
    //     branches=2500;
    //     percentage=99;
    //     towns=100;
    //     missions_text.innerText = missions;
    //     branches_text.innerText = branches;
    //     percentage_text.innerText = percentage;
    //     towns_text.innerText = towns;
    //     gsap.fromTo(".missions",{x:0},{x:5,duration:0.5});
    //     gsap.fromTo(".branches",{y:-5},{y:0,duration:0.5});
    //     gsap.fromTo(".percentage",{y:-5},{y:0,duration:0.5});
    //     gsap.fromTo(".towns",{y:-5},{y:0,duration:0.5});
    // },3000);
}

function triggerPos( el, buffer ){
    return el.offset().top - el.height() + buffer;
}
let elTrigger = triggerPos( $('.numbers-section'), -100 );
let triggered = false;
$(window).scroll( function(){
  var st = $(this).scrollTop();
  if( !triggered && st >= elTrigger ){
     triggered = true;
     numbers_logic();
   }
})
