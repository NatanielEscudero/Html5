const menu =document.querySelector('.menu');
const menuNav =document.querySelector('.menu-navegacion');

console.log(menu)
console.log(menuNav)

menu.addEventListener('click', ()=>{

    menuNav.classList.toggle("spread")

})
