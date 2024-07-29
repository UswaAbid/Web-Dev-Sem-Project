let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    autoHeight: true,
    grabCursor: true,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });



let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let boxes = [...document.querySelectorAll('.packages .box-container .box')];
let currentItem = 3;                                                            // Start with the initial number of items shown

// Initially hide all boxes except the first three

for (let i = currentItem; i < boxes.length; i++) {
    boxes[i].style.display = 'none';
}

loadMoreBtn.onclick = () => {

    // Display the next set of boxes

    for (let i = currentItem; i < currentItem + 3; i++) {
        if (boxes[i]) {
            boxes[i].style.display = 'inline-block';
        }
    }
    currentItem += 3;                                                         // Update currentItem for the next set of boxes

    // Hide the "Load More" button if there are no more boxes to show
    
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
};




