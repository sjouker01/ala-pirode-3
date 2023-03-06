const track = document.getElementById("image-track");

window.onmousemove = e => {
    if(track.dataset.mouseDownAt === 0) return;
    const MouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
          maxDelta = window.innerWidth / 2;


    const percentage = (MouseDelta / maxDelta) * 100;

    track.style.transform = `translate(${percentage}%, -50%)`;
}