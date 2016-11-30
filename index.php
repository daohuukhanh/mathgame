<?php include("include/header.php"); ?> 
<?php

$_SESSION['message'] = '';
$_SESSION['correct'] = 0;
$_SESSION['total'] = 0;
$_SESSION['n'] = rand(0,20);
$_SESSION['a'] = rand(0,20);
$_SESSION['b'] = rand(0,20);
$_SESSION['sum'] = $_SESSION['a'] + $_SESSION['b'];
$_SESSION['difference'] = $_SESSION['a'] - $_SESSION['b'];

    if ($_SESSION['n'] % 3 == 1) {
    echo $_SESSION['a'] . "+" . $_SESSION['b'] ;       
    }
        else {
            echo $_SESSION['a'] . "-" . $_SESSION['b'];
           
        } 
?>
<form role="form" action="mathgame.php" method="post">
<input type="text" name="answer" size="30" placeholder="Enter answer" />
<br />
<br />
<button type="submit" value="Submit" />Submit</button>
<form />
<?php echo $_SESSION['message']; ?>
<h3>Correct:</h3>
<?php
    echo $_SESSION['correct'] . "/" . $_SESSION['total']
        ?>
<br />
<a href = "logout.php" tite = "Logout">Log out
<?php include("include/footer.php"); ?>
