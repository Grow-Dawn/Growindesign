<?php
$url = $item['ImageUrl'];
$upvotes = $item['Upvotes'];
$downvotes = $item['Downvotes'];
$name = $item['Name'];
$id = $item['ID'];
$ratio = $item['Ratio'] * 100;
?>
<script src="/js/itemdetails.js" ></script>
<div id="itemdetails">
<figure>
<img src="<?php echo $url; ?>" alt="<?php echo $name; ?>" />
<figcaption>
<?php echo $name; ?><br />
Upvotes: <?php echo $upvotes; ?>, Downvotes: <?php echo $downvotes; ?><br />
<?php echo $ratio ?>% Awesome<br />
<?php if (LoggedInUserIsAdmin()) : ?>
<button id="removebutton" onclick="DeleteItem(<?php echo $id; ?>);">Delete Item</button>
<?php endif; ?>
</figcaption>
</figure>
<a href="/?action=vote&itemId=<?php echo $id; ?>&vote=up">Vote Up</a>&nbsp;
<a href="/?action=vote&itemId=<?php echo $id; ?>&vote=down">Vote Down</a>
<?php foreach ($comments as $comment) : ?>
<div id="commentdiv">
<fieldset>
<legend><?php echo $comment['firstname']; ?> : <?php echo $comment['updated']; ?></legend>
<?php echo $comment['comment']; ?>	
</fieldset>
</div>
<?php endforeach; ?>
<?php if (CheckSession()) : ?>
<p>
Post a new comment:<br />
<form id="commentform" method="POST" action="/?action=postcomment">
<input type="hidden" name="itemId" value="<?php echo $id; ?>" />
<textarea cols="40" rows="5" name="comment" id="commentarea"></textarea><br />
<input type="submit" name="Submit" value="Submit" />
</form>
</p>
<?php else : ?>
<p>
Please log in to post a comment.
</p>
<?php endif; ?>
</div>