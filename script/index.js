const button = document.querySelectorAll(".hamburger-menu");
const nav = document.querySelector(".mobile-nav");
const overlay = document.querySelector(".overlay-hamburger");
const navone = document.querySelector(".navone");
const navtwo = document.querySelector(".navtwo");
const navthree = document.querySelector(".navthree");
const navfour = document.querySelector(".navfour");
const navfive = document.querySelector(".navfive");
const navsix = document.querySelector(".navsix");

try {
  for (let i = 0; i < button.length; i++) {
    button[i].addEventListener("click", () => {
      nav.classList.toggle("hidden-animation");
      button[i].classList.toggle("button-animation");
      overlay.classList.toggle("hidden");
      navone.classList.toggle("in");
      navtwo.classList.toggle("in");
      navthree.classList.toggle("in");
      navfour.classList.toggle("in");
      navfive.classList.toggle("in");
      navsix.classList.toggle("in");
    });

    overlay.addEventListener("click", () => {
      nav.classList.toggle("hidden-animation");
      button[i].classList.toggle("button-animation");
      overlay.classList.add("hidden");
      navone.classList.toggle("in");
      navtwo.classList.toggle("in");
      navthree.classList.toggle("in");
      navfour.classList.toggle("in");
      navfive.classList.toggle("in");
      navsix.classList.toggle("in");
    });
  }
} catch (error) {}



const placeholder = document.querySelectorAll(".placeholder");
const video = document.querySelector(".video");



try {
  for (let i = 0; i < placeholder.length; i++) {
    placeholder[i].addEventListener("click", () => {
      video.classList.toggle("hidden");
      placeholder[i].classList.toggle("hidden");
    });
  }
} catch (error) {}
