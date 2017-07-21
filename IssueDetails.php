<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'connection.php' ;
if(isset($_POST['submitissue'])){
          $cardno= $_POST['cardno'];
          $issueddate = $_POST['issueddate'];
		  $issuedby = $_POST['issuedby'];
          $issuedto = $_POST['issuedto'];
          $issuedbook= $_POST['issuedbook'];
          $res11= mysqli_query($con,"SELECT Quantity FROM Books as Quantity WHERE BookTitle = '$issuedbook'") or die("".mysqli_error($con)); 
		  $row11 = mysqli_fetch_row($res11);
		    $quantity=$row11[0];
		  if( $quantity >0){
			  $check=mysqli_query($con,"select * from issued where Card_No='$cardno' and IssuedTo='$issuedto'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      echo '<script language="javascript">';
                echo 'alert("Only One Book Will Be Given To Student")';
                   echo '</script>';
   } else{   
			   $sql3 = "insert into Issued values('$cardno','$issueddate','$issuedby','$issuedto','$issuedbook')";
	          $sql10 = "update books set Quantity=Quantity-1 where BookTitle='".$issuedbook."' AND Quantity>0";
               $res3=mysqli_query($con,$sql3);
              $res10=mysqli_query($con,$sql10);
   
              if($res3==1 && $res10==1){
				   header("Location:http://localhost/Lib/IssueDetailsView.php");
			  }else {
               echo "ERROR";
             }
   }
		  }else{
			  echo '<script language="javascript">';
                echo 'alert("Their Are No More Books")';
                   echo '</script>';
				  //header("Location:http://localhost/Lib/BookDetailsView.php");
               // echo '<script> window.open(http://localhost/Lib/BookDetailsView.php","_self")</script>';
             }
		  }
 ?>	

  <title>Issue Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #111;
      //background-image: url("lib1.jpg");
	   background-color:#d2d2cf;
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%);
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      height: 40%;
      margin: auto;
  }
  .carousel-caption h1 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  } 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 15px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  
  
  footer {
	  left:0px;
   bottom:0px;
   width:100%;
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Second.php">Library Management</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Student Details.php">Add Student</a></li>
            <li><a href="StudentDetailsView.php">Students List</a></li>
			<li><a href="UpdateStudentDetails.php">Update Students Details</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Books
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="BookDetails.php">Add Books</a></li>
            <li><a href="BookDetailsView.php">Books List</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Issue
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="IssueDetails.php">Issue Books</a></li>
            <li><a href="IssueDetailsView.php">Issued List</a></li>
          </ul>
        </li>
        <li><a href="ReturnDetails.php">Return of Book</a></li>
        <li><a href="Contact.php">Contact</a></li>
       <li><a href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Issue Details</div>
                <div class="panel-body">
                    <form role="form" method="post" action="IssueDetails.php">
                    
					     <label for="cardno">Card No</label>
                        <input type="number|text" id="cardno" class="form-control" name="cardno" placeholder="Example: 22A">
						
                        <label for="issuedate">Issue Date</label>
                        <input type="date" data-date="" data-date-format="YYYY MM DD" id="issuedate" class="form-control" name="issueddate" placeholder="Example: ">
                        
                        <label for="issuedby">Issued By</label>
                         <select id="issuedby" class="form-control" name="issuedby">
       <option value=""> --------Issued By-------- </option> 
    <?php include 'connection.php';
         $dd_res2=mysqli_query($con,"SELECT Distinct Lib_Name FROM librarian");
		 
         while($row2=mysqli_fetch_row($dd_res2))
         { 
	        // echo "<option value='" . $row['BookTitle'] ."'>" . $row['BookTitle'] ."</option>";
               echo "<option value='$row2[0]'> $row2[0] </option>";
         }
     ?>
	 
</select>
                         <label for="issuedto">Issued To</label>
                        <select id="issuedto" class="form-control" name="issuedto">
       <option value=""> --------Issued To-------- </option> 
    <?php include 'connection.php';
         $dd_res1=mysqli_query($con,"SELECT Distinct FirstName FROM student");
		 
         while($row1=mysqli_fetch_row($dd_res1))
         { 
	        // echo "<option value='" . $row['BookTitle'] ."'>" . $row['BookTitle'] ."</option>";
               echo "<option value='$row1[0]'> $row1[0] </option>";
         }
     ?>
	 
</select>
                         <label for="issuedbook">Issued Book</label>
                        <select id="issuedbook" class="form-control" name="issuedbook">
       <option value=""> --------Issued Book-------- </option> 
    <?php include 'connection.php';
         $dd_res=mysqli_query($con,"SELECT Distinct BookTitle FROM books");
		 
         while($row=mysqli_fetch_row($dd_res))
         { 
	        // echo "<option value='" . $row['BookTitle'] ."'>" . $row['BookTitle'] ."</option>";
               echo "<option value='$row[0]'> $row[0] </option>";
         }
     ?>
	 
</select>
                        <br>
                        <center><input type="submit" class="btn btn-primary m-t-10" name="submitissue" value="Submit Issue Details"></center>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Project Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">  Akshatha Chawan
  & MD Rayyan Ali</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>


</body>


</html>
