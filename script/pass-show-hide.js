console.log("javascript");
const passField = document.querySelector(".form input[type='password']");
togglebtn = document.querySelector(".form .field i");

togglebtn.onclick = ()=>{
    if(passField.type == 'password'){
        passField.type = 'text';
        togglebtn.classList.add('active');
    }
    else
    {
        passField.type = 'password';
        togglebtn.classList.remove('active');

    }
}