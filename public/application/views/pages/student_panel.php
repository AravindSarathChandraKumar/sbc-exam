<html>
<head>
	<title>SBC EXAM PORTAL</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

<style>
a{color:white;}
</style>
</head>
<body>

	<nav class="nav-extended wavaes light-blue">
	    <div class="nav-wrapper container">
	      <a href="#" class="brand-logo">e-SBC</a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse">
	        <i class="material-icons">menu</i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li class="active"><a href="#" >Home</a></li>
	        <li><a href="<?=base_url('/index.php/First/view/student_qstn')?>">Option</a></li>

					<li><a href="<?=base_url('/index.php/First/logout')?>">Logout</a></li>
	      </ul>
	      <ul class="side-nav flow-text" id="mobile-demo">

	         <li class=""><a href="#" class="blue-text">Aditya V</a></li>
					 <li class="active"><a href="#" >Home</a></li>
 	        <li><a href="<?=base_url('/index.php/First/view/student_qstn')?>">OPTION</a></li>

 					<li><a href="<?=base_url('/index.php/First/logout')?>">Logout</a></li
	      </ul>
	    </div>
	</nav><br><br>
	<br>
	<br>
	  <div class="row">
		<div class="col m4">
			<div class="card  cyan darken-2">
            <div class="card-content white-text">
			 <i class="small material-icons">account_box</i>
              <span class="card-title">PROFILE</span><br>
						<?php foreach ($profile as $profiles ):?>
              <p><b>Name:-</b> <?=$profiles{'fname'};?></p><br>
							<p><b>Register no:-</b> <?=$profiles{'reg_id'};?></p><br>
							<p><b>E-mail:-</b> <?=$profiles{'email'};?></p><br>
							<p><b>Username:-</b> <?=$profiles{'username'};?></p><br>
						<?php endforeach;?>

            </div>
            <div class="card-action">

            </div>
          </div>
		</div>
      <div class="col m4">
		<div class="card cyan darken-2 ">
            <div class="card-content white-text">
			 <i class="small material-icons">assignment</i>
              <span class="card-title">NEW</span><br>
							  <?php foreach ($questions as $question ):?>
              <li><a href="<?=base_url('/index.php/First/attendQstn/'.$question{'QstnId'})?>" target="_blank"><?=$question{'Title'};?></a></li><br>

						<?php endforeach?>
            </div>
            <div class="card-action">

            </div>
          </div>
	  </div>
      <div class="col m4">
		<div class="card cyan darken-2">
            <div class="card-content white-text">
			 <i class="small material-icons">assessment</i>
              <span class="card-title">Last Exams</span>
              <p><?php print_r($UserResult);?></p>
            </div>
            <div class="card-action">

            </div>
          </div>
	  </div>
      </div>


</body>
<!--<div class="footer-copyright">
            <div class="container">
            © 2017 Copyright CRYPSTAL
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
</div>-->
<script>
// Show sideNav
   $(".button-collapse").sideNav();


  </script>


</html>
