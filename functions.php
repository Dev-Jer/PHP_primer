<?php 
$title = "Functions";
include 'includes/header.php'
?>
    <h1>Sample Functions<h1/>
    <?php 
        //Defining a function
        function writeMessage(){
            echo "function was called here <br/>";
        }

        //calling a function
        writeMessage();
        echo '<hr>';
        writeMessage();

        //function with parameters
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "the sum of $num1 and $num2 is: $sum <br/>";
        }

        //calling function with parameters
        $num = 500;
        addFunction(10, 30);

        //passing by reference
        function changeNum(&$num){
            $num = $num + 10;
        }

        changeNum($num);
        echo $num . '<br/>';
        
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $return_value = returnProduct(3, 10);
        echo $return_value . '<br/>';
    ?>
<?php require 'includes/footer.php' ?>