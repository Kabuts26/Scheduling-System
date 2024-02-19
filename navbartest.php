<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="sidebar">
    <div class="list-group">
         <ul class="siderbar1">
              <li><a href="HhwController" class="active">Hoe het werkt</a></li>
              <li><a href="OveronsController" class="">Over ons</a></li>
             <li><a href="VpController" class="list-group-item">Veiligheid en privacy</a></li>
             <li><a href="FAQController" class="list-group-item">FAQ</a></li>
              <li><a href="Contactform" class="list-group-item">Contact</a></li>
          </ul>
     </div>
 </div>


 <script type="text/javascript">
 	  $('.siderbar1 a').on('click', function(e) {
        e.preventDefault();
        $('.siderbar1 a').removeClass('active');
        $(this).addClass('active');
    }) 
 </script>