let data = [];

const content = document.getElementById("content");

const list = () => {
  if (!data.length > 0) {
    const message = document.createElement("h2");
    message.textContent = "Não há Ongs na sua cidade";

    content.appendChild(message);
  } else {
    data.map((item) => {
      const ong = document.createElement("div");
      ong.classList.add("ong");

      const img = document.createElement("div");
      img.classList.add("avatar");
      img.style.background = `url(${item.image})`;

      const info = document.createElement("div");
      info.classList.add("info");

      const title = document.createElement("h2");
      title.classList.add("title");
      title.textContent = item.nome;

      const email = document.createElement("p");
      email.classList.add("address");
      email.textContent = `Email: ${item.email}`;

      const address = document.createElement("p");
      address.classList.add("address");
      address.textContent = `Endereço: ${item.endereco} - ${item.bairro}`;

      const whatsapp = document.createElement("a");
      whatsapp.classList.add("whatsapp");
      whatsapp.href = `https://api.whatsapp.com/send?phone=55${item.contato}`;
      whatsapp.target = "_blank";

      whatsapp.textContent = "Link para o WhatsApp";

      info.appendChild(title);
      info.appendChild(address);
      info.appendChild(email);
      info.appendChild(whatsapp);

      ong.appendChild(img);
      ong.appendChild(info);

      content.appendChild(ong);
    });
  }
};

const getData = async () => {
  const url = "../../../controller/listarOngs.php";

  const cidade = localStorage.getItem("cidade");
  const uf = localStorage.getItem("uf");

  const formData = new FormData();

  formData.append("cidade", cidade);
  formData.append("uf", uf);

  const options = {
    method: "POST",
    body: formData,
  };

  await fetch(url, options)
    .then((res) => res.text())
    .then((res) => {
      data = res;
      data = JSON.parse(data);
    })
    .catch((data = []));
  list();
};
getData();

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
