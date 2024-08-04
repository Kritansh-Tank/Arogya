document.getElementById("user-dropdown-icon").addEventListener("click", function () {
  const dropdownMenu = document.getElementById("dropdown-menu");
  dropdownMenu.style.display =
    dropdownMenu.style.display === "block" ? "none" : "block";
});

// Close the dropdown if the user clicks outside of it
window.addEventListener("click", function (event) {
  const dropdownMenu = document.getElementById("dropdown-menu");
  const dropdownIcon = document.getElementById("user-dropdown-icon");

  if (
    event.target !== dropdownIcon &&
    !dropdownIcon.contains(event.target) &&
    !dropdownMenu.contains(event.target)
  ) {
    dropdownMenu.style.display = "none";
  }
});
