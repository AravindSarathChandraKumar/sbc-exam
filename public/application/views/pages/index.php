<!DOCTYPE html>
<html>
<head>
	<title>SBC EXAM PORTAL</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<div class="row">

      <div class="col s12 #039be5 light-blue darken-1 z-depth-5">
        <!-- Grey navigation panel -->
        	<h3 class="left-align flow-text white-text col l4">SBC EXAM PORTAL</h3>



      </div>
  </div>


     	<div class="row">
    		<div class="col s12 l5 offset-l3">
     			<div class="card">
        			<div class="card-image">
        				 <img src="http://www.sbce.ac.in/upload/home_slider/1436291416_BUILDING_JOINING.jpg">
        					<span class="card-title"> Student</span>
        						  <a class="btn-floating halfway-fab waves-effect waves-light blue" href="admin_login.html">
        						  	<i class="material-icons">account_balance</i></a>
       					 </div>

       					 <div class="card-content">
       					   <p><form class="myForm" action="<?=base_url('index.php/First/admin');?>" method="post">
      								<div class="row">
      								  <div class="input-field ">
     								     <i class="material-icons prefix">account_circle</i>
     								     <input id="icon_prefix" type="text" class="validate" name="username">
     								     <label for="icon_prefix" class="active">Username</label>
     								   </div>
     								   <div class="input-field ">
    								      <i class="material-icons prefix">lock</i>
    								      <input id="icon_telephone" type="password" class="validate" name="password">
    								      <label for="icon_telephone" class="active">Password</label>
										</div>
										<button class="btn waves-effect waves-light blue col offset-l1" type="submit" name="action">Submit
    									<i class="material-icons right">send</i>
 										 </button>
   									   </div>
  								  </form>
       						</p>
       					 </div>
    				  </div>
   					 </div>
 			 </div>

     </div>



</body><script>
  $(document).ready(function() {
    Materialize.updateTextFields();
  });</script>
<!--<div class="footer-copyright">
            <div class="container">
            © 2017 Copyright CRYPSTAL
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
</div>-->


</html>
