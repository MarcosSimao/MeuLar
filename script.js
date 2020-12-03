const loginPerson = "./view/pages/login";
const loginLar = "./view/pages/loginLar";
const loginOng = "./view/pages/loginOng";
const registerPerson = "./view/pages/register";
const registerLar = "./view/pages/registerLar";
const registerOng = "./view/pages/registerOng";

menu(loginPerson, loginLar, loginOng, registerPerson, registerLar, registerOng, isHome = true);

const uf = document.getElementById("uf");
getUfs(uf);

const city = document.getElementById("city");
uf.addEventListener("change", () => {
  getCities(city, uf.value);
});

const searchOngs = document.getElementById("searchOngs");
searchOngs.value = "ongs";
searchOngs.addEventListener("click", () => {
  window.localStorage.setItem("cidade", city.value);
  window.localStorage.setItem("uf", uf.value);

  if (uf.value !== "none") {
    window.location.href = "./view/pages/searchOngs";
  }
});

const searchLares = document.getElementById("searchLares");
searchLares.value = "lares";
searchLares.addEventListener("click", () => {
  window.localStorage.setItem("cidade", city.value);
  window.localStorage.setItem("uf", uf.value);

  if (uf.value !== "none") {
    window.location.href = "./view/pages/searchLares";
  }
});

const images = [
  {
    src: "./view/images/slide1.png",
  },
  {
    src: "./view/images/slide2.png",
  },
];

const slider = document.getElementById("slider");

const buttonPrevious = document.createElement("button");
buttonPrevious.textContent = "◀";
buttonPrevious.id = "buttonPrevious";

const buttonNext = document.createElement("button");
buttonNext.textContent = "▶";
buttonNext.id = "buttonNext";

let index = 0;
const img = document.createElement("img");
img.src = images[index].src;

const timer = setInterval(() => {
  if (index === images.length - 1) {
    index = 0;
  } else {
    index++;
  }
  img.src = images[index].src;
  img.style.animation = "slide 0.5s";
}, 7000);

buttonNext.addEventListener("click", () => {
  clearInterval(timer);

  if (index === images.length - 1) {
    index = 0;
  } else {
    index++;
  }
  img.src = images[index].src;
});

buttonPrevious.addEventListener("click", () => {
  clearInterval(timer);

  if (index === 0) {
    index = images.length - 1;
  } else {
    index--;
  }

  img.src = images[index].src;
});

const info = document.getElementById("info");

info.addEventListener("mousemove", () => {
  const buttonNext = document.getElementById("buttonNext");
  const buttonPrevious = document.getElementById("buttonPrevious");

  buttonNext.style.visibility = "visible";
  buttonPrevious.style.visibility = "visible";
});

info.addEventListener("mouseout", () => {
  const buttonNext = document.getElementById("buttonNext");
  const buttonPrevious = document.getElementById("buttonPrevious");

  buttonNext.style.visibility = "hidden";
  buttonPrevious.style.visibility = "hidden";
});

slider.appendChild(buttonPrevious);
slider.appendChild(img);
slider.appendChild(buttonNext);
