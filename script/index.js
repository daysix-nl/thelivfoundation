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
} catch (error) { }



const placeholder = document.querySelectorAll(".placeholder");
const video = document.querySelector(".video");



try {
  for (let i = 0; i < placeholder.length; i++) {
    placeholder[i].addEventListener("click", () => {
      video.classList.toggle("hidden");
      placeholder[i].classList.toggle("hidden");
    });
  }
} catch (error) { }



/**********************/
/**** accordion ***/
/**********************/
try {
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) { }



try {
  document.addEventListener('DOMContentLoaded', function () {
    var openButtons = document.querySelectorAll('.open-form');
    var closeButton = document.getElementById('close');
    var body = document.body;

    function toggleForm(event) {
      var vacatureId = event.currentTarget.getAttribute('data-vacature-id');
      var formField = document.querySelector('#input_3_6'); // Pas dit aan naar het juiste veld ID
      if (formField) {
        formField.value = vacatureId;
      }

      if (body.classList.contains('form-close')) {
        body.classList.remove('form-close');
        body.classList.add('form-open');
      } else {
        body.classList.remove('form-open');
        body.classList.add('form-close');
      }
    }

    openButtons.forEach(function (button) {
      button.addEventListener('click', toggleForm);
    });

    if (closeButton) {
      closeButton.addEventListener('click', function () {
        body.classList.remove('form-open');
        body.classList.add('form-close');
      });
    }
  });
} catch (error) { }
