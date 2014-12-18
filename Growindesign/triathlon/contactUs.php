<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prison to Prison Triathlon </title>
    <link type="text/css" media="screen" rel="stylesheet" href="/triathlon/ptoptri.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    
</head>

    

<body>
    <h1>Prison to Prison Triathlon </h1>
    
   <br><br><br><br><br><br><h2>Contact Page</h2>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/trifooter.php'; ?>    
   <br><br>
        <nav class="logo"><img src="pics/tri%20logo.jpg" alt="Image number 1"></nav>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/route.php'; ?>
        <a class="map" href="pics/triathlon_route.jpg" title="enlarge"><img class="map2" src="pics/triathlon_route.jpg" alt="Image number 1"></a>
        <img class="right" src="pics/reg.jpg" alt="Smiley Face"> 
        
    
   <p><br><br>We can be reached at:<br><br>
       Dudley Doright Attn: Triathlon<br>
        San Francisco State Parks<br>
        50 NotReal Street, Suite 110<br>
        San Francisco, CA 94133<br>
        Phone: (415) 555-0100 or (800) 555-PARK<br>
        Fax: (415) 555-8969 <br>  
   <br>  
   <br><br> If you have any questions, fill out the information below.  Please fill in all the blanks.<br> </p>
   
   <form action="/assessments/contact/index2.php" id="contactform" method="post">
        <fieldset>
            <label for="name">Name:</label> <input id="name" name="name"
            required="" size="25" type="text" value="<?php echo $name; ?>"><br>
            <label for="email">Email Address:</label> <input id="email" name=
            "email" size="40" type="email"><br>
            <label for="subject">Subject:</label> <input id="subject" name=
            "subject" size="40" type="text"><br>
            <label for="message">Message:</label><br>
            <textarea cols="60" id="message" name="message" rows="10">
</textarea><br>
            Answer the following CAPTCHA question in the box below.<br>
            <label for="captcha">What color is a red apple?</label> <input id=
            "captcha" name="captcha" size="5" type="text"><br>
            <label for="action">&nbsp;</label><br>
            <input id="action" name="action" type="submit" value="Send"><br>
        </fieldset>
    </form>
   
   <br>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/trifooter.php'; ?>  
    
    <br><br>
    <br>
     <img class="big" src="pics/clearTri.png" alt="Smiley Face"> 
    
</body>

   
</html>