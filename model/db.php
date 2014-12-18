<?php

// Dawn Grow
/*

 * */
require_once $_SERVER['DOCUMENT_ROOT'] . '/util/connection.php';

if (isset($_SERVER['ENVIRONMENT']) && $_SERVER['ENVIRONMENT'] == 'production') {
// loads the connection strings for the production server.
    require dirname(__FILE__) . '/../settings-prod.php';
} elseif (isset($_SERVER['ENVIRONMENT']) && $_SERVER['ENVIRONMENT'] == 'stage') {
// loads the connection strings for the stage server.
//require dirname(__FILE__) . '/../settings-stage.php';
} else {
// loads the connection strings for the local/test server.
//require dirname(__FILE__) . '/model/settings-test.php';
}

/// Executes an arbitrary database query.

function DbExecute($query, $params = null) {
    $db = connAdmin();
    try {
        $statement = $db->prepare($query);
        if (is_array($params)) {
            foreach ($params as $key => $value) {
                $statement->bindValue($key, $value);
            }
        }
        $statement->Execute();
    } catch (Exception $e) {
        echo "Database exception, try again later.";
        error_log($e);
        exit();
    }
}

/// Runs an INSERT statement

function DbInsert($query, $params = null) {
    $db = connAdmin();
    $return = false;
    try {
        $statement = $db->prepare($query);
        if (is_array($params)) {
            foreach ($params as $key => $value) {
                $statement->bindValue($key, $value);
            }
        }
        $statement->Execute();
        $return = $db->lastInsertId();
    } catch (Exception $e) {
        echo "Database insert exception, please try again later.";
        error_log($e);
        exit();
    }
    return $return;
}

/// Runs a SELECT statement

function DbSelect($query, $params = null) {
    $db = connAdmin();
    $return = array();
    try {
        $statement = $db->prepare($query);
        if (is_array($params)) {
            foreach ($params as $key => $value) {
                $statement->bindValue($key, $value);
            }
        }
        $statement->Execute();
        while ($row = $statement->fetch()) {
            $return[] = $row;
        }
    } catch (Exception $e) {
        echo "Database exception, try again later.";
        error_log($e);
        exit();
    }
    return $return;
}
