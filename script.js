const cartShopping = document.getElementById('carShopping')
const aside = document.getElementById('asideCar')

cartShopping.addEventListener('click', toggleCarritoAside);

function toggleCarritoAside(){
    console.log(aside)
    aside.classList.toggle('block');

}