<?php 
$title = "Array and Printouts";
include 'includes/header.php'
?>
    <h1>Arrays and Printouts</h1>
    <?php 
        //array declaration
        $numbers = array(1,2,3,4,5,6,7,8,9,10,34,1,4,5,7,9,4,7,5,2,8,9,3,1);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Number is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }

    ?>
<?php require 'includes/footer.php' ?>