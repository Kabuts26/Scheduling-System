
<style type="text/css">
  
  /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: black;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #FFEDDB;
    color: #BF9270;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: ;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #FFEDDB;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    color: #BF9270;
}

#sidebar ul li a:hover {
    color:  #fff;
    background: #EDCDBB;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #EDCDBB;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
    
}


ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #EDCDBB !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    color: black;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
</style>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="img/logo1.png" width="150">
               
            </div>
            <div class="list-group">
            <ul class="list-unstyled components navbar-nav" >
                <strong><p style="color: #BF9270; font-weight: bolder;">LAW OFFICE SCHEDULING SYSTEM</p></strong>
                <li class="nav-item">
                    <a  href="atty_dashboard.php" class="nav-link active" >DASHBOARD</a>
                  
                </li class="nav-link">
                <li class="nav-item">
                    <a  href="atty_profile.php" class="nav-link" >Profile</a>
                  
                </li class="nav-link">
                <li >
                    <a class="nav-link"  href="app_history.php">Appointment History</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="atty_appoint.php" >Pending Appointment</a>
                </li>
               
            </ul>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn" style="background-color: #FFEDDB; border: 2px #E3B7A0;">
          <i class="fas fa-align-left"></i>
          <span></span>
        </button>
        <button  class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-justify"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
           
          <div class=" dropdown">
  <button style=" border: 2px #BF9270; " class="btn dropdown-toggle mr-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

  <svg  xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#BF9270" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton bg-primary">

  <?php 
         include("connect.php");
          $id1=$_SESSION['logged_id'];

          $sqlget = "SELECT DISTINCT sender  FROM message where receiver='$id1'";
          $sqldata = mysqli_query($conn, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
      
        while ($row = mysqli_fetch_assoc($sqldata)) {
        echo "<a class='dropdown-item mt-2 ml-auto' href='atty_chatbox.php?sender=".$row['sender']."'><i class='bi bi-envelope'></i> ".$row['sender']."</a>";
  
        
        }

         ?>
    
  </div>
</div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
           
          <div class=" dropdown">
  <button style="background-color: #FFEDDB; border: 2px #E3B7A0; color: black;" class="btn btn-info dropdown-toggle text-black mr-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['logged_in']?>

   <i class="bi bi-person-square"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton bg-primary">
    <a class="dropdown-item mt-2 ml-auto" href="logout.php"><i class="bi bi-box-arrow-right"></i> LOG OUT</a>
  </div>
</div>
          </ul>
        </div>
      </div>
    </nav>

        

<script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
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

