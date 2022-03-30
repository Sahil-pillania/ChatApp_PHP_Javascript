//console.log("signup javascript");
const form = document.querySelector(".signup form");
const continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault(); 
}

continueBtn.onclick = ()=>{
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                //console.log(data);
                
            }
        }
    }
    // we have to send the form data through ajax to php 
    let formData = new FormData(form);
    xhr.send(formData);
    //xhr.send();
}