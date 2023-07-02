const form=document.querySelector("form"),
continuebtn=form.querySelector("button"),
errortext=document.querySelector(".error");

continuebtn.onclick=()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POST" , "php/log_in.php",true);
    xhr.onload=()=>{
        if(xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                if(data== "Successfully login"){
                    location.href='doctorpanel.php';
                }else{
                    errortext.style.display="block";
                    errortext.textContent=data;
                }
            }
        }
    }
    let formdata=new FormData(form);
    xhr.send(formdata);
}