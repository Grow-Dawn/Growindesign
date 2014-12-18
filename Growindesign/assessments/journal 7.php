<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Journal Page</title>
    <link type="text/css" media="screen" rel="stylesheet" href="/growin.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
         
</head>


<body>
    <h1>Growin' Design | by Dawn Grow</h1>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?> 
    <h1>Journal 7 Page</h1>
    <p class="left"> <br><br>February 28, 2014<br>
        After the frustration of last week, I am still a little frustrated.  I know we are supposed to be adding keywords to help our SEO’s find our site better but I cannot for the life of me remember where we are supposed to add the keywords and cannot find the information in the instructions.  I did create a new addition to my account for the analytics though.  The biggest frustration this week comes from the validator, something is wrong with my code or NB because it is not connecting my ‘body’ and ‘/body’.  I have so many other issues with it not liking the end > on a lot of tags.  How am I supposed to make this work right if it won’t pass validation?  I definitely need help or an office hour to figure this out.<br>
        I finally figured out all my mistakes for validation.  I remember one of the instructions telling me where to put things and for some reason I had an h1 in the head with another with a link in the main and somehow all of that needed to be in the body making it now function right.  Also, I had a nested footer between the php and the module that were outside of the body too.  And I don’t remember seeing the instructions on alt tags for images but I got those put in also.  Yeah!  All 22 pages work and validate.<br>

    </p>
    <br><br>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/all journals.php'; ?> <br><br>
    
    
</body>

   
</html>