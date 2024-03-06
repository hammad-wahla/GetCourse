
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/getweb.css">
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">GET COURSE</label>
        <ul>
          <li><a class="active" href="login.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="servises.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="feedback.html">Feedback</a></li>
        </ul>
      </nav>
      <center><div class="full">
    <div style="height: 500px; width: 100%;">

        <div class="divsty">
            <center><form method="post" class="formsty" >
                <input class="insty"  name="f_i" type="text" placeholder="Enter email or phone number" ><br><br>
                <input class="insty" name="s_i" type="password" placeholder="Password" >
            
            <a href="servises.html"><button  class="btnsty" >Login</button></a></form><br>

            <?php 
if ($_POST){
	$First=$_POST['f_i'];
	$Second=$_POST['s_i']; 
		if(empty($First) || empty($Second)  ){
		echo "Fill All The Fields <br />";
           
		}   
    // elseif(!is_numeric($Second)){
    //   echo "Put Numeric Values In Password ";
    // }
		
    else{
      header("Location: login.html");
    }
   
       
    }
	?>
            
            <hr style="border: .5 solid black ; margin-top: 20px; margin-right: 11px; margin-left: 11px;">
            <a href="register.php" ><button  class="btnnsty">Register</button> </a> </center>
        
        </div>
        <div class="divsty2">
            <h1 style="color:black; font-family: 'Times New Roman', Times, serif ; font-size:390%";>Welcome</h1></div>
            <div class="divsty3"><p style="font-size: 180%; font-family: 'Times New Roman', Times, serif;" >To Design & Web Development Course it <br> includes <b>HTML, CSS, BOOTSTRAP, PHP  <BR> JAVASCRIPT, JQUERY</b> and many other <br> languages.</p>
        
        
        </div>
        </div><br>
      </div>      
    </center>
</body>
</html>