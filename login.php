
<html>
<head>
<style>
 
form{
background-color:linen;
	margin-top: 30px;
  margin-bottom: 20px;
  margin-right: 100px;
  margin-left: 100px;
  border-color: green;
border: 10px;
  font-size: 12px;
  font-weight: bold;
   

}
body
{
   background-image: url('tech2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
	margin-top: 50px;
  margin-bottom: 50px;
  margin-right: 460px;
  margin-left: 460px;
  
  border-style: solid;
  border-color: green;

}
h1{
color:grey;
align:center;
border: 2px solid #4CAF50;
 text-align: center;
}
h2
{
color:black;
align:center
 text-align: center;
 border: 1px solid #4CAF50;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  }
  button {
  background-color: #4CAF50;
  color: white;
  padding: 2px 2px;
  margin: 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.5;
}
</style>
<body>
 
<h1>
TECH CLUB TAITA TAVETA UNIVERSITY
</h1>
You don't have an account? Then click Register
    <label>
	  <div class="container">
	     <span class="psw1"><a href="index.php">Register</a></span>
	 </div>
	 
	
	  </label>
	  <h2> fill the details to login to your account</h2>
</head>
<title>
</title>
<h2>
<form action="connect.php" method="post">
<label for="reg no"><b>I.D/Passport</b></label>
    <input type="text" placeholder="Enter I.D/Passport"
	name="Reg number" required>
 <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email"
	name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder=
	"Enter Password" name="psw" required><br><br>
	 <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> 
	  Remember me
	  </label>
	   <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span> <br>
  </div>
</form>
</h2>
</body>
</html>