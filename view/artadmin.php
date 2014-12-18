<?php
// Dawn Grow

//$item = $items[0];
?>
<h2>Update & Delete Artwork</h2>
  
   


<div id="userlist">
    <?php
 foreach ($items as $item) {
 echo "<p>{$item['artwork']} <a href='index.php?action=editart&amp;id={$item['artID']}'>edit</a> <a href='index.php?action=deleteitem&amp;id={$item['artID']}'>delete</a></p>";
 }
?>


</div>
