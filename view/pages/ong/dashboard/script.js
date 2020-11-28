menu();

const info = document.getElementById("info");

let data = {
  nome: "Teste",
  email: "teste@teste.com",
};

// const url = ""

// const getOngInfo = () => {
//   fetch("")
//     .then((res) => res.json())
//     .then((res) => (data = res.data));
// };

// getInfo();

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

const animaisMock = [
  {
    nome: "Animal 1",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 2",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 3",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 4",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 5",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 6",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 7",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 8",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 9",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 10",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 11",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 12",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 14",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 15",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 16",
    url: "https://picsum.photos/150/150",
  },
  {
    nome: "Animal 17",
    url: "https://picsum.photos/150/150",
  },
];

// const urlAnimaisInfo = "";
// let animaisInfo = [];

// const getAnimaisInfo = () => {
//   fetch(urlAnimaisInfo)
//     .then((res) => res.json())
//     .then((res) => (animaisInfo = res.data));
// };
// getAnimaisInfo()

const animais = document.getElementById("animais");

const showAnimais = () => {
  animaisMock.map((item) => {
    const animal = document.createElement("div");
    animal.classList.add("animal");

    const img = document.createElement("img");
    img.classList.add("img");
    img.src = item.url;

    const nome = document.createElement("p");
    nome.classList.add("name");
    nome.textContent = item.nome;

    animal.appendChild(img);
    animal.appendChild(nome);

    animais.appendChild(animal);
  });
};
showAnimais();
