menu();

const info = document.getElementById("info");

let data = {};

const url = "../../../../controller/infoLar.php";

const showInfo = () => {
  const name = document.createElement("p");
  name.classList.add("name");
  name.textContent = `Nome: ${data.nome}`;

  const email = document.createElement("p");
  email.classList.add("email");
  email.textContent = `Email: ${data.email}`;

  const contato = document.createElement("p");
  contato.classList.add("email");
  contato.textContent = `Contato: ${data.contato}`;

  const disponivel = document.createElement("p");
  disponivel.classList.add("disponivelP");
  data.disponivel
    ? disponivel.classList.add("disponivel")
    : disponivel.classList.add("indisponivel");
  disponivel.textContent = data.disponivel ? "Disponível" : "Indisponível";

  info.appendChild(name);
  info.appendChild(email);
  info.appendChild(contato);
  info.appendChild(disponivel);
};

const getLarInfo = async () => {
  await fetch(url)
    .then((res) => res.text())
    .then((res) => {
      data = res;
      data = JSON.parse(data);
    });

  showInfo();
};
getLarInfo();
