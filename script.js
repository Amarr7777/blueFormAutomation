//card1
function zoomIn1(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    x1.style.filter = "blur(0px)";
    x2.style.filter = "blur(9px)";
    x3.style.filter = "blur(9px)"; 
}
/*card2*/
function zoomIn2(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    x1.style.filter = "blur(9px)";
    x2.style.filter = "blur(0px)";
    x3.style.filter = "blur(9px)";
   
}
/*card3*/
function zoomIn3(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3'); 
    x1.style.filter = "blur(9px)";
    x2.style.filter = "blur(9px)";
    x3.style.filter = "blur(0px)";
}
function normal1(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    x1.style.filter = "blur(0px)";
    x2.style.filter = "blur(0px)";
    x3.style.filter = "blur(0px)";
}


function validation(){

    var id =document.f1.username.value;
    var ps =document.f1.password.value;

    if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  