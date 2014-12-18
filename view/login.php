<?php
// Dawn Grow
?>
<br><h2>Login Page</h2>
<?php //include 'header.php'; ?>  
<?php //include $_SERVER['DOCUMENT_ROOT'].'header.php'; ?> 
<br><br>
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
            <legend>Register a new account</legend>
            First Name: <input required type="text" name="firstName" id="firstName" /><br />
            Last Name: <input required type="text" name="lastName" id="lastName" /><br />
            Email Address: <input required type="email" name="email" id="email" /><br />
            Password: <input required type="password" name="password1" id="password1" /><br />
            Verify Password: <input required type="password" name="password2" id="password2" /><br />
            <button name="register" id="buttonRegister">Register</button>
        </fieldset>
    </form>
    <br /><br />
    <form action="/?action=loginsubmit" method="POST" id="loginform">
        <fieldset>
            <legend>Login with existing account</legend>
            Email Address: <input  type="text" name="emaillogin" id="emaillogin" /><br />
            Password: <input  type="password" name="passwordlogin" id="passwordlogin" /><br />
            <button name="login" id="buttonLogin">Login</button>
        </fieldset>
    </form>
</div>