const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

function updateClock() {
  var now = new Date();
  var day = now.toLocaleDateString("en-US", { weekday: "long" });
  var time = now.toLocaleTimeString("en-US", {
    hour: "2-digit",
    minute: "2-digit",
  });

  document.getElementById("waktu").textContent = time + " / " + day;
}

// Update jam setiap detik
setInterval(updateClock, 1000);

// Memanggil fungsi pertama kali agar tampilan jam langsung muncul
updateClock();

// hide-unhide
let sidebar = document.getElementById("sidebar");
let userNav = document.getElementById("con-user");
let btnSidebar = document.getElementById("btn-toggle-sidebar");
let mainContent = document.getElementById("maincontent");
let clock = document.getElementById("realtime");

btnSidebar.onclick = function () {
  userNav.classList.toggle("hide");
  btnSidebar.classList.toggle("hide");
  sidebar.classList.toggle("hide");
  mainContent.classList.toggle("hide");
  clock.classList.toggle("hide");
};

// sidebar
let dropdownBtn = document.getElementById("dropdown-tagihan");
let dropdownMenu = document.getElementById("con-sub-menu");
let ddMaster = document.getElementById("dd-md");
let trigger = true;

dropdownBtn.onclick = function () {
  if (trigger == true) {
    dropdownMenu.classList.remove("hide");
    dropdownMenu.classList.add("show");
    ddMaster.style.transform = "rotate(-90deg)";
  } else {
    dropdownMenu.classList.add("hide");
    dropdownMenu.classList.remove("show");
    ddMaster.style.transform = "rotate(0deg)";
  }
  trigger = !trigger;
  // console.log(trigger);
};

// Ambil semua elemen dengan class 'sidebar-menu'
const sidebarMenus = document.querySelectorAll(".sidebar-menu");

// Loop melalui setiap sidebar-menu dan tambahkan event listener untuk setiap klik
sidebarMenus.forEach((menu) => {
  menu.addEventListener("click", function () {
    // Hapus kelas 'active' dari semua sidebar-menu
    sidebarMenus.forEach((m) => {
      m.classList.remove("active");
    });

    // Tambahkan kelas 'active' pada sidebar-menu yang diklik
    this.classList.add("active");
  });
});
