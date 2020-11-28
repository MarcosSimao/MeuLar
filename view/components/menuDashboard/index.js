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

  const linkToLeave = document.createElement("a");
  linkToLeave.href = "/";
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
};
