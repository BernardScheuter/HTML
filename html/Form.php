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
        <img width="100%" src="https://038coder.nl/Images/100daysofcode banner.jpg" alt="Banner #100DaysOfCode" class="left">
        <div style="text-align:right;">&copy;Karlijn 2020</div>
        <h2><i>"Debugging my future!"</i></h2>
        <h6><i>Bernard '20</i></h6>
        
        <h3>Status:</h3>
            <div class="progress" style="background-color: rgb(40, 60, 0);">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="16" aria-valuemin="0"
                aria-valuemax="100" style="width:16%">
                    <div style="color:rgb(40, 60, 0);">16%</div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="https://038coder.nl/index.html">Home</a></li>
                    <li><a href="https://038coder.nl/html/contact.html" target="_blank">Contact</a></li>
                    <li><a class="selected active" href="https://038coder.nl/html/Form.php" target="_blank">Form</a></li>
                    <li><a href="https://038coder.nl/days/day1.html">First day</a></li>
                </ul>
            </nav>
    </header>

    <form action="https://038coder.nl/php/verwerk.php" target="_self" method="POST">
       <fieldset> 
        <p>
        <legend>You can ALMOST leave your feedback here:</legend>
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

<?php
echo date("Y-M-D_H:i:s");
echo "<br>Messages:<br>";
echo readfile("https://038coder.nl/php/message.txt");
?>    
<hr>
    <footer>
                &copy; Bernard Scheuter 2020 :D<br>
    </footer> 
</body>
</html>