

// dit is voor de footer 
window.addEventListener('resize', function() {
    if (window.innerWidth < 768) {
      document.querySelector('footer ul').classList.add('text-center');
    } else {
      document.querySelector('footer ul').classList.remove('text-center');
    }
  });



  // JavaScript om dropdown te sluiten wanneer er buiten wordt geklikt
const dropdown = document.querySelector('.dropdown');
document.addEventListener('click', function(event) {
  const isClickInside = dropdown.contains(event.target);
  if (!isClickInside) {
    dropdown.querySelector('ul').style.display = 'none';
  }
});
