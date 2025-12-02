menuBtn = document.getElementById("menu-btn");
logo = document.getElementById("logo");
sidebar = document.getElementById("sidebar");
menuText = document.querySelectorAll(".menu span");
mainContent = document.getElementById("main-content");

let isCollapsed = false;

menuBtn.addEventListener("click", () => {
  isCollapsed = !isCollapsed;

  if (isCollapsed) {
    menuText.forEach((span) => {
      span.style.opacity = "0";
      span.style.width = "0";
      span.style.overflow = "hidden";
    });

    logo.classList.add("hidden");

    sidebar.style.width = "80px";
    mainContent.style.marginLeft = "80px";
  } else {
    menuText.forEach((span) => {
      span.style.opacity = "1";
      span.style.width = "auto";
    });

    logo.classList.remove("hidden");

    sidebar.style.width = "280px";
    mainContent.style.marginLeft = "280px";
  }
});
