<?php
// Dawn Grow
?>
<ul>
<li><a href="/?action=myinfo">Update my info</a></li>
<li><a href="/?action=gallery">Like an artwork</a></li>
<li><a href="/?action=newitem">Upload more artwork</a></li>
</ul>
<?php if(LoggedInUserIsAdmin()) : ?>
Admin Items:<br />
<ul>
<li><a href="/?action=editusers">Edit Users</a></li>
</ul>
<?php endif; ?>