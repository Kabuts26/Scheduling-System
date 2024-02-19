<div class="container-fluid mb-4 mt-3">
			<div class="row">
				
				<div class="col-md-12">
<nav class="navbar navbar-expand-lg navbar-light">
	 <a class="navbar-brand" href="#"><img src="../img/logoo.png" width="50" height="50" > LAW OFFICE SCHEDULING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a  class="nav-link"  href="admindash.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link"  href="atty.php">ATTORNEY's</a>
      </li>
        <li class="nav-item ">
        <a  class="nav-link" href="appoint.php">APPOINTMENT</a>
      </li>
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-5" method="POST" action="products.php?id=4">
      <input name="input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn-light text-black btn-outline-white my-2 my-sm-0" type="submit" name="search">Search</button>
    </form>

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
	