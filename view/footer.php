<?php
$date = date('Y')
?>
<div id="footer">
<br><br>
    <a href="/index.php?action=teachingpresentation">Teaching Presentation </a>
    <a href="/index.php?action=SitePlan">  Site Plan</a>
      
        <?php 
        if ($_SESSION['access'] == 'admin') {
            ?>
            <a href="/index.php?action=admin">Admin</a>
            <?php
        }  ?>
</div>

<p>
    <br>
&copy; <?php echo $date ?> Designed by Dawn Grow
</p>
</div>