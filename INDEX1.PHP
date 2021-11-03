<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
</head>
<style>
	fieldset{
		background-color: transparent;
		width: 25%;
		margin-top: 125px;
		border: none;

	}
.box{
			border: 1px solid black;
			border-radius: 20px;
			font-size: 14px;
            background-color: white;
            background-position: 20px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 14px;
}
.box:hover{
	border: 2px solid red;
}
#btn:hover{
	border: 2px solid red;
}
#btn{
	border-radius: 20px;
	font-size: 12px;
	width: 20%;
	border: 1px solid black;
	padding: 10px;
	padding-right: 10px;
}
body{
	background-image: url('https://backgroundcheckall.com/wp-content/uploads/2017/12/login-page-background-8.jpg');
	opacity: 0.5;
	background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
p{
	font-size: 3em;
	font-family: Timesnewroman;
	color: red;
}
</style>
<body><center>
	<fieldset>
	     <form action="login1.php" method="post" >
	     	<p>LOG IN</p>
        	<input class = "box" type="text" name="username" placeholder="User Name" required><br><br>
			<input class = "box" type="password" name="password" placeholder="Password" required><br><br> 
	        <button id="btn" type="submit">Login</button>
	     </form>  
	     </fieldset> </center>     
</body>
</html>

