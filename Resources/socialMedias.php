<?php
/**
 * Created by PhpStorm.
 * User: Sparagmos
 * Date: 3/31/15
 * Time: 11:47 AM
 */
?>


<?php //print_r($_SESSION); die();

//setcookie('test','test',time()+86400);

?>

<script>
    alert(window.localStorage.test);

</script>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Social Media</title>
    <script src="db.js"></script>
</head>
<body>

<!--All buttons that link to sign in for each social media site will go in this file-->
<button onclick="FBLogin();" value="Log into Facebook";>Facebook nigga</button>

<script>

    function FBLogin() {
        var url = 'https://www.facebook.com/dialog/oauth?client_id=331246753731437&response_type=token&redirect_uri=http://localhost:63342/PostOP2/Resources/fbSuccess.php';
        window.location.href = url;
    }
</script>


</body>
</html>