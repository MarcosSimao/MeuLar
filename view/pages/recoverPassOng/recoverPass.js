const recoverButton = document.getElementById("recover");

const recover = async (evt) => {
  evt.preventDefault();
  const email = document.getElementById("email");

  const url = '../../../controller/forgotPasswordOngs.php';

  const formData = new FormData();

  formData.append('email', email.value);

  const options = {
    method: "POST",
    body: formData,
  };

  let req = await fetch(url, options);
  let res = await req.text();

  message.textContent = res;

  message.classList.remove("hidden");
  if (res !== `Enviamos email para ${email.value}`) {
    message.classList.remove("success");
    message.classList.add("error");
  } else {
    message.classList.remove("error");
    message.classList.add("success");
    setTimeout(() => {
      window.location.href = "../../..";
    }, 2000);
  }

  setTimeout(() => {
    message.style.animation = "fadeOut 0.5s";
  }, 5000);

  setTimeout(() => {
    message.classList.add("hidden");
    message.style.animation = "fadeIn 0.5s";
  }, 5500);
};

const loginPerson = '../login'
const loginLar = '../loginLar'
const loginOng = '../loginOng'
const registerPerson = '../register'
const registerLar = '../registerLar'
const registerOng = '../registerOng'

menu(loginPerson, loginLar, loginOng, registerPerson, registerLar, registerOng);

recoverButton.addEventListener("click", (evt) => recover(evt));
