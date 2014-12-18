<?php
$item = $items[0];
?>
<div id="home">
<p>
Welcome to What is Awesome! We're on a quest to find the most awesome things.
Please share an item you think is completely awesome or vote for one of the items
in the gallery to help us on our quest.
</p>
<p>
The other purpose of the site is to serve as an example of a site that would meet all the requirements
of the personal, dynamic site in BYU-I CIT 336 - web development.
</p>
<p>
More information on those requirements can be found in I-Learn. Please check the Grading Matrix found
in the material for the Conclusion Week.
</p>
<p>
Currently, the item voted Most Awesome is:
</p>
</div>
<div class="awesomeitem">
<a href="/?action=viewItem&amp;itemId=<?php echo $item['ID']; ?>">
<figure>
<figcaption><h2><?php echo $item['Name']; ?></h2></figcaption>
<img src="<?php echo $item['ImageUrl']; ?>" alt="<?php echo $item['Name']; ?>" />
</figure>
</a>
</div>