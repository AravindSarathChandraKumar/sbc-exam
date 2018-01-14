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
	        <li ><a href="<?=base_url('/index.php/First/view/student_panel')?>" >Home</a></li>
	        <li class="active"><a href="#">Option</a></li>

					<li><a href="<?=base_url('/index.php/First/logout')?>">Logout</a></li>
	      </ul>
	      <ul class="side-nav flow-text" id="mobile-demo">

	         <li class=""><a href="#" class="blue-text">Aditya V</a></li>
					 <li><a href="<?=base_url('/index.php/First/view/student_panel')?>" >Home</a></li>
 	        <li  class="active"><a href="">OPTION</a></li>

 					<li><a href="<?=base_url('/index.php/First/logout')?>">Logout</a></li
	      </ul>
	    </div>
	</nav><br><br>
