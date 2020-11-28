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
