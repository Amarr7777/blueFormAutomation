//card1
function zoomIn1() {
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    x1.style.filter = "blur(0px)";
    x2.style.filter = "blur(9px)";
    x3.style.filter = "blur(9px)";
}
/*card2*/
function zoomIn2() {
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    x1.style.filter = "blur(9px)";
    x2.style.filter = "blur(0px)";
    x3.style.filter = "blur(9px)";

}
/*card3*/
function zoomIn3() {
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    x1.style.filter = "blur(9px)";
    x2.style.filter = "blur(9px)";
    x3.style.filter = "blur(0px)";
}
function normal1() {
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


function add_row() {
    table.innerHTML = table.innerHTML + '<table class="table"><tr><td><div class="input-group mb-3"><label class="input-group-text" for="inputGroupSelect01">Subject</label><select class="form-select" id="inputGroupSelect01" required><option selected>Choose...</option><option value="1">STA631N</option><option value="2">STA641AN</option><option value="3">MAT641EN</option><option value="4">MAT631N</option><option value="5">CSC631N</option><option value="6">CSC641BN</option><option value="7">MAT651N</option><option value="8">MAT651EN</option><option value="9">SAT651N</option><option value="10">SAT652AN</option><option value="11">CSC681N</option><option value="12">Mentoring</option></select></div></td><td><div class="input-group mb-3"><label class="input-group-text" for="inputGroupSelect01">Name of the Teacher</label><select class="form-select" id="inputGroupSelect01" required><option selected>Choose...</option><option value="1">Dr.Asish</option><option value="2">Dr.Chandraketu</option><option value="3">Dr.Riya</option><option value="4">Dr.Ansa</option><option value="5">Dr.Shilpa</option><option value="6">Ms.vandana</option><option value="7">Dr.Jawahar</option><option value="8">Dr.Bosco</option><option value="9">Dr.Abhinav</option></select></div></td><td><div class="input-group mb-3"><label class="input-group-text" for="inputGroupSelect01">No.of Periods</label><select class="form-select" id="inputGroupSelect01" required><option selected>Choose...</option><option value="1">One</option><option value="2">Two</option><option value="3">Three</option><option value="4">Four</option><option value="5">Five</option><option value="6">Six</option><option value="7">Seven</option><option value="8">Eight</option><option value="9">Nine</option><option value="10">Ten</option></select></div></td><td><div class="add_btn" name="addrow" name="Addrow" ><button type="button" class="btn btn-primary" onclick="add_row()">Save</button> <button type="button" class="btn btn-secondary">Remove</button></div></td></tr></tbody></table>';
}
function delete_row() {
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('table').deleteRow(i);
}

function refresh_row() {
    location.reload();
}

function getRandom() {
    var app_num = document.getElementById("app_num");
    var random = Math.floor(Math.random() * 10000);
    app_num.innerHTML = app_num.innerHTML + random;
}

function deleteRow(row) {
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('table').deleteRow(i);
}
