const inlogKnop = document.getElementById("dropdown-inloggen");
const overlay = document.getElementById("overlay");

inlogKnop.addEventListener("click", function(event) {
  event.preventDefault();
  overlay.style.display = "block";
  document.getElementById("mijnForm").submit();
});