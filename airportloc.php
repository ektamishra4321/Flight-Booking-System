<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color:black;
  padding: 10px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 10000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 2px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 2px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 200%;
}




/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 90%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 400%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1><font face="century" color="aqua"> LOCATIONS</font> </h1>
<hr>



<table>
<tr>
<td>
<div class="row">
  <div class="column">
    <div class="content">
      <img src="gate.jpg" alt="gates" style="width:100%">
      <h3>DELHI- INDIA GATE</h3>
      <h2>HOTEL-ROYALS </h2></div>
  </div>
</td>
<td>
  <div class="column">
    <div class="content">
    <img src="charminar.jpg" alt="Lights" style="width:100%">
      <h3>Hyderabad- Charminar</h3>
       <h2>HOTEL-VIEWS</h2></div>
      </div>
  </div>
</td>
</tr>



<tr>
<td>
  <div class="column">
    <div class="content">
    <img src="bridge.jpg" alt="Nature" style="width:100%">
      <h3>Kolkata- Howrah bridge</h3>
      <h2>HOTEL-HOLIDAYS</h2></div>
  </div>
</td>

<td>
  <div class="column">
    <div class="content">
    <img src="marine.jpg" alt="Mountains" style="width:100%">
      <h3>Mumbai- Marine drive</h3>
     <h2>HOTEL-Leela</h2></div>
  </div>
</td>
</tr>
<tr>
<td>
 <div class="column">
    <div class="content">
    <img src="amber.jpg" alt="Mountains" style="width:100%">
      <h3>JAIPUR- Amber palace</h3>
      <h2>HOTEL-The stay</h2> </div>
  </div>
</td>
<td>

 <div class="column">
    <div class="content">
    <img src="Marinabeach.jpg" alt="Mountains" style="width:100%">
      <h3>Chennai-Marina beach</h3>
      <h2>HOTEL-RAJ </h2></div>
  </div>
</td>
</div>
</tr>
</table>
</body>
</html>
