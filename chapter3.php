<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="chapter3.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="jquery-2.1.4.min%20(1).js"></script>
    <script type="text/javascript" src="home.js"></script>
    <meta charset="UTF-8">
    <title>Desserts Box </title>
</head>
<body>
<div class="overlay"></div>
<div class="hover-space">
    <header>
        <div class="logo">Desserts Box</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="chapter1.html">Chapter 1</a></li>
                <li><a href="chapter2.html">Chapter 2</a></li>
                <li><a href="chapter3.html" class="active">Chapter 3</a></li>
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
    <h1> Subscribe to Weekly Newsletters ! </h1><br/>
</div>
<center>
    <form method="post" action="chapter3.php" class="form">
        <label for="first_name">First & Last Name:</label>
        <input type="text" id="first_name" name="first_name"/><br/><br/>
        <label for="email"> Email Address:</label>
        <input type="text" id="email" name="email"/><br/><br/>
        <input type="submit" value="Submit" name="submit"/>
    </form>
    <?php
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];

    $dbh = new PDO('mysql:host=localhost;dbname=subscription', 'root', 'root');

    $query = "INSERT INTO chapter3 (first_name, email)" .
        "VALUES(:first_name, :email)";

    $stmt = $dbh->prepare($query);
    $result = $stmt->execute(
        array(
            'first_name'        =>  $first_name,
            'email'             =>  $email,
        )
    );
    if(isset($_POST['submit'])) {
        echo 'Enjoy Our Weekly Newsletters! <br />';
        echo 'Your name is ' . $first_name . '<br/>';
        echo 'Your newsletter will be sent to ' . $email . '<br/>';
    }
    ?>
</center>
<footer>
    <a href="http://dessertsbox.com" target="_blank">dessertsbox.com</a>
    <br/>
</footer>
</body>
</html>
