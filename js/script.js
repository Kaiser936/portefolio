    function toggleMenu () {  
        const navbar = document.querySelector('.navbar');
        const burger = document.querySelector('.burger');
        
        burger.addEventListener('click', (e) => {    
        navbar.classList.toggle('show-nav');
        });    
        // bonus
        const navbarLinks = document.querySelectorAll('.navbar a');
        navbarLinks.forEach(link => {
        link.addEventListener('click', (e) => {    
            navbar.classList.toggle('show-nav');
        }); 
        })
        
    }
    toggleMenu();


const txtAnim = document.querySelector('h1');
new Typewriter(txtAnim, {
    deleteSpeed: 20
})
    .changeDelay(20)
    .typeString("Moi c'est Soufiane MOHAMAD")
    .pauseFor(300)
    .typeString("<strong>, Dev Full-Stack </strong>")
    .pauseFor(1500)
    .deleteChars(12)
    .typeString("<span style='color: #27ae60'> CSS </span>")
    .pauseFor(1500)
    .deleteChars(5)
    .typeString("<span style='color: midnightblue'> React </span>")
    .pauseFor(1500)
    .deleteChars(7)
    .typeString("<span style='color: #ea39ff'> PHP </span>")
    .pauseFor(1500)
    .deleteChars(5)
    .typeString("<span style='color: #ff6910'> JavaScript </span>")
    .pauseFor(1500)
    .start();