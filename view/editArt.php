<?php
// Dawn Grow
?>

<div id="editart">
    <?php echo "<p>$message</p>"; ?>
    <input type="hidden" name="actiontype" id="actiontype" value="" />
    <form id="editForm" method="post" action="/index.php?action=editartsubmit">
        <fieldset>
            <legend>Edit Artwork</legend>
            Artwork Name: <input type="text" name="artwork" value='<?php echo $item['artwork'] ?>' required /><br />
            Art URL: <input type="text" name="imageURL"  value='<?php echo $item['imageURL'] ?>' required /><br />
            Description: <textarea name="description" id="description"><?php echo $item['description'] ?></textarea><br />
            <input type="submit" name="submit" id="Edit" value="Edit">
            <input type="hidden" name="artID" id="actiontype" value="<?php echo $item['artID'] ?>" />
        </fieldset>
    </form>
</div>
