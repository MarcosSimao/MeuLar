menu();

const info = document.getElementById("info");

const url = "../../../../controller/infoOng.php";

let data = {};

const showOngInfo = () => {
  const name = document.createElement("p");
  name.classList.add("name");
  name.textContent = `Nome: ${data.nome}`;

  const email = document.createElement("p");
  email.classList.add("email");
  email.textContent = `Email: ${data.email}`;

  info.appendChild(name);
  info.appendChild(email);

  const registerAnimal = document.getElementById("registerAnimal");
  registerAnimal.addEventListener("click", () => {
    window.location.href = "../registerAnimal";
  });
};

const getOngInfo = async () => {
  await fetch(url)
    .then((res) => res.text())
    .then((res) => {
      data = res;
      data = JSON.parse(data);
    });

  showOngInfo();
};
getOngInfo();

const animais = document.getElementById("animais");

let animaisInfo = [];

const showAnimais = () => {
  if (!animaisInfo.length > 0) {
    const message = document.createElement("h1");
    message.textContent = "Não há animais cadastrados";

    animais.appendChild(message);
  } else {
    animaisInfo.map((item) => {
      const animal = document.createElement("div");
      animal.classList.add("animal");

      const img = document.createElement("img");
      img.classList.add("img");
      img.src = item.imagem;

      const nome = document.createElement("p");
      nome.classList.add("name");
      nome.textContent = item.nome;

      const porte = document.createElement("p");
      porte.classList.add("name");
      porte.textContent = `Porte: ${item.porte}`;

      const gender = document.createElement("p");
      gender.classList.add("name");
      gender.textContent = `Sexo: ${item.sexo}`;

      animal.appendChild(img);
      animal.appendChild(nome);
      animal.appendChild(porte);
      animal.appendChild(gender);

      animais.appendChild(animal);
    });
  }
};

const urlAnimaisInfo = "../../../../controller/listarAnimals.php";

const getAnimaisInfo = async () => {
  await fetch(urlAnimaisInfo)
    .then((res) => res.text())
    .then((res) => {
      animaisInfo = res;
      animaisInfo = JSON.parse(animaisInfo);
    }).catch(
      animaisInfo = []
    );

  showAnimais();
};
getAnimaisInfo();
