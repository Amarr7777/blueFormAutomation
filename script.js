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

var total;

// To auto limit based on the number of options
// total = $("#nativelangdrop").find("option").length - 1;

// Hard code a limit
total = 5;


$("#addBtn").on("click", function() {
    var ctr = $("#additional").find(".extra").length;
    if (ctr < total) {
        var $ddl = $("#nativelangdrop").clone();
        $ddl.attr("id", "ddl" + ctr);
        $ddl.addClass("extra");
        $("#additional").append($ddl);
    }
});