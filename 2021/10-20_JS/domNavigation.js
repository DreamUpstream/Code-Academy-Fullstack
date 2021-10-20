function saveForms(){
    let values = [];
    let form;
    let selectElement;
    let table = document.getElementById("age-table");
    forms = table.getElementsByTagName("form");
    selectElement = forms[0].querySelector('input[name="nameForm"]');
    values.push(selectElement.value);
    selectElement = forms[1].querySelector('input[name="ageForm"]');
    values.push(selectElement.value);
    selectElement = forms[2].querySelector('input[name="country"]');
    values.push(selectElement.value);
    return values;
}
function formSaver() {
    let values = saveForms();
    let table = document.getElementById("age-table");
    let rows = table.getElementsByTagName("tr");
    let row, cell1, cell2, cell3;
    for (let i = rows.length-1; i > 0; i--) {
        row = table.insertRow(i);
        cell1 = row.insertCell(0);
        cell1.innerHTML = values[0];
        cell2 = row.insertCell(1);
        cell2.innerHTML = values[1];
        cell3 = row.insertCell(2);
        cell3.innerHTML = values[2];
        break;
    }
}
function formDelete() {
    let rows = document.getElementById("age-table").getElementsByTagName("tr");
    for (let i = rows.length-2; i > 0; i--) {
        rows[i].remove();
        break;
    }
}

//----Uzduotis
let table = document.getElementById("age-table");
console.log(table.getElementsByTagName("td")[0]);
console.log(table.getElementsByTagName("label"));