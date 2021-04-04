<html>
	   <head>
            <title> </title>
       </head>
	   
	          <body>
	                <?php
			$Name="";
			$err_Name="";
			$Username="";
			$err_Username="";
			$Password="";
			$err_Password="";
			$Confirm_Password="";
			$err_Confirm_Password="";
			$Email="";
			$err_Email="";
			$hasError=false;
			
			
			
			$Gender="";
			$err_Gender="";
			
			
			$Bio="";
			$err_Bio="";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["Name"]))
      {
  		$err_Name = "Name required*";
		$hasError=true;
  	}
     else if(strlen($_POST["Name"])<5)
  	 {
  	  $err_Name="Enter valid name";
	  $hasError=true;
	  
  	 }
  	 else
     {
  		 $Name=htmlspecialchars ($_POST["Name"]);
  	 }
	  if (empty($_POST["Username"]))
      {
  		$err_Username = "Username required*";
		$hasError=true;
  	}
     else if(strlen($_POST["Username"])<5)
  	 {
  	  $err_Username="Enter valid Username";
	  $hasError=true;
	  
  	 }
  	 else
     {
  		 $Name=htmlspecialchars ($_POST["Name"]);
  	 }
  	     if (empty($_POST["Password"]))
      {
  		$err_Password = "Password required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Password"])<8)
  	 {
  	  $err_Password="Password must contain at least 8 character,,1 number and combination of uppercase and lowercase alphabet 1 special character(only check # or ?).";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Password=$_POST["Password"];
  	 }
	  if (empty($_POST["Confirm Password"]))
      {
  		$err_Confirm_Password = "Confirm Password required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Confirm Password"])<8)
  	 {
  	  $err_Confirm_Password="Confirm Password must be Atleast 8 charecter";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Confirm_Password=$_POST["Confirm Password"];
  	 }
	 
	 
	  if (empty($_POST["Enter Your Email Address"]))
      {
  		$err_Email = "Email Address required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Enter Your Email Address"])<8)
  	 {
  	  $err_Email="4. Conditions must contain @ and at least one .(dot) after @";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Email=$_POST["Enter Your Email Address"];
  	 }
  	  if (empty($_POST["Gender"]))
      {
      $err_Gender = "Gender required*";
	  $hasError=true;
      } else
       {
       $Gender =$_POST["Gender"];
      }

  	
       if(empty($_POST["Bio"])){
					$err_Bio="Enter a text ";
					$hasError=true;
				}
				
				else{
					$Bio=$_POST["Bio"];
				}
				
				if(!$hasError)
				{
					echo "Username: $Name";
				}
				
    


   }		?>



<fieldset>

         <legend><h1>Register to Panda Delivery</h1></legend>
		 
		 
		 <form action= "loginpage.php" method="post">
			<table>
				<tr>
					<td><span>Name </span></td>
					
					<td>:<input type="text"  name="Name" value="<?php echo $Name?>"<span><?php echo $err_Name?>
					
					</span></td>

				</tr>
				<tr>
					<td><span>Username </span></td>
					
					<td>:<input type="text"  name="Username"value="<?php echo $Username?>" <span><?php echo $err_Username?>
					
					</span></td>

				</tr>
				<tr>
				<td><span>Password</span></td>
					<td>:<input type="Password"name="Password" value="<?php echo $Password?>"<span><?php echo $err_Password
					?></span></td>
				</tr>
				<tr>
				<td><span>Confirm Password</span></td>
					<td>:<input type="Password" name="Confirm Password"value="<?php echo $Confirm_Password?>" <span><?php echo $err_Confirm_Password?>
					</span></td>
				</tr>
				<tr>
				<td><span>Email</span></td>
					<td>:<input type="Email" name="Email" value="<?php echo $Email?>"<span><?php echo $err_Email?>
					
					</span></td>
				</tr>
				
				
				
				
				
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="Gender" >Male<input type="radio" value="Female" name="Gender" >Female  <br><span><?php echo $err_Gender
					?></span></td>
				</tr>
				<tr>
					<td><span>Where did you hear about us?</span> </td>
					<td> <input type="checkbox" value="A Friend or Colleague" name="Hobbies[]">A Friend or Colleague<br>
					     <input type="checkbox" value="Google" name="Hobbies[]">Google<br>
					     <input type="checkbox" value="Blog Post" name="Hobbies[]">Blog Post<br>
						 <input type="checkbox" value="News Article" name="Hobbies[]">News Article<br>
						 

						
				    </td>
				</tr>
				
				
					<td align="center" colspan="2"><input type="submit" name="register" value="register"></td>
				</tr>

			</table>


		</form>


</fieldset>
</body>
</html>

