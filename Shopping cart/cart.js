let narudzbaButton = document.getElementById("narudzba");
narudzbaButton.addEventListener("click",(event)=>{
    
    if(confirm("jeste li sigurni da želite potvrditi narudžbu")){
        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "dodajNarudzbu.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const responseData = xhr.responseText;
                    if(responseData.localeCompare("success") == 0){
                        window.location.href = "narudzba.php";
                    }
                }
            }
        };
        xhr.send();
        
    }else{
        
    }
});