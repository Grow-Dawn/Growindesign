<!DOCTYPE html>
<html>
    <head>
  <meta charset="UTF-8">
<link type="text/css" media="screen" rel="stylesheet" href="/growinProject.css">
<title>GrowinDesign</title> </head><body>
<img class="logo" src="DG%20logo2.png" alt="Smiley Face">
<h1>Growin' Design | by Dawn Grow</h1>

<?php
// Dawn Grow
//ini_set('display_errors', '1');

session_start();
require 'model/db.php';
require 'model/comments.php';
require 'model/artwork.php';
require 'model/navigation.php';
require 'model/users.php';
require 'util/util.php';
include 'view/header.php';

$action = strtolower(filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING));
//echo $action;
switch ($action) {
    case 'about':
        include 'view/about.php';
        break;
//  /*
    case 'addartwork':
        include $_SERVER['DOCUMENT_ROOT'] . '/view/addartwork.php';
        break;
     case 'admin':
        include $_SERVER['DOCUMENT_ROOT'] . '/view/admin.php';
         echo "admin";
        break;
    case 'artadmin':
        $items = GetOrderedArtwork();
        include $_SERVER['DOCUMENT_ROOT'].'/view/artadmin.php';
        break;
    case 'artpage':
        $id = (int) filter_input(INPUT_GET, 'artID', FILTER_SANITIZE_NUMBER_INT);
        $item = GetArtworkById($id);
        include 'view/artpage.php';
        break;
    
//   */
    case 'contact':
        include 'view/contactUs.php';
        break;
//  /*
    case 'deleteitem':
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        DeleteArtwork($id);
        header('Location: /index.php?action=gallery');
        exit();
        break;
       
    case 'deleteuser':
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        deleteUser($id);
        header('Location: /?action=viewusers');
        exit();
        break;
    case 'editart':
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $item = GetArtworkById($id);
        include $_SERVER['DOCUMENT_ROOT'] . '/view/editArt.php';
        break;
     case 'editartsubmit':
        $artwork = filter_input(INPUT_POST, 'artwork', FILTER_SANITIZE_STRING);
        $url = filter_input(INPUT_POST, 'imageURL', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'artID', FILTER_SANITIZE_STRING);
        updateArt($id, $artwork, $url, $description);
        header('location: /index.php?action=artpage&artID='.$id);
        break;
    case 'editusers':
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $user = getUser($id);
        include $_SERVER['DOCUMENT_ROOT'].'/view/myinfo.php';
        break;
//   */
    case 'info':
        include 'view/info.php';
        break;
    case 'gallery':
        $items = GetOrderedArtwork();
        include 'view/gallery.php';
        break;
    case 'home':
        $items = GetOrderedArtwork();
        include 'view/home.php';
        break;

    case 'likes':
        loggedIn();
        $id = (int) filter_input(INPUT_GET, 'artID', FILTER_SANITIZE_NUMBER_INT);
            //$likes = (strtolower($_GET['likes']) == 'likes') ? 1 : 2;
            SaveArtworkLike($id);
            $art = GetArtworkById($id);
            //$comments = GetCommentsWithUsersForItem($artId);
            header('location: /index.php?action=artpage&artID='.$id);
            break;
   
    case 'login':
        include 'view/login.php';
        break;
    case 'loginsubmit':
        $email = filter_input(INPUT_POST, 'emaillogin', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'passwordlogin', FILTER_SANITIZE_STRING);
        if(empty($email)||empty($password)){
            $message = '<p>All fields are required</p>';
            //include 'view/login.php';
        }else { 
        $userinfo = checkLogin($email, $password);
            if (isset ($userinfo)){
                $_SESSION['name']=$userinfo['firstName'];
                $_SESSION['id']=$userinfo['userID'];
                $_SESSION['access']=$userinfo['access'];
                $_SESSION['loggedIn']= TRUE;
                header('Location: /?action=home');
                exit();
                }
        }
        include 'view/login.php';
        break;
    case 'logout':
        session_destroy();
        $_SESSION = array();
        header('Location: /');
        exit();
        break;
//   */
    case 'menu':
        $page = (CheckSession()) ? 'view/menu.php' : 'view/login.php';
        include $page;
        break;
//    /*
    case 'myinfo':
        $page = 'view/login.php';
        if ($userId = GetLoggedInUserId()) {
            $page = 'view/myinfo.php';
            $user = GetUser($userId);
        }
        include $page;
        break;
    /*case 'newitem':
        $page = (CheckSession()) ? 'view/newitem.php' : 'view/login.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/view/myinfo.php';
        break;
    case 'newitem':
        $page = (CheckSession()) ? 'view/newitem.php' : 'view/login.php';
        include $page;
        break;*/
    case 'newitemsubmit':
        $artwork = filter_input(INPUT_POST, 'artwork', FILTER_SANITIZE_STRING);
        $url = filter_input(INPUT_POST, 'imageURL', FILTER_SANITIZE_URL);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        if ($artwork && $url && $id = SaveNewArtwork($artwork, $url, $description)) {
            $item = GetArtworkById($id);
            //$comments = GetCommentsWithUsersForItem($id);
            header('location: /index.php?action=artpage&artID'.$id);
            include 'view/itemdetails.php';
        } else {
            include 'view/addartwork.php';
        }
        break;
/*    case 'postcomment':
        $itemId = (int) filter_input(INPUT_POST, 'itemId', FILTER_SANITIZE_NUMBER_INT);
        if ($userId = GetLoggedInUserId()) {
            $text = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
            if ($itemId && $text) {
                SaveComment($itemId, $userId, $text);
            }
        }
        $item = GetItemById($itemId);
        $comments = GetCommentsWithUsersForItem($itemId);
        include 'view/itemdetails.php';
        break;*/
    case 'teachingpresentation':
        include 'view/teachingPresentation.php';
        break;
    case 'registersubmit':
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);
        /*$regFirst = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $regLast = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $regmail = filter_input(INPUT_POST, 'emailreg', FILTER_SANITIZE_EMAIL);
        $regpass1 = filter_input(INPUT_POST, 'passwordreg1', FILTER_SANITIZE_STRING);*/
        if(empty($email)||empty($password)||empty($lastName)||empty($firstName)){
            $message = '<p>All fields are required</p>';
            //include 'view/login.php';
        }else {
        if (addUser($firstName, $lastName, $email, $password)) {
            $userinfo = checkLogin($email, $password);
            /*if (addUser($regFirst, $regLast, $regmail, $regpass1)) {
            $userinfo = checkLogin($regmail, $regpass1);*/
            if (isset ($userinfo)){
                $_SESSION['name']=$userinfo['firstName'];
                $_SESSION['id']=$userinfo['userID'];
                $_SESSION['access']=$userinfo['access'];
                $_SESSION['loggedin']= TRUE;
                header('Location: /?action=home');
                exit();
                }
        }}
        include 'view/login.php';
        break;
    case 'siteplan':
        include 'view/sitePlan.php';
        break;
    case 'viewitem':
        $id = (int) filter_input(INPUT_GET, 'artID', FILTER_SANITIZE_NUMBER_INT);
        $item = GetArtworkById($id);
        //$comments = GetCommentsWithUsersForItem($artID);
        include 'view/itemdetails.php';
        break;
    case 'updateinfo':
        //echo "hey";
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $access = filter_input(INPUT_POST, 'access', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $id = (int) filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        //echo "$id, $firstName, $lastName, $email, $password, $access";
        updateUser($id, $firstName, $lastName, $email, $password, $access);
        header('location: /index.php?action=viewusers');
        break;
    case 'viewusers':
        $users = getUsers();
        include $_SERVER['DOCUMENT_ROOT'].'/view/users.php';
        break;

    default:
        $items = GetOrderedArtwork();
        include 'view/home.php';
}

include 'view/footer.php';
?>
</body>
</html>