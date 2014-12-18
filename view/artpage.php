<?php
// Dawn Grow
//$item = $items[0];
?>
<br><h2>Artwork Pages</h2>
<?php //include 'header.php';  ?>  
<?php //include $_SERVER['DOCUMENT_ROOT'].'header.php'; ?> 
<br><br>

<p><br>I hope you like what you see.  If something appeals to you, please LIKE it. <br></p>
<div id="artsy">
    <?php
    echo "<img src = '{$item['imageURL']}'><h5>{$item['artwork']}</h5>";?>
</div><div id="thumbs">    
    <?php
    echo "<a href='index.php?action=likes&amp;artID={$item['artID']}'><img src = '/artwork/artwork/thumbs.png' alt='smiley face'></a><p>{$item['likes']} likes</p>";
    ?>
</div><div id="artsy">
    <?php
    echo "<p>{$item['description']}</p>";?>
</div>