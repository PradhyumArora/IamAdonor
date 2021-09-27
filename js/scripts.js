// Collapse the navbar by adding the top-nav-collapse class
window.onscroll = function () {
  scrollFunction();
  scrollFunctionBTT(); // back to top button
};

window.onload = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.documentElement.scrollTop > 30) {
    document.getElementById("navbar").classList.add("top-nav-collapse");
  } else if (document.documentElement.scrollTop < 30) {
    document.getElementById("navbar").classList.remove("top-nav-collapse");
  }
}

// Navbar on mobile
let elements = document.querySelectorAll(".nav-link:not(.dropdown-toggle)");

for (let i = 0; i < elements.length; i++) {
  elements[i].addEventListener("click", () => {
    document.querySelector(".offcanvas-collapse").classList.toggle("open");
  });
}

document.querySelector(".navbar-toggler").addEventListener("click", () => {
  document.querySelector(".offcanvas-collapse").classList.toggle("open");
});

// Hover on desktop
function toggleDropdown(e) {
  const _d = e.target.closest(".dropdown");
  let _m = document.querySelector(".dropdown-menu", _d);

  setTimeout(
    function () {
      const shouldOpen = _d.matches(":hover");
      _m.classList.toggle("show", shouldOpen);
      _d.classList.toggle("show", shouldOpen);

      _d.setAttribute("aria-expanded", shouldOpen);
    },
    e.type === "mouseleave" ? 300 : 0
  );
}

// On hover
const dropdownCheck = document.querySelector(".dropdown");

if (dropdownCheck !== null) {
  document
    .querySelector(".dropdown")
    .addEventListener("mouseleave", toggleDropdown);
  document
    .querySelector(".dropdown")
    .addEventListener("mouseover", toggleDropdown);

  // On click
  document.querySelector(".dropdown").addEventListener("click", (e) => {
    const _d = e.target.closest(".dropdown");
    let _m = document.querySelector(".dropdown-menu", _d);
    if (_d.classList.contains("show")) {
      _m.classList.remove("show");
      _d.classList.remove("show");
    } else {
      _m.classList.add("show");
      _d.classList.add("show");
    }
  });
}

/* Card Slider - Swiper */
var cardSlider = new Swiper(".card-slider", {
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/* Back To Top Button */
// Get the button
myButton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
function scrollFunctionBTT() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    myButton.style.display = "block";
  } else {
    myButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // for Safari
  document.documentElement.scrollTop = 0; // for Chrome, Firefox, IE and Opera
}

// Changing Home Page Form
const loginFormBtn = document.querySelector(".login-form");

// Function for changing form content to login form

function getLoginForm() {
  document.querySelector(".form-title").innerText = "Login";

  document.querySelector(".change-form").innerHTML = `
  Don't have an account?
  <a onclick="getSignUpForm()" class="text-primary">Sign Up</a>
`;

  document.querySelector("#name-input").remove();
  document.querySelector("#city-input").remove();
}

function getSignUpForm() {
  document.querySelector(".form-title").innerText = "Sign Up";
  let changeForm = document.querySelector(".change-form");
  changeForm.innerHTML = "";
  changeForm.insertAdjacentHTML(
    "afterbegin",
    `Already have an account?
	<a onclick="getLoginForm()" class="text-primary login-form">Login</a>`
  );

  const markup = `<div class="form-group">
	<input
	  id="name-input"
	  type="text"
	  class="form-control-input"
	  placeholder="Name"
	  required
	/>
  </div>
  <div class="form-group">
	<input
	  type="email"
	  class="form-control-input"
	  placeholder="Email"
	  required
	/>
  </div>
  <div class="form-group">
	<input
	  type="password"
	  class="form-control-input"
	  placeholder="Password"
	  required
	/>
  </div>
  <select
	id="city-input"
	class="form-control-input form-select mb-4"
	aria-label="Default select example"
  >
	<option selected>Select your city</option>
	<option value="Ahmedabad">Ahmedabad</option>
	<option value="Gandhinagar">Gandhinagar</option>
	<option value="Surat">Surat</option>
  </select>
  <div class="form-group">
	<button type="submit" class="form-control-submit-button">
	  Submit
	</button>
  </div>`;

  document.querySelector("#account-form").innerHTML = markup;
}

loginFormBtn.addEventListener("click", getLoginForm);
