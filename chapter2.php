<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="chapter2.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="jquery-2.1.4.min%20(1).js"></script>
    <script type="text/javascript" src="home.js"></script>
    <meta charset="UTF-8">
    <title>Desserts Box </title>
</head>
<body>
<div class="overlauy"></div>
<div class="hover-space">
    <header>
        <div class="logo">Desserts Box</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="chapter1.html">Chapter 1</a></li>
                <li><a href="chapter2.html" class="active">Chapter 2</a></li>
                <li><a href="chapter3.php">Chapter 3</a></li>
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
    <form method="post" action="chapter2.php" class="form">
        <label for="first_name">First & Last Name:</label>
        <input type="text" id="first_name" name="first_name"/><br/><br/>
        <label for="email"> Email Address:</label>
        <input type="text" id="email" name="email"/><br/><br/>
        <label for="preferences"> What desserts do you prefer?</label>
        <input type="text" id="preferences" name="preferences"/><br/><br/>
        <input type="submit" value="Submit" name="submit"/>
    </form>
    <?php
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $preferences = $_POST['preferences'];

    $dbh = new PDO('mysql:host=localhost;dbname=subscription', 'root', 'root');

    $query = "INSERT INTO chapter2 (first_name, email, preferences)" .
        "VALUES(:first_name, :email, :preferences)";

    $stmt = $dbh->prepare($query);
    $result = $stmt->execute(
        array(
            'first_name'        =>  $first_name,
            'email'             =>  $email,
            'preferences'       =>  $preferences
        )
    );
if(isset($_POST['submit'])) {
    echo 'Thank you for subscribing to DessertsBox.<br />';
    echo 'Your name is ' . $first_name . '<br/>';
    echo 'Your email address is ' . $email . '<br/>';
    echo 'Your dessert preferences are ' . $preferences;
}
    ?>
</center>
<footer>
    <a href="http://dessertsbox.com" target="_blank">dessertsbox.com</a>
    <br/>
</footer>
</body>
</html>
