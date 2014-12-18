

<p>
    First Name: <input type="text" name="fname" id="fname" /><br />
    Last Name: <input type="text" name="lname" id="lname" /><br />
    Email Address: <input type="email" name="email" id="email" /><br />
    </p>
        <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
    ?>
    
     <?php
    
    $input = "<script>alert('LOL, you just got hacked!')</script>";
    var_filter($input, FILTER_SANITIZE_STRING);
    echo $input;       
    filter

//echo "10";
    ?> 

