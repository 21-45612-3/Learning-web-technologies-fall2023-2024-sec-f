function abc(){
    //alert('test');
    let term = document.getElementById('term').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'abc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            let tabledata = JSON.parse(this.responseText);

            let resultElement = document.getElementById('result');
            resultElement.innerHTML = "";

            for (let i = 0; i < tabledata.length; i++) {
                
                resultElement.innerHTML += "<h5>id: " + tabledata[i].id + "</h5>";
                resultElement.innerHTML += "<h5>name: " + tabledata[i].username + "</h5>";
                resultElement.innerHTML += "<h5>email: " + tabledata[i].email + "</h5>";
                resultElement.innerHTML += "<hr>";
            }
           // document.getElementById('result').innerHTML = this.responseText; 
        }
    };

    xhttp.send('term='+term);
}