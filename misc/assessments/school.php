<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">

    <title>School Page</title>
    <link href="/growin.css" media="screen" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    
</head>

<body>
    <img class="logo" src="/DG-1.png" alt="Smiley Face">
    <h1>Growin' Design | by Dawn Grow</h1>
    
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    
    <h2>School Page for CIT230</h2><br>

    <p class="left"><br>
    <br>
    This site is meant to be a portfolio for Dawn Grow, a student in Web
    Design.</p>

    
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/all journals.php'; ?>
    <p><br>
    <br>
    <br>
    <br>
    Welcome</p><br>
    <audio controls preload="none" src="Welcome.mp3"></audio>
    
    <p>Here is a video I helped my son create for his school
    project.  It tends to run better on Google Chrome.<br></p>
    <video controls="" height="320" preload="none" width=
    "568"><source src="hope.webmsd.webm" type="video/webm"> <source src=
    "hope.webmsd.webm" type="video/webm"></video>


    <p>Due to possible issues, a link to YouTube has been established <a href=
    "http://www.youtube.com/watch?v=ShjFhZQGX8g">YouTube Video</a></p>

    
        <embed height="240" src="hope.mp4" style="width:320px;height:240px"
        type="video/mp4" width="320"><br>
        <br>
    

    <p>If your browser does not support HTML5 video. You can download a
    <a href="hope.zip" title="download a zipped version of the file">zipped
    version</a> of the file in MP4 format to your computer.<br>
    For comments or questions ....<br></p>

    <form action="contact/index.php" id="contactform" method="post">
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


    
</body>
</html>