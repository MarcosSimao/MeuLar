const menu = (
  loginPerson,
  loginLar,
  loginOng,
  registerPerson,
  registerLar,
  registerOng
) => {
  const div = document.createElement("div");
  div.classList.add("menu");

  let showLogin = false;
  let showRegister = false;

  const title = document.createElement("a");
  title.classList.add("title");
  title.href = "/";
  title.textContent = "Meu Lar";

  const titleLogo = document.createElement("img");
  titleLogo.src = "../../../titleLogo.svg";
  titleLogo.style.width = "20%";

  title.appendChild(titleLogo);

  const login = document.createElement("div");
  login.classList.add("login");

  const register = document.createElement("div");
  register.classList.add("register");

  const buttons = document.createElement("div");
  buttons.classList.add("buttons");

  const loginButton = document.createElement("button");
  loginButton.textContent = "Login";
  loginButton.classList.add("loginButton");

  const registerButton = document.createElement("button");
  registerButton.textContent = "Registrar";
  registerButton.classList.add("registerButton");

  const linkToRegister = document.createElement("a");
  linkToRegister.href = registerPerson;
  linkToRegister.textContent = "Registrar como usuário";
  linkToRegister.classList.add("link");

  const linkToRegisterOng = document.createElement("a");
  linkToRegisterOng.href = registerOng;
  linkToRegisterOng.textContent = "Registro como Ong";
  linkToRegisterOng.classList.add("link");

  const linkToRegisterLar = document.createElement("a");
  linkToRegisterLar.href = registerLar;
  linkToRegisterLar.textContent = "Registro como Lar Temporário";
  linkToRegisterLar.classList.add("link");

  const linkToLogin = document.createElement("a");
  linkToLogin.href = loginPerson;
  linkToLogin.textContent = "Logar como usuário";
  linkToLogin.classList.add("link");

  const linkToLoginOng = document.createElement("a");
  linkToLoginOng.href = loginOng;
  linkToLoginOng.textContent = "Login como Ong";
  linkToLoginOng.classList.add("link");

  const linkToLoginLar = document.createElement("a");
  linkToLoginLar.href = loginLar;
  linkToLoginLar.textContent = "Login como Lar Temporário";
  linkToLoginLar.classList.add("link");

  loginButton.addEventListener("mouseenter", () => {
    showRegister = false;
    register.style.display = "none";
    showLogin = true;

    if (showLogin) {
      login.style.display = "flex";
      login.style.flexDirection = "column";
    } else {
      login.style.display = "none";
    }

    login.addEventListener("mouseenter", () => {
      showLogin = true;

      if (showLogin) {
        login.style.display = "flex";
        login.style.flexDirection = "column";
      } else {
        login.style.display = "none";
      }
    });

    login.addEventListener("mouseleave", () => {
      showLogin = false;

      if (showLogin) {
        login.style.display = "flex";
        login.style.flexDirection = "column";
      } else {
        login.style.display = "none";
      }
    });
  });

  registerButton.addEventListener("mouseenter", () => {
    showLogin = false;
    login.style.display = "none";
    showRegister = true;

    if (showRegister) {
      register.style.display = "flex";
      register.style.flexDirection = "column";
    } else {
      register.style.display = "none";
    }

    register.addEventListener("mouseenter", () => {
      showRegister = true;

      if (showRegister) {
        register.style.display = "flex";
        register.style.flexDirection = "column";
      } else {
        register.style.display = "none";
      }
    });

    register.addEventListener("mouseleave", () => {
      showRegister = false;

      if (showRegister) {
        register.style.display = "flex";
        register.style.flexDirection = "column";
      } else {
        register.style.display = "none";
      }
    });
  });

  register.appendChild(linkToRegister);
  register.appendChild(linkToRegisterOng);
  register.appendChild(linkToRegisterLar);

  login.appendChild(linkToLogin);
  login.appendChild(linkToLoginOng);
  login.appendChild(linkToLoginLar);

  buttons.appendChild(loginButton);
  buttons.appendChild(registerButton);

  div.appendChild(title);
  div.appendChild(buttons);
  div.appendChild(login);
  div.appendChild(register);

  document.body.appendChild(div);
};
