//name = "alamin";
//var name = "alamin";
//let name = "alamin";
//const name ="alamin";
//let std = [1, 'alamin', 'alamin@aiub.edu'];

// function abc(){

// }

// let f1 = (a, b)=>a+b;
// f1();

// if(){

// }else{

// }

// for(let i=0; i>10; i++){

// }

//console.log('test');
//alert('test...');
//document.write('<h2>testing JS dom...</h2>');
//document.getElementsByTagName('h1')[1].innerHTML = "TESTing DOM...";

function test(){
    document.getElementById('h1').innerHTML = "TESTing DOM...";
}

function abc(){
    let username = document.getElementById('username').value;
    
    if(username == ''){
        document.getElementById('h1').innerHTML = 'null username!';                    
    }else if(username.length < 2){
        document.getElementById('h1').innerHTML = 'Length of username is less than 2';
    }else if(!/^[a-zA-Z\.-]+$/.test(username)){
        document.getElementById('h1').innerHTML = 'username must contain only A-Z a-z .';


    }else if(!/^[a-zA-Z]/.test(username)){
        document.getElementById('h1').innerHTML = 'username must start with a letter';

    } else {
        document.getElementById('h1').innerHTML = username;

    }}


function validemail(){
        let useremail = document.getElementById('useremail').value;
        
        if(useremail == ''  || !useremail.includes("@")){
            document.getElementById('h1').innerHTML = 'not valid'; 
       } else{
    document.getElementById('h1').innerHTML = useremail;

         }

}