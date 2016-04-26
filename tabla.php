<html>
<head>
<title>Some Title</title>
<style>
table {
border-collapse : collapse;
position : absolute;
height : 100%;
}

td, th {
background-color: #aaaaaa;
border-right : 1px solid #ffffff;
color : #ffffff;
width : 100px;
text-align : center;
}

td.locked_left, th.locked_left {
background-color: #548978;
font-weight : bold;
border-left : 1px solid #ffffff;
}

#table_container_left {
width : 100px;
height : 200px;
position : relative;
float : left;
overflow : hidden;
}

#table_container_right {
width : 150px;
height : 200px;
overflow : scroll;
float : left;
position : relative;
}

</style>
<script type="text/javascript">
function initScroll() {
var leftDiv = document.getElementById('table_container_left');
var rightDiv = document.getElementById('table_container_right');
rightDiv.onscroll = function() {
leftDiv.scrollTop = this.scrollTop;
};
}
</script>
</head>
<body on_load="initScroll();">
<div id='table_container_left'>
<table id="left_table">
<thead>
<tr>
<th class='locked_left'>Nombre del empleado</th>
</tr>
</thead>
<tbody>
<tr>
<td class='locked_left'>Juanito</td>
</tr>
<tr>
<td class='locked_left'>Fulanito</td>
</tr>
<tr>
<td class='locked_left'>Menguanita</td>
</tr>

</tbody>
</table>
</div>
<div id='table_container_right'>
<table id="right_table">
<thead>
<tr>
<th>Sueldo </th>
<th>Puesto </th>
<th>fecha de alta</th>
</tr>
</thead>
<tbody>
<tr>
<td>10000</td>
<td>Becario sistemas</td>
<td>2016-02-15</td>
</tr>
<tr>
<td>15000</td>
<td>Contador</td>
<td>2014-01-01</td>
</tr>
<tr>
<td>Gerente de sistemas</td>
<td>30000</td>
<td>2016-01-01</td>
</tr>

</tbody>
</table>
</div>
</body>
</html>