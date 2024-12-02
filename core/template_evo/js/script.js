$(window).scroll(function() {
  const scrollPosition = $(this).scrollTop();
  const fixedElement = $('.custom-container');
  if (scrollPosition > 64) { 
      fixedElement.css('background-color', '#0a0a0a');
  } else {
      fixedElement.css('background-color', 'rgba(255, 99, 71, 0)');
  }
});

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.custom_menu');
    const navLinks = document.querySelectorAll('.custom_menu li');
    
    //Toggle Nav
    burger.addEventListener('click', ()=>{
      nav.classList.toggle('nav-active');
      
      //Animate Links
      navLinks.forEach((link, index)=>{
        if(link.style.animation){
          link.style.animation = ''
        }else{
              link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
  
        }
      });
      
      //burger animation
      burger.classList.toggle('toggle');
      
      
    });
    
    
    
    
  }
  
  navSlide();

  document.querySelector('.fmw-toggle').addEventListener('click', function() {
    const dropdownContent = document.querySelector('.frame_used');
    const navLinks = document.querySelectorAll('.frame_used ul li');
    
    this.classList.toggle('active');

    navLinks.forEach((link, index)=>{
      if(link.style.animation){
        link.style.animation = ''
      }else{
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;

      }
    });

    if (dropdownContent.classList.contains('open')) {
      dropdownContent.classList.remove('open');
    } else {
      dropdownContent.classList.add('open');
    }
  });


  document.addEventListener('DOMContentLoaded', function () {
    let swiper = null;
    const wrapper = document.getElementById('custom_swiper');

    function initializeSwiper() {
      if (window.innerWidth <= 790) {

        wrapper.classList.remove("swiper_row");
        wrapper.classList.add("swiper-wrapper");

        if (!swiper) {
          swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
              /*grid: {
                rows: 2,
                fill: 'row',
              },*/
              spaceBetween: 10,
              loop: true,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            mousewheel: true,
            keyboard: true,
          });
        }
      } else {
        wrapper.classList.remove("swiper-wrapper");
        wrapper.classList.add("swiper_row");

        if (swiper) {
          swiper.destroy(true, true);
          swiper = null;
        }
      }
    }

    // Initialize Swiper on load
    initializeSwiper();

    // Re-initialize Swiper on resize
    window.addEventListener('resize', initializeSwiper);
  });


 /* document.addEventListener('DOMContentLoaded', function () {
    let swiper = null;

    function initializeSwiper() {

        if (!swiper) {
          swiper = new Swiper('.logo-container', {
            slidesPerView: 5,
              spaceBetween: 10,
              loop: true,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            mousewheel: true,
            keyboard: true,
          });
        }
    }

    initializeSwiper();

    window.addEventListener('resize', initializeSwiper);
  });*/


document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];
  
    btn.onclick = function() {
      modal.style.display = "block";
      setTimeout(() => {
        modal.style.opacity = 1;
      }, 10); // Slight delay to trigger transition
    }
  
    span.onclick = function() {
      modal.style.opacity = 0;
      setTimeout(() => {
        modal.style.display = "none";
      }, 400); // Match the transition duration
    }
  
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.opacity = 0;
        setTimeout(() => {
          modal.style.display = "none";
        }, 400); // Match the transition duration
      }
    }
  });
  

  