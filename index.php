    <?php 
    $title = "Index";
    include 'includes/header.php'
    ?>
    <!-- BASIC HTML -->
    
    <h1>Hello World - PHP Primer</h1>
    <br/>
    <?php 
        //PRINTING TO HTML USING ECHO
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php 
        //Declaring Variable
        $name = 'Albert Watkins';
        $age = 21;
        //Calling Variable
        echo $name;        
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';
        //echo using double quotes and interpolation
        echo "<h1> My name is: $name </h1>"; 

        
    ?>
    <button type="button" class="btn btn-success">CLICK ME</button>
    <button type="button" class="btn btn-dark">DOUBLE CLICK</button>
    <button type="button" class="btn btn-outline-info">SINGLE CLICK</button>



    
    <?php require 'includes/footer.php' ?>