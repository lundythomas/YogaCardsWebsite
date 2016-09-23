<!DOCTYPE html>
<html>

<title>Thomas Lundy - CS230 Assignment 4</title>

<head>
	<meta http-equiv="refresh" content="30"/>
	<div id="heading"><h3 align="center">Store Data</h3></div>
</head>

<style>
body {
background-color:#008080;
}

table,th,td {
border : 2px solid black;
border-collapse: collapse;

}
th,td {
  padding: 5px;
}

#dataTable {
	font-family:Arial;
}

#heading {
	font-family:Arial;
}

</style>
<body>

<div id="dataTable">
<table id="myTable" align="center"></table>
</div>

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      myFunction(xmlhttp);
    }
  };
  xmlhttp.open("GET", "ass4.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Name</th><th>People Entering</th><th>People Leaving</th></tr>";
  var x = xmlDoc.getElementsByTagName("Store");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("Name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("People_Entering")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("People_Leaving")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("myTable").innerHTML = table;
}
window.onload(loadXMLDoc());
</script>

</body>
</html>

