/**
 * Created by Miller Fanning on 2/13/15.
 */

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "creds.xml",
        cache: false,
        dataType: "xml",
        success: function(xml) {
            $(xml).find('lkLogin').each(function(){
                $(this).find("facebook").each(function(){
                    var username = $(this).find("username").text();
                    var password = $(this).find("password").text();
                    console.log("Username: " + username + " | password: " + password);

                    $('#username').val(username);
                    $('#password').val(password);
                });
            });
        }
    });
});