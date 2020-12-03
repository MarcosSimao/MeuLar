const menu = () => {
  const div = document.createElement("div");
  div.classList.add("menu");

  let showProfileOptions = false;

  const title = document.createElement("a");
  title.classList.add("title");
  title.textContent = "Meu Lar";

  const titleLogo = document.createElement("img");
  titleLogo.src = "../../../../titleLogo.svg";
  titleLogo.style.width = "20%";

  title.appendChild(titleLogo);

  const profile = document.createElement("div");
  profile.classList.add("profile");

  const buttons = document.createElement("div");
  buttons.classList.add("buttons");

  const profileButton = document.createElement("button");
  profileButton.classList.add("profileButton");
  profileButton.textContent = "Opções";

  const message = document.createElement("p");
  message.id = "message";
  message.classList.add("hidden");

  const linkToLeave = document.createElement("a");
  linkToLeave.addEventListener("click", () => {
    const url = "../../../../controller/sair.php";

    fetch(url)
      .then((res) => res.text())
      .then((res) => {
        message.textContent = res;

        message.classList.remove("hidden");
        if (res !== "vc saiu") {
          message.classList.remove("success");
          message.classList.add("error");
        } else {
          message.classList.remove("error");
          message.classList.add("success");
          setTimeout(() => {
            window.location.href = "/";
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
  });
  linkToLeave.textContent = "Sair";
  linkToLeave.classList.add("link");

  profileButton.addEventListener("mouseenter", () => {
    showProfileOptions = true;

    if (showProfileOptions) {
      profile.style.display = "flex";
      profile.style.flexDirection = "column";
    } else {
      profile.style.display = "none";
    }

    profile.addEventListener("mouseenter", () => {
      showProfileOptions = true;

      if (showProfileOptions) {
        profile.style.display = "flex";
        profile.style.flexDirection = "column";
      } else {
        profile.style.display = "none";
      }
    });

    profile.addEventListener("mouseleave", () => {
      showProfileOptions = false;

      if (showProfileOptions) {
        profile.style.display = "flex";
        profile.style.flexDirection = "column";
      } else {
        profile.style.display = "none";
      }
    });
  });

  profile.appendChild(linkToLeave);

  buttons.appendChild(profileButton);

  div.appendChild(title);
  div.appendChild(buttons);
  div.appendChild(profile);

  document.body.appendChild(div);
  document.body.appendChild(message);
};
