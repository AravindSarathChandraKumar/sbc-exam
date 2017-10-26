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
							<span class="card-title center"><h5 style="font-weight:bold;color:#4271f4">Verify e-mail</h5></span>
							<div class="card-action">
								<form method="post" action="<?=base_url('/index.php/First/verify')?>">

						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="text" class="validate" name="hash" required>
								<label for="text">Verification Code</label>
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
