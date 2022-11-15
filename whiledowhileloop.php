<?php 
$title = "While and Do While";
include 'includes/header.php'
?>
<h1>While Loops</h1>
<?php 
    //pre-conditioned loop
    $grade = 0;
    while($grade < 10){
        echo '<p>GRADE IS LESS THAN 10 - while loop</p>';
        $grade++;
    }
    echo 'EXIT LOOP';
?>

<h1>Do While Loops</h1>
<?php 
    //post-conditioned loop
    //reset grade variable 
    $grade = 0;
    do{
        echo '<p>GRADE IS LESS THAN 10 - do while loop</p>';
        $grade++;
    }while($grade < 10);
    echo 'EXIT LOOP';
?>
<?php require 'includes/footer.php' ?>