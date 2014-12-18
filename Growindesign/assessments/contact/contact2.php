<?php 
    if(!empty($reply)){

      echo "<p class='notify'>$reply</p>";

    }

    unset($reply);
    ?>

<main>
<form method="post" action="index2.php" id="contactform">

  <fieldset>

   <label for="name">Name:</label>
   
   <input type="text" name="name" id="name" size="25" value="<?php echo $firstname; ?>" required><br>
   
   
   <label for="email">Email Address:</label>
   <input type="email" name="email" id="email" size="40" value="<?php echo $email; ?>" required><br>
   

   <label for="subject">Subject:</label>

   
   <input type="text" name="subject" id="subject" size="40" value="<?php echo $subject; ?>" required><br>
   <label for="message">Message</label>

   
   <textarea name="message" id="message" rows="10" cols="60" required><?php echo $message; ?></textarea><br>

<p>Answer the following CAPTCHA question in the box below.</p>

<label for="captcha">What color is a red apple?</label>

<input type="text" name="captcha" id="captcha" size="5" required><br>

<label for="action">&nbsp;</label>

<input type="submit" name="action" id="action" value="Send">

</fieldset>

</form>  

</main>
           
