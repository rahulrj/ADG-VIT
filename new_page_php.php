<?php


include("msg/sdk/src/facebook.php");
 
//echo "ya i a m gerr";
//
// from the facebook app page
define('YOUR_APP_ID', '463436413732814');
define('YOUR_APP_SECRET', '4e4a5d08ff369107d68491d83dff66f5');
 
 
$fb = new Facebook(array(
 'appId' => YOUR_APP_ID,
 'secret' => YOUR_APP_SECRET,
));
$fb_user=$fb->getUser();

echo $fb_user;
 
// read the variables from the post, here
// you should add some check to avoid
// bad posts or attacks (at least strip tags
// and handle quoted strings).
//echo "rahul raja";
//
$title = ($_POST['t']);         // title
$caption = ($_POST['c']);       // caption below the title, before the description
$url_of_the_link = ($_POST['h']);   // link of the url
$description = ($_POST['d']);       // some text that describe the object sent to facebook
$image_url = ($_POST['i']);     // image url (if exists)
$callback = ($_POST['callback']);   // callback url
$action_link = ($_POST['ah']);  // action link;
$action_label = ($_POST['al']); // action label;
 
if(!$fb_user) {
    //
    // if ($userId) {
    
 //
 // already logged? show some data
 //$userInfo = $facebook->api('/'.$userId);
 
//echo "<p>YOU ARE: <strong>". $userInfo['name'] ."</strong><br/>";
//echo "Your birth date is: ".$userInfo['birthday']."</p>";

//header('Location: http://www.adgvit.in/msg/new_page.html');
 
 
 

 //
 // use javaascript api to open dialogue and perform
 // the facebook connect process by inserting the fb:login-button
 ?>
 
 <div id="fb-root"></div>
 <fb:login-button scope='email,user_birthday'></fb:login-button>
 <?php
}


?>

<html>
<head>
 <style>body { text-align:center; font-size: 40px }</style>
</head>
<body>
    

 <?php
 
 echo "the user is{$fb_user}";
 ?>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>
</head>
<!-- on load do the job -->
<body onload="publish_with_permission('publish_stream');">
<p>
    I'm sending your stuff to yout Facebook wall.<br/>
    If it doesn't work you should give us the permission to publish streams on your wall.<br/>
</p>
 
<!-- do the job with javascript, and create the object to post through php vars -->
<script>
<!--
 
var action_links =  [{ 'text' : "<?=$action_label?>", 'href' : "<?=$action_link?>" }] ; 
 
var attachment = {'name' : "<?=$title?>", 
    'href' : "<?=$url_of_the_link?>", 
    'caption' : "<?=$caption?>", 
    'description' : "<?=$description?>"<?
        if($image_url) {
            echo ",'media' :[{'type' : 'image', 'src' : \"$image_url\", 'href' : \"$url_of_the_link\"}]";
        }
    ?>
};
 
function jscallback (post_id, exception) {
    // this javascript function is called
    // after the Facebook process and we use
    // it to go back to the correct page
    // where the post should end (the ending
    // page of the flowchart).
    if (post_id == null || post_id == undefined ) {
        // failed
        document.location.href="<?=$callback?>";
    } else {
        // success
        document.location.href="<?=$callback?>";
    } 
}
 
 

 window.fbAsyncInit = function() {
 FB.init({
 appId : <?=YOUR_APP_ID?>,
 status : true,
 cookie : true,
 xfbml : true,
 oauth : true,
 });
 
FB.Event.subscribe('auth.login', function(response) {
 // ------------------------------------------------------
 // This is the callback if everything is ok
 window.location.reload();
 });
 };
 
(function(d){
 var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
 js = d.createElement('script'); js.id = id; js.async = true;
 js.src = "//connect.facebook.net/en_US/all.js";
 d.getElementsByTagName('head')[0].appendChild(js);
 }(document));






function publish_with_permission(permission) {
    // This function checks if user has permission, if not pops up the
    // Facebook dialog and ask for permission.
    // If permission is granted send without asking
    // anything, if permission is not granted pops up
    // and try to send again prompting for a comment.
    FB.ensureInit(function() {
        FB.Connect.requireSession(function(){
            //check is user already granted for this permission or not
            FB.Facebook.apiClient.users_hasAppPermission(permission,
            function(result) {
                // prompt offline permission
                if (result == 0) {
                    // show the facebook permission dialog
                    FB.Connect.showPermissionDialog(permission,
                    function(result){
                        if (!result) {
                            // no permisson granted, pop up facebook dialog to post;
                            FB.Connect.streamPublish('', attachment, action_links, null, "Post this:", jscallback);
                        } else {
                            // permission granted, post without facebook dialog
                            FB.Connect.forceSessionRefresh(function() {
                                FB.Connect.streamPublish('', attachment, action_links, null, "Post this:", jscallback,true);
                            });
                        }
                    }, true, null);
                } else {
                    // permission already granted, post suddenly
                    // without facebook dialog
                    FB.Connect.streamPublish('', attachment, action_links, null, "Post this:", jscallback,true);
                }
            });
        });
    });
}
 
//-->
</script>
<script type="text/javascript">  FB.init("<?=YOUR_APP_ID?>", "/xd_receiver.htm"); </script>
</body>
</html>