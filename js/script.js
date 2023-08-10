"use strict";

// mobile menu
let openMenu = document.getElementById("open");
let mobileMenu = document.querySelector('.open-menu')
let navLinks = document.querySelectorAll(".nav-link");

openMenu.addEventListener("click", function (event) {
  event.preventDefault();
  document.body.classList.toggle("_lock");
  mobileMenu.classList.toggle("open");
});

navLinks.forEach((navLink) => {
  navLink.addEventListener("click", function () {
    document.body.classList.remove("_lock");
    mobileMenu.classList.remove("open");
  });
});


// animation

let callback = (entries) => {
  entries.forEach(
      (entry) => {
          if (entry.isIntersecting) {
              console.log("The element is intersecting >");

              entry.target.style.animation = 
              entry.target.dataset.animate;
          } else {
             //entry.target.style.animation="none";
          }
      }
  );       
}
let observer = new IntersectionObserver(callback);
const animationItems = document.querySelectorAll('.animate');
animationItems.forEach(item => {
  observer.observe(item)         
});
