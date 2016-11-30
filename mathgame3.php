<?php include("include/header.php"); ?>
    <?php
$_SESSION['n'] = rand(0,20);
$_SESSION['a'] = rand(0,20);
$_SESSION['b'] = rand(0,20);
$_SESSION['operator'] = "+";
$_SESSION['sum'] = $_SESSION['a'] + $_SESSION['b'];
$_SESSION['difference'] = $_SESSION['a'] - $_SESSION['b'];

    if ($_SESSION['n'] % 2 == 1) {
        $_SESSION['operator'] = "+";
    }
        else {
           $_SESSION['operator'] = "-";
           
        } 
    echo $_SESSION['a'] . " " . $_SESSION['operator'] . " " . $_SESSION['b'] ; 
?>
        <form role="form" action="mathgame2.php" method="post">
            <input type="text" name="answer" size="30" placeholder="Enter answer" />
            <br />
            <br />
            <button type="submit" value="Submit" />Submit</button>
            <form />
            <?php echo $_SESSION['message']; ?>
                <h3>Correct:</h3>
                <?php
    echo $_SESSION['correct'] . "/" . $_SESSION['total'];
?>
<br /><br />
<a href = "logout.php" tite = "Logout" class="button">Log out</a>
<?php include("include/footer.php"); ?>