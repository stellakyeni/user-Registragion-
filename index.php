<?php include_once 'server/dbc.php'; ?>
<!!DOCTYPE html>
<html>
<head>
<style>
body
{

	background-color:linen;
  
  border-style: solid;
  width:770px;
 height:620px;
   text-align: center;
  position:relative;
  margin: 2% auto;
  padding:10px
  border-style: solid;
  border-color: green;
 align:center;

}
h1
{
color:grey;
align:center;
border: 2px solid #4CAF50;
 text-align: center;
}

ul{
list-style-type: none;
margin: 0;
padding: 0;


}

ul li{
display: inline;

}

ul li a{
   color: white;
  text-align: center;
  padding: 6px 8px;
  text-decoration: none;
 
  background-color: #003366;

a.active
{
background-color: #4CAF50;
  color: white;
}
 a:hover {
  background-color: pink;
  color: black;
}
 
 
footer
{
 background-color: lightblue;
  color: red;
 bottom:5;
  text-align: center;
  position:relative;
 
}
 
</style>
</head>
<tittle>
</title>
<div>
<h1>
TECH CLUB TAITA TAVETA UNIVERSITY
</h1>
 
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="aboutUs.php">ABOUT US</a></li>
<li><a href="#">MEMBERS</a></li>
<li><a href="#">SCHEDULE</a></li>

</ul>


   <p>You have an account? Then click login</p>
    <label>
	  <div class="container">
	     <span class="psw1"><a href="login.php">login</a></span>
	 </div>

	  </label>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<body>
	<form action="server/connect.php" method="post">
	<div class="container">
	<table>
<tr><td> <label> First Name 
 </label></td><td><input type="text" placeholder="Enter first name" name="Firstname" required><td></tr>
  <tr><td> <label> Last Name
  </label></td><td><input type="text" placeholder ="Enter last name" name="Lastname" required></tr>
   <tr><td> <label> Email
   </label></td><td><input type="email" placeholder="Enter email" name="Email" required></tr>
    <tr><td> <label> Password 
	</label></td><td><input type="password" placeholder="password" name="password" required></tr>
	  <tr><td> <label> Reg number
	</label></td><td><input type="text" placeholder="Regnumber" name="Regnumber" required></tr>
	
	 <tr><td> <label> Phone number
	</label></td><td><input type="text" placeholder="Phonenumber" name="Phonenumber" required></tr>
	
	 <tr><td> <label> Gender
	 </label></td><td><input type="radio" name="gender" value="female"> Female
	 </label> <input type="radio" name="gender" value="Male"> Male</td></tr>
	 <tr><td>  <label> DOB
	  </label></td><td><input type="date" placeholder="enter DOB" name="DOB" required></tr>
	  <tr><td>  <label> Country
	   </label></td><td>
	   <select id="country" name="Country">
	    <option>...select...</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="kenya">kenya</option>
      <option value="uganda">Uganda</option>
      <option value="tanzamia">Tanzania</option>
    </select></td></tr>
	<tr><td>  <label> ID/passport
	   </label></td><td><input type="text" placeholder="enter ID/passport" name="id" required></tr>
	   <tr><td> <label> Tribe
	   </label></td><td> 
	   <select id="Tribe" name="Tribe">
	    <option>...select...</option>
      <option value="Not kenyan">Not kenyan</option>
      <option value="kamba">Kamba</option>
      <option value="Gikuyu">Gikuyu</option>
      <option value="Luhya">Luhya</option>
      <option value="taita">Taita</option>
      <option value="mijikenda">mijikenda</option>
	  <option value="kamba">Luo</option>
      <option value="Gikuyu">Ameru</option>
      <option value="Luhya"> kisii</option>
      <option value="taita">Pokot</option>
      <option value="mijikenda">Kuria</option>
	  <option value="kamba">Amasai</option>
      <option value="Gikuyu">Atharaka</option>
      <option value="Luhya">Kalenjin</option>
      <option value="taita">Somali</option>
      <option value="mijikenda">Giriama</option>
	  </select></td></tr>
	  	<tr><td>  <label> Image
	   </label></td><td><input type="file" name="image" required></td></tr>
	   </table>
	   </form>
	   <p>By registering with us you must agree to our
	   <span class="psw1"><a href="#" style="color:dodgerblue">
	   Terms & Privacy</a>.</p> <input type="checkbox" unchecked="unchecked" 
	  name="yes"></span> Agree<br>
	 
	   <button type="submit" value="submit" name="submit">Submit</button>
	   <footer>
	   	<p align="center">Copyright & copy; 2021 Designed by <a href="http://www.techclub.com">techclub</a></p>
	   </footer>
</body>
</html>

