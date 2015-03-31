<?php session_start();
/**
 * Created by PhpStorm.
 * User: Sparagmos
 * Date: 3/31/15
 * Time: 11:43 AM
 */
?>
<?php

?>

<script>
    window.localStorage.test='testies';

</script>



<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/parseXml.js"></script>
  <script src="db.js"></script>

  <title>PostOP</title>
  <style>
    .rounded {
    padding-top: 20px;
      padding-bottom: 10px;
      border-radius:5px;
    }
    label{
    color: white;
}
  </style>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/socialMediaIconCSS.css" rel="stylesheet">
</head>
<body style="background: #9F2B52">


<div class="container">
  <script>
createDatabase();
  </script>
  <div class="row">
    <h3 class="text-center" style="color: #ffffff; margin-bottom: 10%"> Ladies Knight: PostOP </h3>
  </div>

  <div class="row" style="margin: 20px">
    <form action="socialMedias.php" method="post">
      <div class="col-xs-12 rounded" style="background: grey">
        <div class="form-group col-xs-6">
          <label for="first-name">First Name: </label>
          <input type="text" name="first_name" class="form-control" id="first-name" value="">
        </div>

        <div class="form-group col-xs-6">
          <label for="last-name">Last Name: </label>
          <input type="text" name="last_name" class="form-control" id="last-name" value="">
        </div>

        <div class="form-group col-xs-12">
          <label for="username">Username: </label>
          <input type="text" name="" class="form-control" id="username" value="">
        </div>

        <div class="form-group col-xs-12">
          <label for="password">Password: </label>
          <input type="password" name="" class="form-control" id="password" value="">
        </div>
      </div>
      <div class="form-group col-xs-12" style="padding-top: 3%">
        <button id = "test" onclick = "saveUserInfo(document.getElementById('first-name').value,document.getElementById('last-name').value,document.getElementById('username').value,document.getElementById('password').value);" class="btn btn-lg center-block" style="background: black; color: #ffffff;">Register</button>
      </div>
    </form>
  </div>
</div>

<script>
    var fn = document.getElementById('first-name').value;
    var ln = document.getElementById('last-name').value;
    var un = document.getElementById('username').value;
    var pw = document.getElementById('password').value;
</script>

<script>
    Ti.App.Properties.setString('sessionId','<?php print_r(session_id()); ?>');
    var httpClient = Ti.Network.createHTTPClient();
    httpClient.setCookie('PHPSESSIONID',Ti.App.Properties.getString('sessionId'));
</script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>

