// Menu burger
let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
})

// Typewriter
const txtAnim = document.querySelector('h1');
const typewriter = new Typewriter(txtAnim, {
    deleteSpeed: 20,
    delay: 20
});

typewriter
    .typeString("Moi c'est Soufiane MOHAMAD")
    .pauseFor(300)
    .typeString("<strong>, Dev Full-Stack </strong>")
    .pauseFor(1000)
    .deleteChars(12)
    .typeString("<span style='color: #27ae60'> CSS </span>")
    .pauseFor(1000)
    .deleteChars(5)
    .typeString("<span style='color: midnightblue'> React </span>")
    .pauseFor(1000)
    .deleteChars(7)
    .typeString("<span style='color: #ea39ff'> PHP </span>")
    .pauseFor(1000)
    .deleteChars(5)
    .typeString("<span style='color: #ff6910'> JavaScript </span>")
    .pauseFor(1000)
    .start();


// Confetti
function randomInRange(min, max) {
    return Math.random() * (max - min) + min;
}

confetti({
    angle: randomInRange(55, 125),
    spread: randomInRange(50, 70),
    particleCount: randomInRange(50, 100),
    origin: { y: 0.6 },
});
