const mock = [
  {
    nome: "Teste 1",
    whatsapp: "888888888",
    address: "Rua dos bobos, nº 0",
    img: "https://picsum.photos/200/200",
  },
  {
    nome: "Teste 2",
    whatsapp: "777777777",
    address: "Rua dos bobos, nº 1",
    img: "https://picsum.photos/200/200",
  },
  {
    nome: "Teste 3",
    whatsapp: "666666666",
    address: "Rua dos bobos, nº 3",
    img: "https://picsum.photos/200/200",
  },
  {
    nome: "Teste 4",
    whatsapp: "555555555",
    address: "Rua dos bobos, nº 4",
    img: "https://picsum.photos/200/200",
  },
  {
    nome: "Teste 5",
    whatsapp: "444444444",
    address: "Rua dos bobos, nº 5",
    img: "https://picsum.photos/200/200",
  },
  {
    nome: "Teste 6",
    whatsapp: "333333333",
    address: "Rua dos bobos, nº 6",
    img: "https://picsum.photos/200/200",
  },
  {
    nome: "Teste 7",
    whatsapp: "222222222",
    address: "Rua dos bobos, nº 7",
    img: "https://picsum.photos/200/200",
  },
  {
    nome: "Teste 8",
    whatsapp: "11111111111",
    address: "Rua dos bobos, nº 8",
    img: "https://picsum.photos/200/200",
  },
];

// const url = ""
let data = [];

const content = document.getElementById("content");

const list = () => {
  mock.map((item) => {
    const ong = document.createElement("div");
    ong.classList.add("ong");

    const img = document.createElement("div");
    img.classList.add("avatar");
    img.style.background = `url(${item.img})`;

    const info = document.createElement("div");
    info.classList.add("info");

    const title = document.createElement("h2");
    title.classList.add("title");
    title.textContent = item.nome;

    const address = document.createElement("p");
    address.classList.add("address");
    address.textContent = `Endereço: ${item.address}`;

    const whatsapp = document.createElement("a");
    whatsapp.classList.add("whatsapp");
    whatsapp.href = `https://api.whatsapp.com/send?phone=55${item.whatsapp}`;
    whatsapp.target = "_blank";

    whatsapp.textContent = "Link para o WhatsApp";

    info.appendChild(title);
    info.appendChild(address);
    info.appendChild(whatsapp);

    ong.appendChild(img);
    ong.appendChild(info);

    content.appendChild(ong);
  });
};

// const getData = () => {
//   const ufLocalStorage = window.localStorage.getItem("uf");
//   const value = window.localStorage.getItem("value");

//   const formData = new FormData();

//   formData.append("uf", ufLocalStorage);
//   formData.append("value", value);

//   const options = {
//     method: "GET",
//     body: formData,
//   };

//   fetch(url, options).then((res) => (data = res.json()));

list();
// };

const back = document.getElementById("back");
back.addEventListener("click", () => {
  window.location.href = "/";
});

const loginPerson = "../login";
const loginLar = "../loginLar";
const loginOng = "../loginOng";
const registerPerson = "../register";
const registerLar = "../registerLar";
const registerOng = "../registerOng";

menu(loginPerson, loginLar, loginOng, registerPerson, registerLar, registerOng);
// getData();
