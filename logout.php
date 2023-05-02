<?php
session_start();
     
		 unset($_SESSION["user"]);

				 echo "<script>alert('you are now logged out!!!');location.href='Login.html';</script>";
		
	?>