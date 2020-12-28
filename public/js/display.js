var row = 1;



var add = document.getElementById("add");
add.addEventListener("click", displayDetails);

function displayDetails() {
    var no = row;
    var name = document.querySelector('#medicine').value;
    var brand = document.querySelector('#brand').value;
    var QTY = document.getElementById("QTY").value;
    var frequency = document.getElementById("Frequency").value;
    var dose = document.getElementById("dose").value;
   // $salarieid = $_POST['hidden1'];


    $.ajax
        ({
          type: "POST",
          url: "controllers/view_drug",
          data:{ "name": name },
          success: function (data) {
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