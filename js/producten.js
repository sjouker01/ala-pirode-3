const track = document.getElementById("image-track");

window.addEventListener("scroll", (e) => {
    const MouseDelta = e.pagex - window.innerWidth / 2;
    const maxDelta = window.innerWidth / 2;
    const percentage = (MouseDelta / maxDelta) * 100;

    track.style.transform = `translate(${percentage}%, -50%)`;
});