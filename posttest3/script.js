const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');


hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('show'); 
});

const icon = document.getElementById("icon");

icon.onclick = function()
{
    document.body.classList.toggle("dark-theme");    
}

//pop up box tampilan awal
alert('Welcome to our website');
