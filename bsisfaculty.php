<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<style>
    body{
background-color: lightpink;
}
    .btn{ 
			color: #fff;
			background: #2d2f41;
			box-shadow: 0 5px 25px rgba(14,21,37,0.8);
			border-radius: 10px;
			justify-content: center;
			align-items: center;
	        border: 1px solid gray; 
			height: 40px; 
			width: 80px; 
			font-size: 25px;		
           }
h1{
	color: deepskyblue;
	font-size: 60px;
	font-weight: 700;
	margin-top: 10px;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 4px;
	line-height: 23px;
}

h1 span{
	color: black;
}

* {
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
.tree {
	width: 1200px;
	height: auto;
	text-align: center;
}
.tree ul {
	padding-top: 50px;
	position: relative;
	transition: .5s;
}
.tree li {
	display: inline-table;
	text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px;
	transition: .5s;
}
.tree li::before, .tree li::after {
	content: '';
	position: absolute;
	top: 0;
	right: 50%;
	border-top: 1px solid #ccc;
	width: 51%;
	height: 10px;
}
.tree li::after {
	right: auto;
	left: 50%;
	border-left: 1px solid #ccc;
}

.tree ul ul::before {
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	border-left: 1px solid #ccc;
	width: 0;
	height: 20px;
}
.tree li a {
	border: 1px solid #ccc;
	padding: 5px;
	display: inline-grid;
	border-radius: 5px;
	text-decoration-line: none;
	border-radius: 5px;
	transition: .5s;
}
.tree li a img {
	width: 100px;
	height: 100px;
	margin-bottom: 10px !important;
	border-radius: 5px;
	margin: auto;
}
.tree li a span {
	border: 1px solid #ccc;
	color: black;
	padding: 5px;
	font-size: 12px;
	letter-spacing: 1px;
	font-weight: 500;
}
/*Hover-Section*/
.tree li a:hover, .tree li a:hover i, .tree li a:hover span, .tree li a:hover+ul li a {
	background: #c8e4f8;
	color: black;
	border: 1px solid #94a0b4;
}
.tree li a:hover+ul li::after, .tree li a:hover+ul li::before, .tree li a:hover+ul::before, .tree li a:hover+ul
 ul::before {
	border-color: #94a0b4;
}


.navbar a {
  float: left;
  padding: 5px;
  color: white;   
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

</style>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="header">
    <div class="navbar">
    <a href="#default" class="logo">CARMONA</a>
    </div>
    <div class="header-right">
	<a class="active" href="navbar.php"><i class="fa fa-fw fa-home"></i> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="admin.php"></i> Admin Staff </a> 
  <a href="bsisfaculty.php"></i> BSIS Faculty</a> 
  <a href="myshop.php"></i>Crud Activity</a>
  <a href="list.php"></i>Listing</a>   
  <a href="cv.php"></i>CV</a>  
  <a href="clock.php"></i>Clock</a>  
  <a href="login.php"></i>LOG OUT</a>       
    </ul>
  </div>
</nav><br><br><br>
<img src="bsislogo.jpg.png" height="200" width="200">
<h1> faculty <span> of bsis </span> </h1>
<div class="container">
<div class="row">
	<div class="tree">
		<ul>
			<li> <a href="#"><img src="james.jpg"><span><h3>JAMES NICHOLAS S. BESINGA</h3>
			     <p>Head of BSIS Department</p></span></a>
				<ul>
				    <li> <a href="#"><img src="angelica.jpg"><span><h3>ANGELICA V. PACRIS</h3>
					</span></a></li>
					<li><a href="#"><img src="marynol.jpg"><span><h3>MARYNOL VIRGIE P. LOFRANCO</h3>
					</span></a></li>
					<li><a href="#"><img src="themalabisto.jpg"><span><h3> THELMA G. LABISTO</h3>
					</span></a></li>
                    <li><a href="#"><img src="menavatar.png"><span><h3> JULIUS JESS T. ESTOSE</h3>
					</span></a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
</div>
</body>
</html>