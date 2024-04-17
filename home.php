<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body{
background-color: white;
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
			width: 140px; 
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
<middle>
</body> 
</html>
