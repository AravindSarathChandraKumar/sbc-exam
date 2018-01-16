<!DOCTYPE html>
<html>
<head>
	<title>SBC EXAM PORTAL</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
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
           <div class="col s12 m6">
             <div class="card blue-grey darken-1">
               <div class="card-content white-text">
                 <span class="card-title">Your result</span><hr><br>
                 <p>You got:- <b><?=$mark?> / <?=$noQstn?></b></p><br>
                 <p>In percent:-<b><?php echo $mark/$noQstn*100; ?>%</b></p>
               </div>
               <div class="card-action">
              <form class="" action="<?=base_url('index.php/First/Submit');?>)" method="post">
                <button type="submit" name="submit" value="" class="waves-effect waves-light btn">Submit</button>

              </form><br>
              <form class="" action="index.html" method="post">
                <button type="submit" name="submit"class="waves-effect waves-light btn" disabled>Reattempt</button>

              </form>
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


</html>
