let darkmode = localStorage.getItem('darkMode');
const theme = document.getElementById('theme')
const container = document.querySelector('.container')
const body = document.querySelector('.body');
const navLinks = document.querySelectorAll('.nav-link-item');

function enableDarkMode(){
    //Add darkmode class to the body
    document.body.classList.add('darkmode')
   // body.classList.add('darkmode');
   container.classList.add('darkmode')

    let navLinkArr = [...navLinks];

    navLinkArr.forEach((nav) => {
        if(nav.classList.contains('nav-link-item')){
            //nav.classList.toggle('dark-link-item')
            nav.classList.remove('nav-link-item');
            nav.classList.add('dark-link-item')
        }
    })
    // e.target.classList.toggle('fa-moon')
    //Store the darkmode in local storage
   localStorage.setItem("darkMode","enabled");

}

function disableDarkMode(){
    //Remove class from the body
    document.body.classList.remove('darkmode')
    //body.classList.remove('darkmode');

    let navLinkArr = [...navLinks];

    navLinkArr.forEach((nav) => {
        if(nav.classList.contains('dark-link-item')){
            //nav.classList.toggle('nav-link-item')
            nav.classList.add('nav-link-item');
            nav.classList.remove('dark-link-item')
        }
    })
    // e.target.classList.toggle('fa-sun')

    //Set the darkmode
    localStorage.setItem('darkMode', null);
}

// theme.addEventListener('click',() => {
//     darkmode = localStorage.getItem('darkMode');
//     if(darkmode !== "enabled"){
//         enableDarkMode()
//     }else{
//         disableDarkMode()
//         //console.log('dark')
//     }
// });


// Mobile Menu
document.addEventListener('DOMContentLoaded', () => {
    const hamburgerButton = document.querySelector('.hamburger-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    hamburgerButton.addEventListener('click', () =>
      mobileMenu.classList.toggle('active')
    );
  });
