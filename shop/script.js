const name = document.getElementById('name');
const address = document.getElementById('address');
const phone = document.getElementById('phone');
const form = document.getElementById('form'); 
const errorDiv = document.getElementById('error');

function test(){
    document.getElementById('name').innerHTML = "TESTing DOM...";
}

function ajax(){
    alert('test'); }
    

form.addEventListener('submit', (e) => {
    let messages = [];

    if (name.value === '' || name.value == null) {
        alert('You must enter your name');
       // messages.push('You must enter your name');
    }

    if(address.value.length <= 15){
        alert('Must be more than 15 character');
       // messages.push('Must be more than 15 character ');

    }

    if (messages.length > 0) {
        e.preventDefault(); 
        errorDiv.innerHTML = messages.join('<br>');
    }
});