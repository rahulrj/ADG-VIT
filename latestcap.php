
<?php
define('COOKIE', './cookie.txt');
define('MYURL', 'http://www.iitg.ernet.in/cseweb/summerinternship/logmein');

function getUrl($url, $method='', $vars) {
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    
    static $cookie = false;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }
    $referer = 'http://www.iitg.ernet.in/cseweb/summerinternship/logmein';
    $ch = curl_init();
    if ($method == 'post') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
    }
    echo $vars;
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
   // curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
    curl_setopt($ch, CURLOPT_USERAGENT, $agents);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 5);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    $buffer = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    return $buffer;
}

function save_captcha($ch) {
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    $url = "http://www.iitg.ernet.in/cseweb/summerinternship/include/security-image.php";
    static $cookie = false;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }
    $ch = curl_init();    // Initialize a CURL session.
    curl_setopt($ch, CURLOPT_URL, $url);  // Pass URL as parameter.
    curl_setopt($ch, CURLOPT_USERAGENT, $agents);
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // Return stream contents.
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1); // We'll be returning this
    $data = curl_exec($ch);  // // Grab the jpg and save the contents in the
    curl_close($ch);  // close curl resource, and free up system resources.
    $captcha_tmpfile = './captcha/captcha-' . rand(1000, 10000) . '.jpg';
    echo "\n Image name is $captcha_tmpfile \n";
    $fp = fopen($tmpdir . $captcha_tmpfile, 'w');
    fwrite($fp, $data);
    fclose($fp);
    return $captcha_tmpfile;
}

if (isset($_POST['submit'])) {
    $id = "rahul110392";
    $pw = "picturePERFECT";
$st="1";
$com="Login";
echo $_POST['captcha'];
   $postfields = "user=".$username."&pass=".$password."&code=".$_POST['captcha']."&sublogin=".$st."&submit=".$com;
    $url = "http://www.iitg.ernet.in/cseweb/summerinternship/logmein";
    $result = getUrl($url, 'post', $postfields);
    echo $result;
} else {

    $open = getUrl('http://www.iitg.ernet.in/cseweb/summerinternship/logmein', '', '', true);
    $captcha = save_captcha($ch);
    $fp = fopen('./cookie.txt', 'r');
    $a = fread($fp, filesize('./cookie.txt'));
    fclose($fp);
}
?>




<form action='' method='POST'>
        <img src='<?php echo $captcha ?>' />
        <input type='text' name='captcha' value=''>
        <input type='submit' name='submit'value='proses'>
    </form>