<?php 
$title = "Switch Statement";
include 'includes/header.php'
?>
    <h1>Switch Statements</h1>
    <?php 
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">YOU ARE AWESOME!</h2>';
                break;

            case 'B':
                echo '<h2 style="color: orange">YOU DID GOOD</h2>';
                break;
            
            default:
                echo '<h2 style="color: red">TRY HARDER NEXT TIME</h2>';
                break;
        }
    ?>
<?php require 'includes/footer.php' ?>