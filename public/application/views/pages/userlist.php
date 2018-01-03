<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</head>
<body>

<nav>
    <div class="nav-wrapper blue lighten-1">
      <a href="#" class="brand-logo valign center"><?=$sem;?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

      </ul>
    </div>
  </nav>
<div class="container">
      <table>
        <thead>
          <tr>
              <th>REG ID</th>
              <th>NAME</th>
              <th>USERNAME</th>
              <th>MAIL-ID</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $results ):?>
          <tr>
            <td><?=$results{'reg_id'};?></td>
            <td><?=$results{'fname'};?></td>
            <td><?=$results{'username'};?></td>
            <td><?=$results{'email'};?></td>
          </tr>
        <?php endforeach;?>

        </tbody>
      </table>
</div>
</body>
</html>
