<html>
<title>SBC EXAM PORTAL</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">


<div class = "container">

    <form class="col m12" action="<?=base_url('/index.php/First/insertQuestion')?>" method="post" target="_blank">

  <?php for ($i = 1; $i < $noQstn+1; $i++) : ?>
    <div class="row">
      <div class="input-field col m3">
        <input value="<?=$i?>" id="first_name"name="question_no_<?=$i?>" disabled >
        <label class="active" for="first_name2">Question NO</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m9">
        <input value="" id="first_name" type="text" class="validate" name="question_<?=$i?>" required>
        <label class="active" for="first_name2">Question</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m3">
        <input value="" id="first_name" type="text" class="validate" name="op1_<?=$i?>" required>
        <label class="active" for="first_name2">Option 1</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m3">
        <input id="regnum" type="text" class="validate" name="op2_<?=$i?>" required>
        <label for="register number">Option 2</label>
      </div>
    </div>
  <div class="row">
    <div class="input-field col m3">
      <input id="password" type="text" class="validate" name="op3_<?=$i?>" required>
      <label for="password">Option 3</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col m3">
      <input id="password" type="text" class="validate" name="op4_<?=$i?>" required>
      <label for="password">Option 4</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col m3">
      <input id="password" type="text" class="validate" name="ans_<?=$i?>" required>
      <label for="password">Answer</label>
    </div>
  </div>



    <?php endfor; ?>
    <div class="input-field col m3" style="visibility:hidden;">
      <input id="" type="text" class="validate" name="noQstn" value="<?=$noQstn?>" required>
      <label for="password">Answer</label>
    </div>
    <div class="input-field col m3" style="visibility:hidden;">
      <input id="" type="text" class="validate" name="QstnId" value="<?=$QstnId?>" required>
      <label for="password">Answer</label>
    </div>
  </div>
    <button class="btn waves-effect  purple darken-4" type="submit" name="action" value="submit">Submit
   <i class="material-icons right">send</i>
   </button>
  </form>

</div>
