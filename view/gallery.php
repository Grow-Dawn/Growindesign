<?php
// Dawn Grow
//$item = $items[0];
?>
<br><h2>Art Gallery Page</h2>
<?php //include 'header.php';  ?>  
<?php //include $_SERVER['DOCUMENT_ROOT'].'header.php'; ?> 
<br><br>

<p><br>Welcome to my gallery of artwork created.  Please feel free to click on any of the ones you like to LIKE them. <br></p>
<div id="artimage">
    <?php
    foreach ($items as $item) {
        echo "<li><a href='index.php?action=artpage&amp;artID={$item['artID']}'><img src='{$item['imageURL']}'></a></li>";
    }
    ?>


</div>
