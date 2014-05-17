<?php session_start(); ?>
<?php require("BotDetect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <title>BotDetect PHP CAPTCHA Form Sample</title>
  <link type="text/css" rel="Stylesheet" href="StyleSheet.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
</head>
<body>
  <form method="post" action="ProcessForm.php" id="form1">

    <h1>BotDetect PHP CAPTCHA Form Sample</h1>

    <fieldset>
      <legend>CAPTCHA included in PHP form validation</legend>

      <div class="input">
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" class="textbox" value="<?php echo getValue('Name');?>" />
        <?php echo getValidationStatus('Name'); ?>
      </div>

      <div class="input">
        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email" class="textbox" value="<?php echo getValue('Email');?>" />
        <?php echo getValidationStatus('Email'); ?>
      </div>

      <div class="input">
        <label for="Message">Short message:</label>
        <textarea class="inputbox" id="Message" name="Message" rows="5" cols="40"><?php echo getValue('Message');?></textarea>
        <?php echo getValidationStatus('Message'); ?>
      </div>


      <div class="input">
        <?php // Adding BotDetect Captcha to the page
          $FormCaptcha = new Captcha("FormCaptcha");
          $FormCaptcha->UserInputID = "CaptchaCode";
          $FormCaptcha->CodeLength = 3;
          $FormCaptcha->ImageWidth = 150;
          $FormCaptcha->ImageStyle = ImageStyle::Graffiti2;

          // only show the Captcha if it hasn't been already solved for the current message
          if(!$FormCaptcha->IsSolved) { ?>
            <label for="CaptchaCode">Retype the characters from the picture:</label>
            <?php echo $FormCaptcha->Html(); ?>
            <input type="text" name="CaptchaCode" id="CaptchaCode" class="textbox" />
            <?php echo getValidationStatus('CaptchaCode');
          } ?>
      </div>

      <input type="submit" name="SubmitButton" id="SubmitButton" value="Submit"  />

    </fieldset>

    <?php 
      // remember user input if validation fails
      function getValue($fieldName) {
        $value = '';
        if (isset($_REQUEST[$fieldName])) { 
          $value = $_REQUEST[$fieldName];
        }
        return $value;
      }
      
      // server-side validation status helper function
      function getValidationStatus($fieldName) {
        // validation status param, e.g. "NameValid" from "Name"
        $requestParam = $fieldName . 'Valid';
        if ((isset($_REQUEST[$requestParam]) && $_REQUEST[$requestParam] == 0)) {
          // server-side field validation failed, show error indicator
          $messageHtml = "<label class='incorrect' for='{$fieldName}'>*</label>";
        } else {
          // server-side field validation passed, no message shown
          $messageHtml = '';
        }
        return $messageHtml;
      }
    ?>

    <div id="notes">
      <div class="note">
        <h3>Description</h3>
        <p>This sample project shows how to add BotDetect CAPTCHA protection to a typical PHP form.</p>
        <p>Captcha validation is integrated with other form fields validation, and only submissions that meet all validation criteria are accepted.</p>
        <p>If the Captcha is sucessfully solved but other field validation fails, the Captcha is hidden since the users have already proven they are human.</p>
        <p>This kind of validation could be used on various types of public forms which accept messages, and are at risk of unwanted automated submissions.</p>
        <p>For example, it could be used to ensure bots can't submit anything to a contact form, add guestbook entries, blog post comments or anonymous message board / forum replies.</p>
      </div>
      <div class="note warning">
        <h3>Alpha Release Warning</h3>
        <p>BotDetect PHP Captcha Library Alpha is a work in progress, and we need you to guide our efforts towards a polished product. Please <a href="http://captcha.biz/contact.html?topic=php&amp;utm_source=installation&amp;utm_medium=php&amp;utm_campaign=3.0.Alpha4">let us know</a> if you encounter any bugs, implementation issues, or a usage scenario you would like to discuss.</p>
        <p>The PHP library does not yet support the full feature set of the other BotDetect 3.0 Captcha products (ASP.NET and ASP Classic). Most notably, Captcha localization is not implemented yet, but is coming soon.</p>
      </div>

      <?php if (Captcha::IsFree()) { ?>
      <div class="note warning">
        <h3>Free Version Limitations</h3>
        <ul>
          <li>The free version of BotDetect includes a randomized <code>BotDetect™</code> trademark in the background of 50% of all Captcha images generated.</li>
          <li>It also has limited sound functionality, replacing the CAPTCHA sound with "SOUND DEMO" for randomly selected 50% of all CAPTCHA codes.</li>
          <li>Lastly, the bottom 10 px of the CAPTCHA image are reserved for a link to the BotDetect website.</li>
        </ul>
        <p>These limitations are removed if you <a href="http://captcha.biz/shop.html?utm_source=installation&amp;utm_medium=php&amp;utm_campaign=3.0.Alpha4" title="BotDetect CAPTCHA online store, pricing information, payment options, licensing &amp; upgrading">upgrade</a> your BotDetect license.</p>
      </div>
      <?php } ?>
    </div>
  </form>
</body>
</html>