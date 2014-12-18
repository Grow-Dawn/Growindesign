<?php
// $user set by the controller.
$message = isset($message) ? $message : null;
?>
<div id="message">
    <p>
        <?php echo $message; ?>
    </p>
</div>
<div id="infoupdate">
    <form id="infoupdateform" method="POST" action="/?action=updateinfo">
        <fieldset>
            <legend>Update my information</legend>
            First Name: <input type="text" name="firstName" id="firstName" value="<?php echo $user['firstName']; ?>" required /><br />
            Last Name: <input type="text" name="lastName" id="lastName" value="<?php echo $user['lastName']; ?>" required /><br />
            Email Address: <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required /><br />
            Password: <input type="password" name="password" id="password" value="<?php echo $user['password']; ?>" required /><br />
            Access:<select name='access'>
                <option value='user' <?php if( $user['access']=='user')echo 'selected'; ?> >User</option>
              <option value='admin' <?php if( $user['access']=='admin')echo 'selected'; ?> >Admin</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $user['userID']; ?>" />
            <input type="submit" name="Submit" value="Submit" />
        </fieldset>
    </form>

</div>