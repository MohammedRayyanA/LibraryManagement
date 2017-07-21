<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Library Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
	  font-family: "Times New Roman", Times, serif;
       //font: 400 20px/0.6 Lato, sans-serif;
      color: #111111;
	 // background-color:#2d2d30;
	 background-color:#d2d2cf;
      //background-image: url("lib1.jpg");
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%);
  }
  h3, h4 {
	   font-family: "Times New Roman", Times, serif;
      margin: 10px 0 30px 0;
      letter-spacing: 5px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .mycontainer{
	  color:#111111;
	  padding: 80px 120px;
	  font-size=40px;
	   font-weight:bold;
  }
  .mycontainer h3{
	  text-align: center;
	   font-weight:bold;
	  padding: 80px 120px;
	  color:#111111;
	  font-family: "Times New Roman", Times, serif;
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
      height: 30%;
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
   <div id="band" class="mycontainer text-center">
  <h2>Library Rules</h2>
  
  <p><em>University Visveswarya College of Engineering!</em></p>
  <ul>
  <h3>
  <li type="square">Identity Card is compulsory for getting access to the library</li>
  <br>
 <li type="square">Silence to be maintained</li>
 <br>
  <li type="square">No discussion permitted inside the library</li>
  <br>
   <li type="square">Registration should be done to become a library member prior to using the library resources</li>
   <br>
    <li type="square">No personal belongings allowed inside the library</li>
	<br>
	 <li type="square">Textbooks, printed materials and issued books are not allowed to be taken inside the library</li>
	 <br>
	  <li type="square">Using Mobile phones and audio instruments with or without speaker or headphone is strictly prohibited in the library premises.</li>
	  <br>
	   <li type="square">Enter your name and Sign in the register kept at the entrance counter before entering library</li>
	   <br>
	    <li type="square">Show the books and other materials which are being taken out of the library to the staff at the entrance counter.</li>
		<br>
		 <li type="square">Library borrower cards are not transferable. The borrower is responsible for the books borrowed on his/her card.</li>
		 </h3>
</ul>
  <br>
</div>

 <br>
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
