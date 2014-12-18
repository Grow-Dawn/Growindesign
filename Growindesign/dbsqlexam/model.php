<?php
/* ***************************************
 * DB and SQL Exam model
 * **************************************/

/* ***************************************
 * Get access to the database connection
 * **************************************/
    $username = 'futeigei';
    $password = 'Aurora69!!';
 
    $db = new PDO("mysql:host=localhost;dbname=futeigei_guitar1", $username, $password);

/* ***************************************
 * Get navigation items from database
 * **************************************/
function getNavigation() {
   global $db;
//   $navList = getCategoryItems($category) ;
   
  try {
    $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $navList = $stmt->fetchAll();
    $stmt->closeCursor();
  } catch (PDOException $exc) {
    header('location: ./error.php');
    exit;
  }
  if (!empty($navList)) {
    return $navList;
  } else {
    return FALSE;
  }
}

/* ***************************************
 * Get the list of items by category
 * **************************************/
function getCategoryItems($category) {
  global $db;
//  $result = getItem($productid);
  try {
      $sql = 'SELECT productID, productName '
              . 'FROM products '
              . 'WHERE categoryID=' . $category . '';
  

  
      $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;


  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Get item based on its key
 * **************************************/
function getItem($productid) {
    global $db;
    $sql = 'SELECT productID, productName, listPrice '
            . 'FROM products '
            . 'WHERE productID=' . $productid . '';

  try {
      $statement = $db->prepare($sql);
        $statement->execute();
        $results = $statement->fetch();
        $statement->closeCursor();
        return $results;


  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}


/* ***************************************
 * Build the navigation menu list
 * **************************************/
function buildNav(){
  $navItems = getNavigation();
  if(is_array($navItems)){
    $navigation .= '<ul>';
    foreach ($navItems as $item) {
      $navigation .= "<li><a href='/dbsqlexam?action=q&amp;category=$item[0]' title='View our $item[1]'>$item[1]</a></li>";
    }
    $navigation .= '</ul>';
  } else {
    $navigation = 'Sorry, a critical error occurred.';
  }
  return $navigation;
}