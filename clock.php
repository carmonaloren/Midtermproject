<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="clock.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="lorenjava.js"></script> 
</head>
<style>
    *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	background: url(adminbc.jpg.jpg);
	background-repeat: no-repeat;
}
.digital-clock{
	position: relative;
	color: #fff;
	background: url(adminbc.jpg.jpg);
	width: 425;
	padding: 20px 45px;
	box-shadow: 0 5px 25px rgba(14,21,37,0.8);
	border-radius: 10px;
	display: flex;
    justify-content: center;
	align-items: center;
	flex-direction: column;
}
.time{
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
.hours, .dots, .minutes{
	display: flex;
	justify-content: center;
	align-items: center;
	font-weight: 600;
	padding: 0 10px;
	line-height: 125px;
}
.hours, .minutes{
	font-size: 6.5em;
	width: 125px;
}
.dots{
	font-size: 5em;
	color: #929292;
}
.hours{
	background: -webkit-linear-gradient(90deg, #634dff, #5fd4ff);
	-webkit-text-fill-color: transparent;
	-webkit-background-clip: text;
}
.minutes{
	background: -webkit-linear-gradient(90deg, #ff5e9a, #ffb960);
	-webkit-text-fill-color: transparent;
	-webkit-background-clip: text;
}
.right-side{
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	margin-left: 10px;
}
.period, .seconds{
	font-size: 1.2em;
	font-weight: 500;
}
.period{
	transform: translateY(-20px);
	background: -webkit-linear-gradient(90deg, #f7b63f, #faf879);
	-webkit-text-fill-color: transparent;
	-webkit-background-clip: text;
}
.seconds{
	transform: translateY(16px);
	background: -webkit-linear-gradient(90deg, #24ff6d, #2f93f1);
	-webkit-text-fill-color: transparent;
	-webkit-background-clip: text;
}
.dot-menu-btn{
	position: absolute;
	top: 0;
	right: 0;
	margin: 10px;
	color: #efefef;
	font-size: 1.5em;
	cursor: pointer;
}
.dot-menu{
	z-index: 999;
	list-style: none;
	background: #ccc;
	padding: 10px 20px;
	border-radius: 5px;
	box-shadow: 0 5px 25px rgba(0,0,0,0.5);
}
.menu-item{
	display: flex;
	justify-content: center;
	align-items: center;
}
.clock-format-text{
	color: #efefef;
	font-size: 0.9em;
	margin-right: 20px;
	
}
.format-switch-btn{
	width: 35px;
	height: 15px;
	background: #485470;
	border-radius: 75px;
	box-shadow: inset 2px 2px 4px rgba(255, 255, 255, 0.1),
	            inset -2px -2px 4px rgba(0, 0, 0, 0.2);
    cursor: pointer;
	display: flex;
	justify-content: center;
	align-items: center;
}
.format-switch-btn:before{
	content: '';
	position: absolute;
	width: 14px;
	height: 14px;
	background:  #ff5e9a;
	border-radius: 50%;
	box-shadow: 0 20px 50px #ff5e9a;
	transform: translateX(-10px);
	transition: 0.3s ease;
	transition-property: background, transform;
}
.format-switch-btn.active:before{
	background: #0bff8d;
	box-shadow: 0 5px 25px #0bff8d;
	transform: translateX(10px);
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
<center>
<br><br><br>
 <div class="digital-clock">
  <ul class="dot-menu">
   <li class="menu-item">
    <span class="clock-format-text"> 24-hour format </span>
	<div class ="format-switch-btn" data-format="12"></div>
   </li>
  </ul>
    <div class="time">
       <span class="hours"> 00 </span>
       <span class="dots"> : </span>
	   <span class="minutes"> 00 </span>
	   <div class="right-side">
	     <span class="period"> AM/PM </span>
		 <span class="seconds"> 00 </span>
	</div>
 </div>

</div>
<script>
 //Javascript for switch clock format 
 const formatSwitchBtn = document.querySelector(".format-switch-btn");
 
 formatSwitchBtn.addEventListener("click", () => {
   formatSwitchBtn.classList.toggle("active");
   
   var formatValue = formatSwitchBtn.getAttribute("data-format");
   
   if(formatValue === "12"){
      formatSwitchBtn.setAttribute("data-format", "24");
   }
   else{
      formatSwitchBtn.setAttribute("data-format", "12");
   }
   });
 //Get current time in javascript
function clock(){
  var today = new Date();

  var hours = today.getHours();
  var minutes = today.getMinutes();
  var seconds = today.getSeconds();
  let period = "AM";
  
  //Set the time period(AM/PM)
  if(hours >= 12){
     period = "PM";
	 }
	 
  //Set the 12-hour clock format
  var formatValue = formatSwitchBtn.getAttribute("data-format");
  if(formatValue === "12"){
      hours = hours > 12 ? hours % 12 : hours ;
   }
  
  //Add the 0 for the values lower than 10
  if(hours < 10){
	 hours = "0"+ hours;
	 }
	 
  if(minutes < 10){
	 minutes = "0"+ minutes;
	 }
	 
  if(seconds < 10){
	 seconds = "0"+ seconds;
	 }
  
  document.querySelector(".hours").innerHTML = hours;
  document.querySelector(".minutes").innerHTML = minutes;
  document.querySelector(".seconds").innerHTML = seconds;
  document.querySelector(".period").innerHTML = period;
  }
  var updateClock = setInterval(clock, 1000);
  
 
</script>
<br><br><br><br><br><br><br>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar">
    </div>
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
 </body>
 </html>
 
 