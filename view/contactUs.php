<!DOCTYPE html>
<html>


    

<body>
    
    
   <br><h2>Contact Page</h2>
   <?php //include 'header.php'; ?>  
   <?php //include $_SERVER['DOCUMENT_ROOT'].'header.php'; ?> 
   <br><br>
        
        
    
   <p><br><br>I can be reached at:<br><br>
        Dawn Grow<br>
        6653 Main St<br>
        Bonners Ferry, Idaho 83805<br>
        Phone: 208.267.5115<br>
          
   <br>  
   <br><br> If you have any questions, fill out the information below.  Please fill in all the blanks.<br> </p>
   
   <form action="/view/index.php" id="contactform" method="post">
        <fieldset>
            <label for="name">Name:</label> <input id="name" name="name"
            required="" size="25" type="text" ><br>
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
   
    
    
    
     
    
</body>

   
</html>