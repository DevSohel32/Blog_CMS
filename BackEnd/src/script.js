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
      span.style.display = "none";
    });

    logo.classList.add("hidden");

    sidebar.style.width = "80px";
    mainContent.style.marginLeft = "80px";
  } else {
    // Show text
    menuText.forEach((span) => {
      span.style.display = "inline";
      logo.classList.remove("hidden");
    });

    // Optional: Restore width
    sidebar.style.width = "280px";
    mainContent.style.marginLeft = "280px";
  }
});
