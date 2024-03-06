<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/getweb2.css">
</head>
<body>
	<div class="first">
		
	
	  <div class="container1">
	  	<div class="bdiv">
	  		<a href="login.php"><button class="bbtt"  type="Button" >X</button></a>
	  	</div>
	 	<div class="text">
	 	<b>Register</b>	
	 	</div>
	 	
	 	
	 </div>
	 <div class="container2">
	 	<center> <div class="fmsty"><form method="post" >
	 		<input class="in1" name="f_i" type="text" placeholder="User name">
	 		
	 		


		 	</div>
	 	
	 		<div class="fmsty1"><input class="in2" name="s_i" type="text" placeholder="Mobile number or email address"></div>
	 		<div class="fmsty2"><input class="in3" name="t_i" type="password" placeholder="New password"></div>
	 	
	 	<div class="lsty"><label>Payment Method</label></div>
	 	<div class="selsty"><select class="opsty">
            <option value="">Select</option> 
	 		<option>JazzCash</option>
	 		<option>Easy Paisa</option>
	 		<option>Visa</option>
	 		<option>MasterCard</option>
	 		<option>G Pay</option>
	 	</select>
		<input type="number" name="fr_i" class="in4" placeholder="Enter Card / Mobile no. ">
	 	</div>
	 	<div class="lsty"><label>Gender</label></div>
        <div class="gstl"><div class="gsty1">
        	<label >Male</label>
        	<input type="radio" name="gender">
	 	</div>
	 		<div class="gsty3">
	 		<label>Custom</label>
	 		<input type="radio" name="gender">
	 	</div>
	 	<div class="gsty2">
<label>Female</label>
	 		<input type="radio" name="gender">
	 	</div> </div>
	 
	 	
	 	<div>
	 		<center><a href="#"><button class="btnsty">Register</button></a></center>
	 	</div>
	</form><br>
	<?php
	if ($_POST){
		$First=$_POST['f_i'];
		$Second=$_POST['s_i']; 
		$Third = $_POST['t_i'];
		$Forth = $_POST['fr_i'];
			if(empty($First) || empty($Second) || empty($Third) || empty($Forth)  ){
			echo "Fill All The Fields <br />";
			   
			}   
		// elseif(!is_numeric($Second)){
		//   echo "Put Numeric Values In Password ";
		// }
			
		else{
		  header("Location: registrationSuccess.html");
		}
	   
		   
		}
		?>
	
	</center>
	 	
	 </div> 
	
	</div>

</body>
</html>