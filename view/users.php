<?php
// Dawn Grow

//$item = $items[0];
?>
<h2>Update & Delete Users</h2>
  
   


<div id="userlist">
<?php
 foreach ($users as $user) {
 echo "<p>{$user['firstName']} {$user['lastName']}<a href='index.php?action=editusers&amp;id={$user['userID']}'>edit</a> <a href='index.php?action=deleteuser&amp;id={$user['userID']}'>delete</a></p>";
 }
?>


</div>
