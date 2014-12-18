<?php
$url = $item['imageURL'];
$likes = $item['likes'];
$artwork = $item['artwork'];
$id = $item['artID'];

?>
<script src="/js/itemdetails.js" ></script>
<div id="itemdetails">
    <figure>
        <img src="<?php echo $url; ?>" alt="<?php echo $artwork; ?>" />
        <figcaption>
            <?php echo $artwork; ?><br />
            Likes: <?php echo $likes; ?><br />
            
            <?php if (LoggedInUserIsAdmin()) : ?>
                <button id="removebutton" onclick="DeleteArtwork(<?php echo $id; ?>);">Delete Item</button>
            <?php endif; ?>
        </figcaption>
    </figure>
    <a href="/?action=likes&itemId=<?php echo $id; ?>&likes=up">Likes</a>&nbsp;

</div>