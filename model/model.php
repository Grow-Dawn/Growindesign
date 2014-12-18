<?php

// Dawn Grow
if (isset($_SERVER['ENVIRONMENT']) && $_SERVER['ENVIRONMENT'] == 'production') {
// loads the connection strings for the production server.
    include_once 'settings-prod.php';
} else {
// loads the connection strings for the local/test server.
    include_once 'settings-test.php';
}
