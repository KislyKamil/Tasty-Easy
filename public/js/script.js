/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function on() {
    document.getElementById("popup").style.display = "block";
}

function off() {
    document.getElementById("popup").style.display = "none";
}


function search() {


    var input, filter, table, tr, td, txtValue;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    for (var i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function order(url, id, ele) {

    var product = document.getElementById(id);
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", url, true);
    xmlHttp.onreadystatechange = function () {
        (this.readyState == 4 && this.status == 200)
        document.getElementById(ele).innerHTML = xmlHttp.responseText;
    }

    xmlHttp.send(product);

}


function nextPage(url, id, ele) {

    var page = document.getElementById(id);
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", url, true);
    xmlHttp.onreadystatechange = function () {
        (this.readyState == 4 && this.status == 200)
        document.getElementById(ele).innerHTML = xmlHttp.responseText;
    }

    xmlHttp.send(page);

}

function onAction(url, warning) {
    if (confirm(warning)) {
        window.location.href = url;
    }
}


