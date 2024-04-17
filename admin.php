<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<style>
    img{
	border-radius: 50%;
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
.avatar {
    padding: 70px;
    position: absolute;
    top: 3%;
    left: 58%;
	text-align: center;
}

.accordion {
  max-width: 50%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  overflow: hidden;
  font-family: "Quicksand", sans-serif;
  background: #009578;
  position: relative;
  left: 25%;
}


.accordion__label,
.accordion__content {
  padding: 14px 20px;
}

.accordion__label {
  display: block;
  color: #ffffff;
  font-weight: 500;
  cursor: pointer;
  position: relative;
  transition: 0.1s;
}

.accordion__label:hover {
  background: rgba(0, 0, 0, 0.1);
}

.accordion__label::after {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 20px;
  width: 12px;
  height: 6px;
  background-image: url('data:image/svg+xml;utf8,<svg width="100" height="50" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 100,0 50,50" style="fill:%23FFFFFF99;" /></svg>');
  background-size: contain;
  transition: transform 0.4s;
}

.accordion__content {
  background: #ffffff;
  line-height: 1.6;
  font-size: 0.85em;
  display: none;
}

.accordion__input {
  display: none;
}

.accordion__input:checked ~ .accordion__content {
  display: block;
}

.accordion__input:checked ~ .accordion__label::after {
  transform: translateY(-50%) rotate(0.5turn);
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
<br><br>
<img src="dtclogo.jpg"  alt="avatar" class="avatar" height="215" width="215">
<br><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DANAO TECHNOLOGICAL COLLEGE </h1>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ADMIN STAFF </h1>
<div class="accordion">
  <div>
    <input type="radio" name="example_accordion" id="section1" class="accordion__input">
    <label for="section1" class="accordion__label">College President</label>
    <div class="accordion__content">
	<img src="arnelquino.jpg" height="200" width="200">
      <h3>DR. ARNEL B. QUINO,PhD</h3>
      <p>College President</p>
    </div>
  </div>  
   <div>
    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
    <label for="section2" class="accordion__label">VP-Academic Affairs</label>
    <div class="accordion__content">
		<img src="menavatar.png" height="200" width="200">
      <p>VP-Academic Affairs</p>
    </div>
  </div>
     <div>
    <input type="radio" name="example_accordion" id="section3" class="accordion__input">
    <label for="section3" class="accordion__label">Dean-BSCrim</label>
    <div class="accordion__content">
	<img src="menavatar.png" height="200" width="200">
      <h3>RYAN S. RICO</h3>
	  <p> Dean-BSCrim</p>
    </div>
  </div>
       <div>
    <input type="radio" name="example_accordion" id="section4" class="accordion__input">
    <label for="section4" class="accordion__label">Dean-BSIS</label>
    <div class="accordion__content">
		<img src="james.jpg" height="200" width="200">
      <h3>JAMES NICHOLAS S. BESINGA</h3>
	  <p> Dean-BSIS</p>
    </div>
  </div>
       <div>
    <input type="radio" name="example_accordion" id="section5" class="accordion__input">
    <label for="section5" class="accordion__label"> Head of BSTM </label>
    <div class="accordion__content">
	<img src="gemma.jpg" height="200" width="200">
      <h3>GEMMA D. PABATAO</h3>
	  <p>Head of BSTM</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section6" class="accordion__input">
    <label for="section6" class="accordion__label"> Academic Assistant </label>
    <div class="accordion__content">
	<img src="jennifer.jpg" height="200" width="200">
      <h3>JENNIFER G. TRAZO</h3>
	  <p>Academic Assistant</p>
    </div>
  </div>
    <div>
    <input type="radio" name="example_accordion" id="section7" class="accordion__input">
    <label for="section7" class="accordion__label"> NSTP Coordinator </label>
    <div class="accordion__content">
	<img src="june.jpg" height="200" width="200">
      <h3>JUNE Q. AYENTO</h3>
	  <p> NSTP Coordinator</p>
    </div>
  </div>
      <div>
    <input type="radio" name="example_accordion" id="section8" class="accordion__input">
    <label for="section8" class="accordion__label"> NSTP-ROTC Tactical NCO </label>
    <div class="accordion__content">
	<img src="menavatar.png" height="200" width="200">
      <h3>JOVENCIO B. SUPIEZA</h3>
	  <p> NSTP-ROTC Tactical NCO</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section9" class="accordion__input">
    <label for="section9" class="accordion__label">Director for Research & Extension Office</label>
    <div class="accordion__content">
	<img src="menavatar.png" height="200" width="200">
      <h3>VICENTE S. DAGANGON</h3>
      <p>Director for Research & Extension Office</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section10" class="accordion__input">
    <label for="section10" class="accordion__label">Registrar</label>
    <div class="accordion__content">
	<img src="menavatar.png" height="200" width="200">
      <h3>VIRGILIO P. COLUMNAS JR.</h3>
      <p>Registrar</p>
    </div>
  </div> 
  <div>
    <input type="radio" name="example_accordion" id="section11" class="accordion__input">
    <label for="section11" class="accordion__label">Executive Assistant</label>
    <div class="accordion__content">
	<img src="jamela.jpg" height="200" width="200">
      <h3>JAMELA B. CANDO</h3>
      <p>Executive Assistant</p>
    </div>
  </div> 
  <div>
    <input type="radio" name="example_accordion" id="section12" class="accordion__input">
    <label for="section12" class="accordion__label">Librarian</label>
    <div class="accordion__content">
	<img src="menavatar.png" height="200" width="200">
      <h3>NICANDRO M. PAGARAN</h3>
      <p>Librarian</p>
    </div>
  </div> 
   <div>  
    <input type="radio" name="example_accordion" id="section13" class="accordion__input">
    <label for="section13" class="accordion__label">Library Assistants</label>
    <div class="accordion__content">
	<img src="womenavatar.jpg" height="200" width="200">
      <h3>MA. NIZA S. CAMPO</h3>
      <p>Library Assistants</p>
	  <img src="womenavatar.jpg" height="200" width="200">
      <h3>ELSA T. CAMARINES</h3>
      <p>Library Assistants</p>
    </div>
  </div>
    <div>  
    <input type="radio" name="example_accordion" id="section14" class="accordion__input">
    <label for="section14" class="accordion__label">Major Education Faculty</label>
    <div class="accordion__content">
	<img src="miarose.jpg" height="200" width="200">
      <h3>MIA ROSE E. CASUSULA</h3>
      <p>Major Education Faculty</p>
	  <img src="jamela.jpg" height="200" width="200">
      <h3>JAMELA B. CANDO</h3>
      <p>Major Education Faculty</p>
	<img src="marynol.jpg" height="200" width="200">
      <h3>MARYNOL VIRGIE P. LOFRANCO</h3>
      <p>Major Education Faculty</p>
	  <img src="angelica.jpg" height="200" width="200">
      <h3>ANGELICA V. PACRIS</h3>
      <p>Major Education Faculty</p>
	<img src="gemma.jpg" height="200" width="200">
      <h3>GEMMA D. PABATAO</h3>
      <p>Major Education Faculty</p>
	  <img src="ruel.jpg" height="200" width="200">
      <h3>RUEL S. VILLAMOR</h3>
      <p>Major Education Faculty</p>
	<img src="menavatar.png" height="200" width="200">
      <h3>PETER JAYSON L. CAMPO</h3>
      <p>Major Education Faculty</p>
    </div>
  </div>
   <div>  
    <input type="radio" name="example_accordion" id="section15" class="accordion__input">
    <label for="section15" class="accordion__label">General Education Faculty</label>
    <div class="accordion__content">
	<img src="marygrace.jpg" height="200" width="200">
      <h3>MARY GRACE N. VIDAD</h3>
      <p>General Education Faculty</p>
	  <img src="themalabisto.jpg" height="200" width="200">
      <h3>THELMA G. LABISTO</h3>
      <p>General Education Faculty</p>
	  <img src="florence.jpg" height="200" width="200">
      <h3>FLORENCE S. FLORES</h3>
      <p>General Education Faculty</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section16" class="accordion__input">
    <label for="section16" class="accordion__label">VP-Administration Operation</label>
    <div class="accordion__content">
	<img src="magenciocelis.jpg" height="200" width="200">
      <h3>DR. MAGENCIO D. CELIS L.Mgt.D/Hum.D</h3>
      <p>VP-Administration Operation</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section17" class="accordion__input">
    <label for="section17" class="accordion__label">Student Affairs Officer</label>
    <div class="accordion__content">
	<img src="womenavatar.jpg" height="200" width="200">
      <p>Student Affairs Officer</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section18" class="accordion__input">
    <label for="section18" class="accordion__label">Admin Assistant/Secretary</label>
    <div class="accordion__content">
	<img src="womenavatar.jpg" height="200" width="200">
      <p>Admin Assistant/Secretary</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section19" class="accordion__input">
    <label for="section19" class="accordion__label">Admin Division Officer</label>
    <div class="accordion__content">
	<img src="jonnah.jpg" height="200" width="200">
      <h3>JONNAH D. GONZAGA</h3>
      <p>Admin Division Officer</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section20" class="accordion__input">
    <label for="section20" class="accordion__label">Property Custodian</label>
    <div class="accordion__content">
	<img src="marisa.jpg" height="200" width="200">
      <h3>MARISA C. GUISADO</h3>
      <p>Property Custodian</p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section21" class="accordion__input">
    <label for="section21" class="accordion__label">Security and Safety Officers</label>
    <div class="accordion__content">
	<img src="menavatar.png" height="200" width="200">
      <h3>NATHANIEL AYENTO</h3>
      <p>Security and Safety Officers</p>
	<img src="menavatar.png" height="200" width="200">
      <h3>JOEL SUPIEZA</h3>
      <p>Security and Safety Officers</p>
	<img src="menavatar.png" height="200" width="200">
      <h3>DANNY ESTILLORE</h3>
      <p>Security and Safety Officers</p>
    </div>
  </div>  
  <div>
    <input type="radio" name="example_accordion" id="section22" class="accordion__input">
    <label for="section22" class="accordion__label">Utility</label>
    <div class="accordion__content">
	<img src="womenavatar.jpg" height="200" width="200">
      <h3>ELVIRA SOCORIN</h3>
      <p>Utility</p>
	<img src="womenavatar.jpg" height="200" width="200">
      <h3>JULIET LOPEZ</h3>
      <p>Utility</p>
    </div>
  </div>
</body>
</html>

