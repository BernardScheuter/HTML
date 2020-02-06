<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>038Coder.nl #100DaysOfCode</title>
    <meta name="description" content="PHP form page">
    <meta name="author" content="Bernard Scheuter">
    <meta http-equiv="cache-control" content="no-cache">
    <meta />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://038coder.nl/style.css" rel="my own stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <img width="100%" src="https://038coder.nl/Images/038CoderBanner.jpeg" alt="Banner #100DaysOfCode" class="left">
        <iframe src="./Status100DaysOfCode.html" height="200" width="100%" style="border:none;"></iframe>
            <nav>
                <ul>
                    <li><a href="https://038coder.nl/index.html">Home</a></li>
                    <li><a href="https://038coder.nl/html/contact.html">Contact</a></li>
                    <li><a class="selected active" href="https://038coder.nl/html/Form.php">Form</a></li>
                    <li><a href="https://038coder.nl/days/day1.html">First day</a></li>
                </ul>
            </nav>
    </header>

    <form action="https://038coder.nl/php/verwerk.php" target="_self" method="POST">
       <fieldset> 
        <p>
        <legend>You can leave your feedback here:</legend>
        Your name:<br>
        <input type="text" name="firstname" placeholder="Your name">
        <br>
        Your message:
        <br>
        <input type="text" name="message" placeholder="Your message">
        <br>
        <input float="left" type="button" onclick="history.go(-1);" value="BACK">
        <input float="left" type="reset">
        <input float="left" type="submit" name="SEND">
        </p>
       </fieldset> 
    </form>
<p>
<?php
echo date("Y-M-D_H:i:s");
echo "<br>Messages:<br><br><br>";
echo @readfile("https://038coder.nl/php/message.txt");
?>
</p>    
<hr>
    <footer>
                &copy; Bernard Scheuter 2020 :D<br>
    </footer> 
</body>
</html>