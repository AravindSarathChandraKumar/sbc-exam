<html>
<title>SBC EXAM PORTAL</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<nav class="nav-extended wavaes light-blue">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">e-SBC</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?=base_url('/index.php/First/view/admin_home')?>" >Users</a></li>
        <li  class="active"><a href="#">Exam</a></li>
        <li><a href="#">Result</a></li>
				<li><a href="<?=base_url('/index.php/First/logout')?>">Logout</a></li>
      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

         <li class=""><a href="#" class="blue-text">Aditya V</a></li>
        <li ><a href="#">Users</a></li>
        <li class='active'><a href="#">Exam</a></li>
        <li><a href="#">Results</a></li>
				<li><a href="<?=base_url('/index.php/First/logout')?>">Logout</a></li>
      </ul>
    </div>
</nav><br><br>
<div class = "container">
  <h4>CREATE USER</h4>
    <form class="col m12" action="<?=base_url('/index.php/First/createQuestion')?>" method="post">
      <div class="row">
        <div class="input-field col m9">
          <input value="" id="first_name" type="text" class="validate" name="title" required>
          <label class="active" for="first_name2">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m9">
          <input value="" id="first_name" type="text" class="validate" name="noQstn" required>
          <label class="active" for="first_name2">NO of Questions</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m9">
          <input id="regnum" type="text" class="validate" name="author" required>
          <label for="register number">Author</label>
        </div>
      </div>
    <div class="row">
      <div class="input-field col m9">
        <input id="password" type="text" class="validate" name="semester" required>
        <label for="password">Semester</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m9">
        <input id="password" type="text" class="validate" name="QstnId" required>
        <label for="password">Question Paper Id</label>
      </div>
    </div>


   <button class="btn waves-effect  purple darken-4" type="submit" name="action">Submit
  <i class="material-icons right">send</i>
  </button>
  </form>
</div>
<script>
// Show sideNav
   $(".button-collapse").sideNav();
 $(document).ready(function() {
    Materialize.updateTextFields();
  });

  </script>
  </html>
