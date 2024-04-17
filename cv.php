<!DOCTYPE html> 
<html> 
<head> 
<script src="lorenjava.js"></script> 
<link rel="stylesheet" href="box.css"> 
<style> 
* {
  box-sizing: border-box;
  border-radius: 10px;
}

.column {
  float: left;
  width: 50%;
  padding: 30px;
  height: 300px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
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
</head> 
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
</nav>
<center>
<h3><i>Curriculum Vitae</i></h3>
</center>
<hr>
<div class="row">
  <div class="column">
<img src="loren.jpg" height="100" width="100">
<h1>Carmona, Loren O.</h1>
<br>
<h3>PERSONAL DETAILS</h3>
<hr>
<p><i>Address:</i>&emsp;&emsp;&emsp;Hibale, Danao, Bohol</p>
<p><i>Birthdate:</i>&emsp;&emsp; April 2, 2001</p>
<p><i>Nationality:</i>&emsp;&emsp;Filipino</p>
<p><i>Phone:</i>&emsp;&emsp;&emsp;&emsp;09120532822</p>
<p><i>E-mail:</i>&emsp;&emsp;&emsp;&emsp;carmonaloren042@gmail.com</p>

<h3>EDUCATION</h3>
<hr>
<p>Tertiary &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i>2022-2026</i></p>
<br>
<p>Secondary&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i>2009-2012</i></p>
<br>
<p>Primary &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i>2005-2009</i></p>
<br>
<h3>SKILLS & EXPERIENCE</h3>
<hr>
<p>I really enjoy composing Spoken Poetry.</p>
<p>Very good when it comes to interacting other people.</p>
<p>Am a well organized person.</p>
<p>Can do multi-tasking.</p>
<p>I am also a fast learner.</p>
</div>

  <div class="column">
  <img src="geralyn.jpg" height="100" width="100">
<h1>Macalandag, Geralyn S.</h1>
<br>
<h3>PERSONAL DETAILS</h3>
<hr>
<p><i>Address:</i>&emsp;&emsp;&emsp;Tabok, Danao, Bohol</p>
<p><i>Birthdate:</i>&emsp;&emsp; October 11, 2003</p>
<p><i>Nationality:</i>&emsp;&emsp;Filipino</p>
<p><i>Phone:</i>&emsp;&emsp;&emsp;&emsp;09104885161</p>
<p><i>E-mail:</i>&emsp;&emsp;&emsp;&emsp;jhera@gmail.com</p>

<h3>EDUCATION</h3>
<hr>
<p>Tertiary &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i>2022-2026</i></p>
<br>
<p>Secondary&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i>2015-2022</i></p>
<br>
<p>Primary &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i>2009-2015</i></p>
<br>
<h3>SKILLS & EXPERIENCE</h3>
<hr>
<p>I really enjoyed listening music in spotify.</p>
</div>

</body>
</html>