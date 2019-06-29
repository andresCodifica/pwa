
function iniciar(){
   var a = document.createElement("a");
    a.target = "_blank";
    a.href = "../index.php";
    a.click();
  
    
}
function link(url) {
   
   var a = document.createElement("a");
    a.target = "_blank";
    a.href = url;
    a.click();
    setTimeout ('iniciar ()', 3000); 
    
}
