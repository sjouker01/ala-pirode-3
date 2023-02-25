const dropdownInloggen = document.getElementById("dropdown-inloggen");
  const mijnForm = document.getElementById("mijnForm");
  const mijnKnop = document.getElementById("mijnKnop");
  const overlay = document.getElementById("overlay");
  
  dropdownInloggen.addEventListener("click", function() {
    overlay.style.display = "block";
    mijnForm.submit(); // verstuur het formulier zodra er op de knop wordt geklikt
  });
  
  mijnForm.addEventListener("submit", function() {
    setTimeout(function() {
      overlay.style.display = "none";
    }, 2000); // verberg de overlay na 2 seconden (2000 milliseconden)
  });