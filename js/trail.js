
const trails = [];

function createTrail(x, y) {
    const trail = document.createElement('div');
    trail.classList.add('trail');
    document.body.appendChild(trail);

    trail.style.left = `${x - 10}px`;
    trail.style.top = `${y - 10}px`;
    trails.push(trail);

    setTimeout(() => {
        trail.remove();
        trails.shift();
    }, 500);
}

document.addEventListener('mousemove', (e) => {
    const x = e.clientX + window.scrollX;
    const y = e.clientY + window.scrollY;
    createTrail(x, y);
});

