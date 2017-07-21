
<!DOCTYPE html>
<html lang="en">
<head>

 <?php include 'connection.php' ;
if(isset($_POST['returnbooksubmit']))
{
	
	    
			 $returnby= $_POST['returnby'];
			 $returndate= $_POST['returndate'];
        $returnbook = $_POST['returnbook'];
		  $fine = $_POST['fine'];
		   $sql13="update books set Quantity=Quantity+1 where BookTitle='".$returnbook."'";
		   $res13=mysqli_query($con,$sql13);
		  $sql4 = "insert into ReturnDetails values('$returnby','$returndate','$returnbook','$fine')";
	      $res4=mysqli_query($con,$sql4) or ("".mysqli_error($con));
session_start();
if(isset($_SESSION['cardno']))
    {
		  $cardno=$_SESSION['cardno'];
		  
	
	$sql8 = "Delete From issued where Card_No='".$cardno."'";
	$res8=mysqli_query($con,$sql8);
	
	
	
              if($res8==1 && $res13==1){
				  header("Location:http://localhost/Lib/IssueDetailsView.php");
               // echo '<script> window.open(http://localhost/Lib/BookDetailsView.php","_self")</script>';
             }else {
               echo "ERROR";
             }
	}
}
?>
  <title>Book Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #111;
     // background-image: url("lib1.jpg");
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
       <li><a href="index.php">Logout</a></li>
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
                <div class="panel-heading">Return Details</div>
                <div class="panel-body">
                    <form role="form" method="post" action="ReturnDetailsProcess.php" >
        
                        <label for="btitle">Return By</label>
                         <select id="returnby" class="form-control" name="returnby">
       <option value=""> --------Return By-------- </option> 
    <?php include 'connection.php';
session_start();
if(isset($_SESSION['cardno']))
    {
		  $cardno=$_SESSION['cardno'];
         $dd_res1=mysqli_query($con,"SELECT Distinct IssuedTo FROM issued where Card_No='".$cardno."' ");
		 
         while($row=mysqli_fetch_row($dd_res1))
         { 
	        // echo "<option value='" . $row['IssuedTo'] ."'>" . $row['IssuedTo'] ."</option>";
               echo "<option value='$row[0]'> $row[0] </option>";
         }
	}
     ?>
	 
</select>
                         <label for="returndate">Return Date</label>
                       <input type="date" class="form-control" id="returndate"  name="returndate">

                         <label for="authorname">Return Book</label>
                        <select id="returnbook" class="form-control" name="returnbook">
       <option value=""> --------Return Book-------- </option> 
    <?php include 'connection.php';
	session_start();
if(isset($_SESSION['cardno']))
    {
		  $cardno=$_SESSION['cardno'];
         $dd_res3=mysqli_query($con,"SELECT Distinct IssuedBook FROM issued where Card_No='".$cardno."'");
		 
         while($row=mysqli_fetch_row($dd_res3))
         { 
	        // echo "<option value='" . $row['IssuedTo'] ."'>" . $row['IssuedTo'] ."</option>";
               echo "<option value='$row[0]'> $row[0] </option>";
         }
	}
     ?>
	 
</select>
						
                         <label for="fine">Fine</label>
                        <?php include 'connection.php';
	
		  $cardno=$_SESSION['cardno'];
         $dd=mysqli_query($con,"select if ((DATEDIFF(CURDATE(),IssuedDate) - 10)<0 ,0 ,DATEDIFF(CURDATE(),IssuedDate)-10 )*2 as Fine from issued where Card_No='".$cardno."'");
	$row = mysqli_fetch_array($dd,MYSQLI_BOTH);
	 
	  ?>
      <input type="numeric" id="fine" class="form-control" name="fine"   value="<?= $row[0]; ?>" readonly>
						<br>
                        <center><input type="submit" class="btn btn-primary m-t-10"  name="returnbooksubmit" value="Submit Return Details"></center>
                        
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
  <p>Project Done By <a href="Contact.php" data-toggle="tooltip" title="Visit Contact">  Akshatha Chawan
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
