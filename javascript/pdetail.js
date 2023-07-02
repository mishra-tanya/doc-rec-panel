const form=document.querySelector("form"),
continuebtn=form.querySelector(".btn");
continuebtn.onclick=()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POST" , "php/adddata.php",true);
    xhr.onload=()=>{
        if(xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                location.href='index.php';
            }
        }
    }
    let formdata=new FormData(form);
    xhr.send(formdata);
}
