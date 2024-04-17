<!DOCTYPE html>
<html>
<script src="lorenjava.js"></script>
<link rel="stylesheet" href="box.css"> 
<style>

      
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
    float: right;
  content: "";
  display: table;
  clear: both;
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
</nav>

<br><br>
<div class="row">
  <div class="column">
<h3> ORDERED LIST </h3>
<p> LOREN'S SIBLINGS (Oldest-youngest): </p>
<ol>
    <li> Genilyn Carmona </li>
	<li> Leordan Carmona </li>
	<li> Loren Carmona </li>
	<li> Leo Orapa </li>
	<li> Dante Carmona </li>
	<li> Dandy Carmona </li>
</ol>

<h3> UNORDERED LIST </h3>
<p> HOBBIES: </p>
<p> Genilyn <p>
<ul>
    <li> Dancing </li>
	<li> Cooking </li>
</ul>

<p> Leordan <p>
<ul>
    <li> Loves math solving </li>
</ul>
<p> Loren <p>
<ul>
	<li> Dancing </li>
	<li> Creating Spoken Poetry </li>
</ul>

<p> Leo <p>
<ul>
    <li> Drawing </li>
	<li> Loves playing mobile games </li>
</ul>

<p> Dante <p>
<ul>
    <li> Loves playing mobile games </li>
	<li> Singing </li>
</ul>

<p> Dandy <p>
<ul>
    <li> Loves playing mobile games </li>
	<li> Singing </li>
</ul>
</div>

<div class="column">
<h3> DESCRIPTION LIST </h3>
<p> BIRTHDAY: <p>
<dl>
    <dt> Genilyn </dt>
	   <dd> - Born on April 6, 1998. </dd><br>
	<dt> Leordan </dt>
	   <dd> - Born on July 18, 1999. </dd><br>
	<dt> Loren </dt>
	   <dd> - Born on April 2, 2001. </dd><br>
	<dt> Leo </dt>
	   <dd> - Born on February 22, 2004. </dd><br>
	<dt> Dante </dt>
	   <dd> - Born on September 18, 2006. </dd><br>
	<dt> Dandy </dt>
	   <dd> - Born on September 18, 2006. </dd><br>
</dl>
<h3> NESTED LIST </h3>
<p> AGE - YEAR LEVEL ATTENDED: </p>
<ol>
    <li> Genilyn
	   <ul>
	       <li> 25 </li>
		   <li> ALS Passer </li>
	   </ul>
	  
	 <li> Leordan
	   <ul>
	       <li> 24 </li>
		   <li> IT Graduate </li>
	   </ul>


    <li> Loren
	   <ul>
	       <li> 22 </li>
		   <li> 1st Year College </li>
	   </ul>
	   
    <li> Leo
	   <ul>
	       <li> 19 </li>
		   <li> 1st Year College </li>
	   </ul>

    <li> Dante
	   <ul>
	       <li> 17 </li>
		   <li> Grade 12 </li>
	   </ul>

    <li> Dandy
	   <ul>
	       <li> 17 </li>
		   <li> Grade 12 </li>
	   </ul> 
</ol>
</div>
</div>
</body>


