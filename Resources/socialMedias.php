<?php
require_once("fb-api/src/facebook.php");

$config = array(
    'appId' => '331246753731437',
    'secret' => '81e09a60ac3afb342f7eba3fc4c0693f',
    'fileUpload' => false,
    'allowSignedRequest' => false,
);
$facebook = new Facebook($config);



$params = array(
    'scope' => 'read_stream, friends_likes',
    'redirect_uri' => 'http://localhost:63342/PostOP2/Resources/socialMedias.php'
);

$loginUrl = $facebook->getLoginUrl($params);

?>


<?php //print_r($_SESSION); die();

//setcookie('test','test',time()+86400);

?>

<script>
//    alert(window.localStorage.test);

</script>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Social Media</title>
    <script src="db.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>

<!--All buttons that link to sign in for each social media site will go in this file-->
<button id="fb-button" value="Log into Facebook">Facebook nigga</button>


<script>
    $(document).ready(function(){
        $('#fb-button').click(function(){
            $.ajax({
                url: '<?php echo $loginUrl ?>',
                success: function (data) {
                    alert('success');
                }
            })
        })
    });


</script>


<script>

    function FBLogin() {
        var url = 'https://www.facebook.com/dialog/oauth?client_id=331246753731437&response_type=token&redirect_uri=http://localhost:63342/PostOP2/Resources/fbSuccess.php';
        window.location.href = url;
    }
</script>


</body>
</html>