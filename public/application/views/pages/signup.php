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
    </div>
	</nav>
	<div class="row">
       <div class="col m4"></div>

<div class="col m4">

			<div class="row">
				<div class="col m10 m12">
					<div class="card   brown lighten-5">
						<div class="card-content">
							<span class="card-title center"><h5 style="font-weight:bold;color:#4271f4">SIGN UP</h5></span>
							<div class="card-action">
								<form method="post" action="<?=base_url('/index.php/First/signup')?>">
						<div class="row">
							<div class="input-field col s9">
								<input value="" id="first_name" type="text" class="validate" name="fname" required>
								<label class="active" for="first_name2">Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s9">
								<input id="regnum" type="text" class="validate" name="regnum" required>
								<label for="register number">Register Number</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s9">
								<input id="regnum" type="text" class="validate" name="username" required>
								<label for="register number">Username</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s9">
								<input id="password" type="password" class="validate" name="password" required>
								<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" class="validate" name="email" required>
								<label for="email">Email</label>
							</div>
						</div>
						<button class="btn waves-effect center  purple darken-4 " type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						</button>
					</form>
							</div>

						</div>

					</div>
				</div>

			</div>
	  </div>
	<div class="col m4"></div>
    </div>
</body>
</html>
