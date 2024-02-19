<div class="container-fluid mb-4 mt-3">
			<div class="row">
				
				<div class="col-md-12">
<nav class="navbar navbar-expand-lg navbar-light">
	 <a class="navbar-brand" href="#"><img src="img/logoo.png" width="50" height="50" > LAW OFFICE SCHEDULING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a style="font-family: Cooper Black; font-size: 20px;" class="nav-link"  href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a style="font-family: Cooper Black; font-size: 20px;" class="nav-link"  href="atty.php">ATTORNEY's</a>
      </li>
        <li class="nav-item ">
        <a style="font-family: Cooper Black; font-size: 20px;" class="nav-link" href="appoint.php">APPOINTMENT</a>
      </li>
     
      
     
    </ul>
    <a href="chatbox.php" class="mr-5">
   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
</a>

       <div class=" dropdown">
  <button class="btn btn-info dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['logged_in']?>

   <i class="bi bi-person-square"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton bg-primary">
    <a class="dropdown-item mt-2" href="logout.php"><i class="bi bi-box-arrow-right"></i> LOG OUT</a>
  </div>
</div>
     
  </div>
</nav>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  

 $(function () {
  // this will get the full URL at the address bar
  var url = window.location.href;
  // passes on every "a" tag
  $(".navbar-nav .nav-link").each(function () {
    // checks if its the same on the address bar
    if (url == (this.href)) {
      $(this).closest("li").addClass("active");
      //for making parent of submenu active
      $(this).closest("li").parent().parent().addClass("active");
    }
  });
});
</script>
	