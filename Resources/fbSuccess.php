<?php
/**
 * Created by PhpStorm.
 * User: Sparagmos
 * Date: 3/31/15
 * Time: 12:14 PM
 */



?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Success</title>
    <script src="js/bootstrap.min.js"></script>
    <script src="db.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="~/Users/Sparagmos/Ti.js"></script>
    <script src="//connect.facebook.net/en_US/all.js"></script>
    <script>
        var appAccessToken;
        var userToken;
        var FB;
        var userId;
        FB.init({
            appId      : '331246753731437',
            //channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
        });
        FB.login();
        FB.getLoginStatus(function(response) {
            appAccessToken = response.authResponse.accessToken;
            urlChecker();
        });
        userToken = document.URL;
        //        window.onload(urlChecker());
        function urlChecker () {
            userToken = userToken.toString();
            //console.log("furst userToken " + userToken[1]);
            userToken = userToken.split("=");
            //console.log("sucond userToken " + userToken[1]);
            userToken = userToken[1].split("&");
            //parses facebook login response userToken and prints auth userToken
            userToken = userToken[0];

            (function(theUrl,tok,end,access)
            {
                var xmlHttp = null;
                xmlHttp = new XMLHttpRequest();
                xmlHttp.open( "GET", theUrl+tok+end+access, false );
                xmlHttp.send( null );
                var fbInfo = JSON.parse(xmlHttp.responseText);
                userId = fbInfo.data.user_id;

                saveFbUserInformation(userId, userToken);

            }("https://graph.facebook.com/debug_token?input_token=", userToken,"&access_token=",appAccessToken));
        }

    </script>

    <script>
        alert(Ti.App.Properties.getString('sessionId'));

    </script>


</head>
<body>

<!--<a href="facebookLogin.html">link whatever</a>-->


</body>
</html>