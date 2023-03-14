window.onload = function() {
    var popup = document.getElementById("cookie-popup");
    
    if (localStorage.getItem("cookiesAccepted") != 'true') {
      popup.style.display = "block";
    }
    
    document.getElementById("accept-cookies").addEventListener("click", function() {
      localStorage.setItem("cookiesAccepted", true);
      popup.style.display = "none";
    });
  }
  