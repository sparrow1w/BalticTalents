var x = [
    ['2017-07-06','AGO123',12482,650],
    ['2017-07-08','FBO329',15841,500],
    ['2017-07-09','AGO133',13334,600],
    ]; 

     var myTable = "<table><tr><td>Data: </td>";
    myTable += "<td>Valst. NR: </td>";
    myTable += "<td>Atstumas (m.): </td>";
    myTable += "<td>Laikas (s.): </td>";
    myTable += "<td>Greitis (km/h.): </td></tr>";

    for (var i = 0; i < x.length; i++) {
    myTable += "<tr><td>" + x[i][0] + "</td>";
    myTable += "<td>" + x[i][1] + "</td>";
    myTable += "<td>" + x[i][2] + "</td>";
    myTable += "<td>" + x[i][3] + "</td>";
    myTable += "<td>" + Math.round(x[i][2] / x[i][3] * 3.6) + "</td></tr>";
    }

function ikelimas() {
    var data = document.querySelector('[name="data"]');
    var nr = document.querySelector('[name="nr"]');
    var atstumas = document.querySelector('[name="atstumas"]');
    var laikas = document.querySelector('[name="laikas"]');
    x.push([data.value, nr.value, atstumas.value, laikas.value]); 
    
    var myTable = "<table><tr><td>Data: </td>";
    myTable += "<td>Valst. NR: </td>";
    myTable += "<td>Atstumas (m.): </td>";
    myTable += "<td>Laikas (s.): </td>";
    myTable += "<td>Greitis (km/h.): </td></tr>";

    for (var i = 0; i < x.length; i++) {
    myTable += "<tr><td>" + x[i][0] + "</td>";
    myTable += "<td>" + x[i][1] + "</td>";
    myTable += "<td>" + x[i][2] + "</td>";
    myTable += "<td>" + x[i][3] + "</td>";
    myTable += "<td>" + Math.round(x[i][2] / x[i][3] * 3.6) + "</td></tr>"; 
    
    var elementas = document.getElementById('table');
        elementas.innerHTML = (myTable);
    }
}

var elementas = document.getElementById('table');
        elementas.innerHTML = myTable;

