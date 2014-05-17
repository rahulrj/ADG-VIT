  

<?php
$username="rahul.110392@gmail.com";
$password="saniaMIRZA";
   
   // fopen the cookie file with absolute path and make its size zero only first time 
$cookie_file_path='cookie.txt';
$main_url="https://academics.vit.ac.in/student/stud_login.asp";
$captcha_url="https://academics.vit.ac.in/student/captcha.asp";
   $fp = fopen($cookie_file_path, 'wb');
   fclose($fp);
   
   $ch = curl_init(); // Initialize a CURL session.
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); // Return no stream contents.
   curl_setopt($ch, CURLOPT_URL, $main_url); // Pass URL as parameter.
   curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path); // where to save cookie file   
   $data = curl_exec($ch); // execute
   curl_close($ch); // kill it   
   
         //----------------- 2nd step---------------//         
         
   // call the captcha url using the cookie
   $ch_2 = curl_init(); // Initialize a CURL session.
   curl_setopt($ch_2, CURLOPT_URL, $captcha_url); // Pass URL as parameter.
   curl_setopt($ch_2, CURLOPT_COOKIEFILE, $cookie_file_path); // where to get and upload cookie file
   curl_setopt($ch_2, CURLOPT_RETURNTRANSFER, 1); // Return stream contents.
   curl_setopt($ch_2, CURLOPT_BINARYTRANSFER, 1); // We'll be returning this transfer, and the data is binary
   $data_2 = curl_exec($ch_2); // // Grab the png and save the contents in the $data variable
   curl_close($ch_2); // close curl resource, and free up system resources.
   
echo gettype($data_2);
   // store image
   $im = imagecreatefromstring($data_2);
echo $im;

   
   if ($im !== false) {
      imagepng($im, "image.png");
      imagedestroy($im);
//$posted_data_fields="regno=".$username."&passwd=".$password."&submit=".$Login;
   } else
      echo 'An error occurred.';

   
         //----------------- 3rd step: to be called after you submit the form---------------//   
/*$ch_3 = curl_init ($post_url);   
   curl_setopt($ch_3, CURLOPT_RETURNTRANSFER, 1); // Return stream contents.
   curl_setopt($ch_3, CURLOPT_COOKIEFILE, $cookie_file_path); // where to get and upload cookie file   
   curl_setopt($ch_3, CURLOPT_POSTFIELDS, 'posted_data_fields='.$posted_data_fields);
   
   
   $result = curl_exec($ch_3);
   
   return $result;*/

?>