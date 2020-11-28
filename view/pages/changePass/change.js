const submitButton = document.getElementById("submitButton");

const formData = new FormData();

const message = document.getElementById("message");

const submit = async (evt) => {
  evt.preventDefault();
  const id = document.getElementById("id");
  const name= document.getElementById("name");
  const pass = document.getElementById("pass");
  const passConfirm = document.getElementById("passConfirm");
  

  const url = "../../../controller/passChange.php";

  if (pass.value !== passConfirm.value) {
    message.textContent = "Senhas precisam ser identicas";
   
  console.log(pass.value);
    message.classList.remove("hidden");
    message.classList.add("error")

    setTimeout(() => {
      message.style.animation = "fadeOut 0.5s";
    }, 5000);

    setTimeout(() => {
      message.classList.add("hidden");
      message.style.animation = "fadeIn 0.5s";
    }, 5500);
  } else {
    formData.append("senha", pass.value);
    formData.append("senha1", passConfirm.value);
    formData.append("id", id.value);
    formData.append("name", name.value);
    

    const options = {
      method: "POST",
      body: formData,
    };

    let req = await fetch(url, options);
    let res = await req.text();

    message.textContent = res;

    message.classList.remove("hidden");
    if (res !== `alterada com sucesso`) {
      message.classList.remove("success");
      message.classList.add("error");
    } else {
      message.classList.remove("error");
      message.classList.add("success");
      setTimeout(() => {
        window.location.href = "../working/";
      }, 2000);
    }

    setTimeout(() => {
      message.style.animation = "fadeOut 0.5s";
    }, 5000);

    setTimeout(() => {
      message.classList.add("hidden");
      message.style.animation = "fadeIn 0.5s";
    }, 5500);
  }
};

submitButton.addEventListener("click", (evt) => submit(evt));
