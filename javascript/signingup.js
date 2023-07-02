const form=document.querySelector("form"),
continuebtn=form.querySelector(".btn"),
errortext=document.querySelector(".error");
continuebtn.onclick=()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POST" , "php/signin_up.php",true);
    xhr.onload=()=>{
        if(xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                if(data== "Successfully Signup"){
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