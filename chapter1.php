<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="chapter1.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="jquery-2.1.4.min%20(1).js"></script>
    <script type="text/javascript" src="home.js"></script>
    <meta charset="UTF-8">
    <title>Desserts Box </title>
</head>
<body>
<div class="overlaaay"></div>
<div class="hover-space">
    <header>
        <div class="logo">Desserts Box</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html" class="active">Chapter 1</a></li>
                <li><a href="chapter2.php">Chapter 2</a></li>
                <li><a href="#">Chapter 3</a></li>
                <li><a href="#">Chapter 4</a></li>
                <li><a href="#">Chapter 5</a></li>
                <li><a href="#">Chapter 6</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Contact </a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>
    </header>
</div>
<div class="textbox">
    <h1> Subscription Information </h1><br/>
</div>
<center>
<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$preferences = $_POST['preferences'];

echo 'Thank you for subscribing to DessertsBox.<br />';
echo 'Your name is ' . $first_name . '<br/>';
echo 'Your email address is ' . $email . '<br/>';
echo 'Your dessert preferences are ' . $preferences;
?>
</center>
<footer>
    <a href="http://dessertsbox.com" target="_blank">dessertsbox.com</a>
    <br/>
</footer>
</body>
</html>
