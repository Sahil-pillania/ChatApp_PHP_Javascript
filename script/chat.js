const form = document.querySelector('.typing-area'),
inputField = form.querySelector('.input-field'),
sendBtn = form.querySelector('button');

form.onsubmit = (e)=>
{
    e.preventDefault(); // preventing form from submitting
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/insert-chat.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                //console.log(data);
                inputField.value = "";

            
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../php/get-chat.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                //console.log(data);
                if(!searchBar.classList.contains("active")){ // if searchBar doesn't contain active class
                    usersList.innerHTML = data;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);
