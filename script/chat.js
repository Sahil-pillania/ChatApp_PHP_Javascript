const form = document.querySelector('.typing-area'),
inputField = form.querySelector('.input-field'),
sendBtn = form.querySelector('button'),
chatBox = document.querySelector(".chat-box");

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

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}


setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/get-chat.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                //console.log(data);
                
                    chatBox.innerHTML = data;
                    if(!chatBox.classList.contains("active")){
                        scrolltoBottom();

                    }
                
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

function scrolltoBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
};