// Menu burger
let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
})

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

// Message envoyé formulaire
var messageEnvoi = "<?php echo $messageEnvoi; ?>";
if (messageEnvoi) {
    document.getElementById("message-envoi").textContent = messageEnvoi;
}