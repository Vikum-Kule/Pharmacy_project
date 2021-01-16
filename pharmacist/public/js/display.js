var row = 1;



var add = document.getElementById("add");
add.addEventListener("click", displayDetails);


function displayDetails() {

    var no = row;
    var name = document.querySelector('#medicine').value;
    var brand = document.querySelector('#brand').value;
    var QTY = document.getElementById("QTY").value;
    const status = document.querySelector('#stat').value;
    var frequency = document.getElementById("Frequency").value;
    var dose = document.getElementById("dose").value;

    console.log(name);
    var url = "http://localhost/mvc/view_drug/show_medicine";
    $.ajax({
        url: url,
        type: 'POST',
        data: { name: name, brand: brand, QTY: QTY, status: status, frequency: frequency, dose: dose },
        success: function(data) {
            console.log(data);
        }
    });



    if (!name || !brand || !QTY || !frequency || !dose) {

        if (!name) {
            alert("please enter name....");
        }
        if (!brand) {
            alert("please enter brand....");
        }
        if (!QTY) {
            alert("please enter QTY....");
        }
        if (!frequency) {
            alert("please enter frequency....");
        }
        if (!dose) {
            alert("please enter dose....");
        }

        return;
    }
    var display = document.getElementById("display");
    var newRow = display.insertRow(row);

    var col1 = newRow.insertCell(0);
    var col2 = newRow.insertCell(1);
    var col3 = newRow.insertCell(2);
    var col4 = newRow.insertCell(3);
    var col5 = newRow.insertCell(4);
    var col6 = newRow.insertCell(5);
    var col7 = newRow.insertCell(6);
    var col8 = newRow.insertCell(7);

    col1.innerHTML = no;
    col2.innerHTML = name;
    col3.innerHTML = brand;
    col5.innerHTML = QTY;
    col6.innerHTML = dose;
    col7.innerHTML = frequency;


    row++;
    clear();
    selectRow();
}
var index;
var display = document.getElementById("display");

function selectRow() {

    for (var i = 0; i < display.rows.length; i++) {
        display.rows[i].onclick = function() {
            index = this.rowIndex;
            document.querySelector('#medicine').value = this.cells[1].innerHTML;
            document.querySelector('#brand').value = this.cells[2].innerHTML;
            document.getElementById("QTY").value = this.cells[4].innerHTML;
            document.getElementById("Frequency").value = this.cells[5].innerHTML;
            document.getElementById("dose").value = this.cells[6].innerHTML;


        };
    }
}
selectRow();

var edit = document.getElementById("edit");
edit.addEventListener("click", editRow);

function editRow() {
    console.log(index);
    var name = document.querySelector('#medicine').value;
    var brand = document.querySelector('#brand').value;
    var QTY = document.getElementById("QTY").value;
    var frequency = document.getElementById("Frequency").value;
    var dose = document.getElementById("dose").value;
    display.rows[index].cells[0].innerHTML = index;
    display.rows[index].cells[1].innerHTML = name;
    display.rows[index].cells[2].innerHTML = brand;
    display.rows[index].cells[4].innerHTML = QTY;
    display.rows[index].cells[5].innerHTML = frequency;
    display.rows[index].cells[6].innerHTML = dose;
    clear();
}

var remove = document.getElementById("remove");
remove.addEventListener("click", removeRow);

function removeRow() {
    display.deleteRow(index);
    for (var i = 0; i < display.rows.length; i++) {
        display.rows[i + 1].cells[0].innerHTML = i + 1;
    }

    clear();
}

function clear() {
    document.querySelector('#medicine').value = "";
    document.querySelector('#brand').value = "";
    document.getElementById("QTY").value = "";
    document.getElementById("Frequency").value = "";
    document.getElementById("dose").value = "";

}
document.getElementById("icon").addEventListener('click', function() {
    myFunction();
});

function myFunction() {
    var x = document.getElementById("right-up1");
    var y = document.getElementById("barcode");
    var z = document.getElementById("right-up");
    var inputSet1 = document.getElementById("table2");
    if (x.style.display === "none") {

        x.style.display = "block";
        y.style.display = "block";
        z.style.display = "block";
        inputSet1.style.display = "block";
        tabHidden.style.display = "none";
        document.getElementById("right-bottum").style.width = "77.5%";
        document.getElementById("right-bottum").style.height = "50%";
        document.getElementById("table2").style.right = "5px";
        document.getElementById("display").style.width = "98%";
        document.getElementById("right-bottum").style.left = "22%";
        document.getElementById("right-bottum").style.top = "40%";
        var elements = document.getElementsByClassName('order_medicine');
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.left = '22%';
        }
        document.getElementById("buttons").style.left = "22%";
        document.getElementById("buttons").style.width = "79%";
        document.getElementById("buttons").style.top = "53.5%";
        imgMinimize();

    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        inputSet1.style.display = "none";
        tabHidden.style.display = "block";
        document.getElementById("right-bottum").style.width = "55%";
        document.getElementById("right-bottum").style.height = "100%";
        document.getElementById("display").style.width = "70%";
        document.getElementById("right-bottum").style.left = "610px";
        var elements = document.getElementsByClassName('order_medicine');
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.left = '44.5%';
        }
        document.getElementById("buttons").style.left = "610px";
        document.getElementById("right-bottum").style.top = "70px";
        document.getElementById("buttons").style.width = "55%";
        document.getElementById("buttons").style.top = "50%";
        imgExpan();

    }
}

function imgExpan() {
    var x = document.getElementById("listOfMed");
    var y = document.getElementById("name");
    var z = document.getElementById("CustomerId");
    var tel = document.getElementById("tel");
    var hidden = document.getElementById("hidden");
    hidden.style.display = "block";
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "none";
    tel.style.display = "none";
    document.getElementById("img").style.height = "800px";
    document.getElementById("image_wrapp").style.height = "500px";
    document.getElementById("image_wrapp").style.width = "580px";

    var elements = document.getElementsByClassName('leftside');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.width = '43.5%';
    }

}

function imgMinimize() {
    var x = document.getElementById("listOfMed");
    var y = document.getElementById("name");
    var z = document.getElementById("CustomerId");
    var tel = document.getElementById("tel");
    var hidden = document.getElementById("hidden");
    hidden.style.display = "none";
    x.style.display = "block";
    y.style.display = "block";
    z.style.display = "block";
    tel.style.display = "block";

    document.getElementById("img").style.height = "200px";
    document.getElementById("image_wrapp").style.height = "200px";
    document.getElementById("image_wrapp").style.width = "280px";

    var elements = document.getElementsByClassName('leftside');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.width = '21%';
    }

}