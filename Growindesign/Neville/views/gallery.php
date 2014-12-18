<div class="gallery group">
<?php foreach($items as $item) : ?>
<?php
$upvotes = $item['Upvotes'];
$downvotes = $item['Downvotes'];
$ratio = $item['Ratio'] * 100;
?>
<div class="item span_1">
<a href="/?action=viewItem&amp;itemId=<?php echo $item['ID']; ?>">
<figure class="itemfigure">
<img src="<?php echo $item['ImageUrl']; ?>" alt="<?php echo $item['Name']; ?>" />
<figcaption>
<h2><?php echo $item['Name']; ?></h2>
Upvotes: <?php echo $item['Upvotes']; ?><br />
Downvotes: <?php echo $item['Downvotes']; ?><br />
<?php echo $ratio; ?>% Awesome
</figcaption>
</figure>
</a>
</div>
<?php endforeach; ?>
</div>