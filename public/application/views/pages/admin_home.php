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
<nav class="nav-extended wavaes light-blue">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">e-SBC</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="admin_home.html">Users</a></li>
        <li><a href="exam_home.html">Exam</a></li>
        <li><a href="result_home.html">Result</a></li>
      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">
        
         <li class=""><a href="#" class="blue-text">Aditya V</a></li>
        <li><a href="admin_home.html">Users</a></li>
        <li><a href="exam_home.html">Exam</a></li>
        <li><a href="result_home.html">Results</a></li>
      </ul>
    </div>
</nav><br><br>
<div class="row">
<div class="col m7 push-m7 ">
	<h4>REMOVE USER</h4>
	<form class="col s9">
	<div class="row">
					<div class="input-field col m9">
						<input id="regnum" type="text" class="validate">
						<label for="register number">Register Number</label>
					</div>
				</div>
      <div class="row">
        <div class="input-field col m9">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
	 <button class="btn waves-effect red darken-4" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
	
    </form>
	
  
	</div>

	<div class="col m5 pull-m6  m ">
		<h4>CREATE USER</h4>
			<form class="col m12">
				<div class="row">
					<div class="input-field col m9">
						<input value="" id="first_name" type="text" class="validate">
						<label class="active" for="first_name2">Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m9">
						<input id="regnum" type="text" class="validate">
						<label for="register number">Register Number</label>
					</div>
				</div>
      <div class="row">
        <div class="input-field col m9">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
	   <button class="btn waves-effect  purple darken-4" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
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
 $(document).ready(function() {
    Materialize.updateTextFields();
  });

  </script>


</html>