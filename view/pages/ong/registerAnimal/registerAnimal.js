menu();

const image = document.getElementById("sendImg");

const labelImg = document.getElementById("img");

const loadImg = (evt) => {
  const img = document.createElement("img");

  img.src = URL.createObjectURL(evt.target.files[0]);
  img.classList.add("widthImg");

  labelImg.innerHTML = "";
  labelImg.appendChild(img);
};

image.addEventListener("change", (evt) => loadImg(evt));
const message = document.getElementById("message");
const nome = document.getElementById("name");

const formData = new FormData();

const gender = document.getElementById("gender");
const porte = document.getElementById("porte");

const submit = document.getElementById("send");
message.classList.add("hidden");

submit.addEventListener("click", async (evt) => {
  evt.preventDefault();

  // const url = "../../../controller/RegisterOngs.php";

  formData.append("nome", nome.value);
  formData.append("porte", porte.value);
  formData.append("genero", gender.value);
  formData.append("image", image.files[0]);

  const options = {
    method: "POST",
    body: formData,
  };

  let req = await fetch(url, options);
  let res = await req.text();

  message.textContent = res;

  message.classList.remove("hidden");
  if (res !== "cadastrado com sucesso") {
    message.classList.remove("success");
    message.classList.add("error");
  } else {
    message.classList.remove("error");
    message.classList.add("success");

    setTimeout(() => {
      window.location.href = "../dashboard";
    }, 2000);
  }

  setTimeout(() => {
    message.style.animation = "fadeOut 0.5s";
  }, 5000);

  setTimeout(() => {
    message.classList.add("hidden");
    message.style.animation = "fadeIn 0.5s";
  }, 5500);
});

const back = document.getElementById("back");
back.addEventListener("click", () => {
  window.location.href = "../dashboard";
});
