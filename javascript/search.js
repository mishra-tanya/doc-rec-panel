const dropdown=document.querySelector(".dropdown");
const table=document.querySelector("table");

function filterData(visit){
    let xhr=new XMLHttpRequest();
    xhr.open("POST" , "php/search.php",true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload=()=>{
        if(xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                table.innerHTML=data;
                
            }
        }
    }
    xhr.send("typevisit=" +encodeURIComponent(visit));
}
