<?php include("include/header.php"); ?>
    <?php
    extract($_POST);
    
    $answer = trim($answer);

     if (!isset($answer) || empty($answer)) {
         $_SESSION['message'] = "<span style='color: red;'>Field cannot be empty</span>";
         header("Location: mathgame3.php"); 
         die();
     }
    else
    if (!is_numeric($answer)) {
        $_SESSION['message'] = "<span style='color: red;'>You need to enter a number</span>";
        header("Location: mathgame3.php"); 
        die();        
    }

?>
        <h3>Correct:</h3>
        <?php
    if (($_SESSION['operator'] == "+" && $answer == $_SESSION['sum'])
     || ($_SESSION['operator'] == "-" && $answer == $_SESSION['difference'])) {
        $_SESSION['message'] = "<span style='color: green;'>You are correct!</span>";
        $_SESSION['correct']++;
        $_SESSION['total']++;
    }
    else {
        $_SESSION['message'] = "<span style='color: red;'>You got it wrong!</span>";
        $_SESSION['total']++;
    }
    header("Location: mathgame3.php"); 
?>
<?php include("include/footer.php"); ?>