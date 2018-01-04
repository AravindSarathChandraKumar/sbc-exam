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

<div class="container">
  <h1 class="center-align flow-text">Question Papers</h1 >

  <table>
        <thead>
            <tr>
              <th>Qstn Paper</th>
              <th>Title</th>
              <th>Auther</th>
              <th>Semester</th>
              <th></th>
              <th></th>
          </tr>

        </thead>

        <tbody>
          <?php foreach ($questions as $question ):?>
            <?php if ($question==''){
              echo 'No Questions found';
            }?>
            <tr>
              <td><?=$question{'Id'};?></td>
              <td><?=$question{'Title'};?>(<?=$question{'QstnId'};?>)</td>
              <td><?=$question{'Author'};?></td>
              <td><?=$question{'Semester'};?></td>
              <td>
                      <a class="btn btn-floating btn-small cyan pulse" type ><i class="material-icons">edit</i></a>

              </td>
              <form action="<?=base_url('/index.php/First/removeQuestion')?>"  method="post">
              <td><button class="btn btn-floating btn-small cyan pulse"  name="qstnId" value="<?=$question{'Id'};?>"><i class="material-icons">close</i></a></td>
              </form>
            </tr>
            <?php endforeach;?>
        </tbody>
      </table>
<hr>
  <form action="<?=base_url('/index.php/First/view/create_question')?>" target="_blank" method ="post">
    <button type="submit" class="waves-effect waves-light btn  offset-m6" >Create Question</button>
  </form>

</div>
</html>
