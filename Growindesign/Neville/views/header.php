<?php
$nav = GetPrimaryNavigationItems();
?>
<nav>
<ul>
<?php foreach($nav as $action => $text) : ?>
<li>
<a href='/index.php?action=<?php echo $action ?>'><?php echo $text ?></a>
</li>
<?php endforeach; ?>
</ul>
</nav>