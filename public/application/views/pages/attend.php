
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
	<style>
		.que{
	border-style: solid;
	border-color:#4b86e5;

    border-width: 3px 0px 0px 3px;
	border-radius: 5px;
	padding: 10px;
}
	</style>

</head>
<body>
<nav class="nav-extended wavaes light-blue">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">e-SBC</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="<?=base_url('/index.php/First/logout')?>">  <?=$_SESSION['username']?></a></li>
        </ul>
</nav>

		<div class="col s12">

		</div>
      <div class="row">
		<div class="col s4"><span class="flow-text">
	  <br>
		<div class="row">
        <div class="col s12 m8">
          <div class="card light-blue">
            <div class="card-content white-text">
              <span class="card-title"><h6 style="text-align: center;">Question Navigation<h6>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-light btn" href="#1">01</a>
			  <a class="waves-effect waves-light btn"  href="#2">02</a>
			  <a class="waves-effect waves-light btn" href="#3">03</a>
			  <a class="waves-effect waves-light btn" href="#4">04</a>
			  <a class="waves-effect waves-light btn" href="#5">05</a>
			  <a class="waves-effect waves-light btn" href="#6">06</a>
			  <a class="waves-effect waves-light btn" href="#7">07</a>
			  <a class="waves-effect waves-light btn" href="#8">08</a>
			  <a class="waves-effect waves-light btn" href="#9">09</a>
			  <a class="waves-effect waves-light btn" href="#10">10</a>
			  <a class="waves-effect waves-light btn" href="#11">11</a>
			  <a class="waves-effect waves-light btn" href="#12">12</a>
			  <a class="waves-effect waves-light btn" href="#13">13</a>
			  <a class="waves-effect waves-light btn" href="#14">14</a>
			  <a class="waves-effect waves-light btn" href="#15">15</a>
			  <a class="waves-effect waves-light btn" href="#16">16</a>
			  <a class="waves-effect waves-light btn" href="#17">17</a>
			  <a class="waves-effect waves-light btn" href="#18">18</a>
			  <a class="waves-effect waves-light btn" href="#19">19</a>
			  <a class="waves-effect waves-light btn" href="#20">20</a>
            </div>
          </div>
        </div>
	  </div>
	  </div>

      <div class="col s8">
		<h6 style="text-align: center;">Questions</h6>
		<div class="que">
		 <div class="row">
			<div class="col s12" >
        <?php $max =[];?>
      <form action="<?=base_url('/index.php/First/evaluate')?>" method="post">
        <?php foreach ($question as $i=>$questions): ?>

              <?php $ir=$i+1;?>
              <p id="<?=$ir?>"><?=$ir.')  '.$questions['Question']?></p>

					<p>
						<input class="" type="radio" id='op1' name="chance_<?=$ir?>" value="<?=$questions['Option1']?>"/>
						<label for="op1"><?=$questions['Option1']?></label>
					</p>
					<p>
			      <input class="" type="radio" id='op2' name="chance_<?=$ir?>" value="<?=$questions['Option2']?>"/>
						<label for="op2" ><?=$questions['Option2']?></label>
					</p>
					<p>
					<input class="" type="radio" id="op3"  name="chance_<?=$ir?>" value="<?=$questions['Option3']?>"/>
						<label for="op3"><?=$questions['Option3']?></label>
					</p>
					<p>
						<input class="" type="radio" id="op4"  name="chance_<?=$ir?>" value="<?=$questions['Option4']?>"/>
						<label for="op4"><?=$questions['Option4']?></label>
					</p>
            <input id="" type="text" name="answer_<?=$ir?>" value="<?=$questions['answer']?>" style="visibility:hidden;">
          <?php $max[] = $questions['Id'];?>
        <?php endforeach;?>
        <input id="" type="text" class="validate" name="noQstn" value="<?=max($max)?>" style="visibility:hidden;">
        <input type="submit" name="submit" value="submit" class="waves-effect waves-light btn">
      </form>

			</div>
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
 $(document).ready(function() {
    Materialize.updateTextFields();
  });

  </script>


</html>
