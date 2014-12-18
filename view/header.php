<?php
$nav = GetPrimaryNavigationArtwork();
?>

<nav>
    <ul>
        <?php foreach ($nav as $action => $text) : ?>
            <li>
                <a href='/index.php?action=<?php echo $action ?>'><?php echo $text ?></a>
            </li>
        <?php endforeach; 
            if ($_SESSION['loggedIn'] == true) {
            ?>
            <li><a href="/index.php?action=logout">Log Out</a></li>
        <?php } else {
            ?>
            <li><a href="/index.php?action=login">Login</a></li>
        <?php } ?>
    </ul>
</nav>