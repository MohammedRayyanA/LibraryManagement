<?php include 'connection.php';

 $ID = $_POST['libusername'];
$Password = $_POST['libpassword'];

if(isset($_POST['submitlog'])) 
 { 
 session_start();
 //starting the session for user profile page 

 if(!empty($_POST['libusername']))
	 //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
 
	 {
		 
		 $query =mysqli_query($con,"SELECT * FROM librarian where Lib_UserName = '$ID' AND Lib_Password = '$Password'") or die("hh".mysqli_error($con)); 
		 $row = mysqli_fetch_array($query) or die("<script>window.open('LoginWrong.php','_self')</script>".mysqli_error($con)); 
		
		 if(!empty($row['Lib_UserName']) AND !empty($row['Lib_Password'])) 
		 { 
		 $_SESSION['Lib_UserName'] = $row['Lib_Password']; 
		
		     echo "<script>window.open('Second.php','_self')</script>";
		     
		  
		 }
		 else 
		 {
			 echo "<script>window.open('LoginWrong.php','_self')</script>";
			 }
			 }
     else{
	echo "Enter all the values";
}			 
			 } 
	
	
	 ?>
