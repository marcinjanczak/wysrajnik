const button = document.querySelector('button');
const form = document.getElementsByClassName('form');

button.addEventListener('click', () =>{
    console.log(form);
    document.getElementById("form").style.display = 'flex';
});