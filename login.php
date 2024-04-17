<!DOCTYPE htlm>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="lorenjava.js"> </script>
  <link rel="stylesheet" href="loginpage.css">
</head>
<style>
    body{
	 font-family: sans-serif;
	 width: 500px;
	 height: 30px;
    }

.box h1{
	color: white;
	font-weight: 1000;
	font-size: 72px;
	margin-top: 70px;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 4px;
	line-height: 23px;
}

h1 span{
	color: deepskyblue;
}

.logo{
	border-radius: 50%;
}


.container{
    display: none;
    width: 1000px;
    padding: 100px;
    background: rgba(255, 255, 255, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.18);
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
	background-color: transparent;
	height: 500px;
	text-align: center;
	border-radius: 10px;
}
	
	
.box button[type="submit"]{
	font-size: 24px;
	margin: 10px auto;
	text-align: center;
	border: 1px solid pink;
	padding: 15px 15px;
	color: black;
	border-radius: 10px;
	transition: 1px;
	cursor: pointer;
	background-color: pink;
    }
	
.box button[type="reset"]{
	font-size: 24px;
	margin: 10px auto;
	text-align: center;
	border: 1px solid pink;
	padding: 15px 15px;
	color: red;
	border-radius: 10px;
	transition: 1px;
	cursor: pointer;
	background-color: pink;
    }
	


.box [type="password"]{
	font-size: 24px;
	margin: 10px auto;
	text-align: center;
	border: 1px solid pink;
	padding: 25px 25px;
	color: black;
	border-radius: 10px;
}

.box [type="text"]{
	font-size: 24px;
	margin: 10px auto;
	text-align: center;
	border: 1px solid pink;
	padding: 20px 20px;
	color: black;
	border-radius: 10px;
}


.show-btn{
    padding: 10px 20px;
    font-size: 20px;
    font-weight: 700;
    color: white;
    cursor: pointer;
   background: -webkit-linear-gradient(90deg, #634dff, #5fd4ff);
}

.show-btn{
    position: absolute;
    top: 5%;
    left: 6%;
    transform: translate(-50%, -50%);
}

input[type="checkbox"]{
    display: none;
}

#show:checked ~ .container{
    display: block;
}

.container .close-btn{
    position: absolute;
    right: 20px;
    top: 100px;
    font-size: 25px;
    cursor: pointer;
}

.close-btn:hover{
    color: red;
}

</style>

<body>
<img class="dtc" src="dtc.jpg.jpg" height="725" width="1520">
    <input type="checkbox" id="show">
    <label for="show" class="show-btn">View Form</label>
	  <div class="container">
  <form class="box" action="/CARMONA/navbar.php" method="post">
  <br>
  <img class="logo" src="dtclogo.jpg" height="250" width="250">
  <h1> Da |<span> NOW </span> </h1><br>
     <input type="text" name="username" placeholder="Username" id="username" required>
	 <br>
     <input type="password" name="userpassword" placeholder="Userpassword" id="userpassword" required>
	 <br>
     <button type="submit">Login</button>
	 <button type="reset"> Cancel </button>
	 <br>
  </form>
</body>
</html>
