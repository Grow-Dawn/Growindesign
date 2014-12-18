<?php
//include view.php;
/* 
 * Function Exam model
 */
//echo "10\n"; 
/*  Get the Guitar1 database connection before anything else */
//include 'database.php';
//include 'index.php';
//echo "11";

 $username = 'futeigei';
 $password = 'Aurora69!!';
 
 $db = new PDO("mysql:host=localhost;dbname=futeigei_guitar1", $username, $password);
//try {
//    
//    //echo "Connected successfully\n";
//    }
//catch(PDOException $e)
//    {
//    echo $e->getMessage();
//    }
  
    
    
    /*Write the first function using the following SQL to query the Guitar1 database
     * Use a try - catch block to handle exceptions
     * Use a prepared statement inside the try to execute the query
     * The result of the query should be an array
     * Be sure to return the array if it has data or 'FALSE' if no data was retrieved
     */
function getNav() {
        global $db;
//      $db = Database::getDB();
//      getNav();
        $i = 0;
    try {
        
        $sql = $db->prepare('SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID');
        //$result = $db->query($sql);
        $sql->execute();
        
        $categories = array();
       
        //echo "test3\n";
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
//            $category = new Category();
//            $category->setID();
//            $category->setName($row['categoryName']);
            $categories[$i] = $row['categoryName'] ;
            $i++;}
            //echo "test4\n";
            if (count($categories)!= 0){ 
               return $categories; 
            }
            else {
            return FALSE;   }}
            
    catch (PDOException $e){
        
        $navigation = $e->getMessage();
        echo $e->getMessage();
        //echo "Database exception, try again later.";
        //error_log($e);
        //exit();
          }}   
   
/* 
 * Write the second function following this comment block
 
 * The function should be named "buildNav" and retrieve the needed 
 * information by calling the first function.
 
 * Then, the function should build an unordered list
 * placing each item retrieved from the database in an anchor element in a list item.
 * The entire list should be stored in a variable named $navigation.
 
 * If nothing is retrieved from the database, use the same $navigation variable 
 * to store an error message.
 
 * Finally, return $navigation (it was called in the controller).
 */    
    
function buildNav(){
    global $categories;
        //    echo "test5\n";
    $nav = getNav();
    $navigation = "";
    try{    
//      $navList = array(
//        'guitars' => 'Guitars',
//        'basses' => 'Basses',
//        'drums' => 'Drums'); 
        //$navigation = "<ul>";
        
    for ($i=0;$i < count($nav);$i++ ){ 
          
        $navigation .= "<ul><li><a href='*'>" . $nav[$i] . "</a><?li></ul>";
        
        //print_r "$navigation";
        //$navigation .= $nav[$i];
        //echo $navigation;
        //echo "test\n";
        //$navigation .= "</ul>";
    
        return $navigation;
    }
       /* foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>"
            <?php endforeach;*/
    }     
    catch (PDOException $e) {
        echo $e->getMessage();
        //echo "There was an error.";
        return $navigation;
        //exit();
    }
    
   
    
}
    


    