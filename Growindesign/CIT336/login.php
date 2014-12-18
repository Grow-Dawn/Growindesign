<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Teaching Presentation</title>
    <link type="text/css" media="screen" rel="stylesheet" href="/growin.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    
</head>

<body>
    <h1>Growin' Design | by Dawn Grow</h1> 
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    <h1>Teaching Presentation</h1>
     
    
    <?php
?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="/js/login.js" ></script>
<?php
if ($message) {
echo $message;
}
?>
<div id="loginregister">
<form action="/?action=registersubmit" method="POST" id="registerform">
<input type="hidden" name="actiontype" id="actiontype" value="" />
<fieldset>
<legend>Start a new login</legend>
First Name: <input type="text" name="firstname" id="firstname" /><br />
Last Name: <input type="text" name="lastname" id="lastname" /><br />
Email Address: <input type="email" name="emailreg" id="emailreg" /><br />
Password: <input type="password" name="passwordreg1" id="passwordreg1" /><br />
Verify Password: <input type="password" name="passwordreg2" id="passwordreg2" /><br />
<button name="register" id="buttonRegister">Register</button>
</fieldset>
</form>
<br /><br />
<form action="/?action=loginsubmit" method="POST" id="loginform">
<fieldset>
<legend>Login with existing account</legend>
Email Address: <input type="text" name="emaillogin" id="emaillogin" /><br />
Password: <input type="password" name="passwordlogin" id="passwordlogin" /><br />
<button name="login" id="buttonLogin">Login</button>
</fieldset>
</form>
</div>
    
</body>

</html>