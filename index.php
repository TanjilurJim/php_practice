<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- <form action="index.php" method="post">
        <label> username</label><br>
        <input type="text" name="username"><br>
        <label>password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form> <br> <hr>

    <form action="index.php" method="post"> 
        <label> Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total"><br>
        
     </form> <br>
     <hr>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x" value="
       ">
        <input type="submit" name="action" value="total">
        <input type="submit" name="action" value="round">
        <input type="submit" name="action" value="floor">
        <input type="submit" name="action" value="Random">
    </form>  
    <hr> -->

    <!-- user will give radius as an input and I will calculate the area, circumference, volume etc  -->
<!-- <br><br><br>
<br><br>
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">

    </form><br><br>
<hr>
    <form action="index.php" method="post">
        <label>Enter a number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">

    </form><br><br>
    

    <form action="index.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
    <hr><br>

    <form action="index.php" method="post">
    <label for="">Enter a country</label>
    <input type="text" name="country">
    <input type="submit">

    </form><br><hr>
    <form action="index.php" method="post">
        <label for="">username:</label>
        <input type="text" name="username"><br>
        <label for=""> password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">






    </form><br><hr>

    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa <br>
        <input type="radio" name="credit_card" value="Master Card"> Master Card <br>
        <input type="radio" name="credit_card" value="American Express"> Amercian Express <br>
        <input type="submit" name="confirm" value="confirm">

    </form> <br> <hr>

    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza"> Pizza <br>
        <input type="checkbox" name="burger" value="Burger"> Burger <br>
        <input type="checkbox" name="hotdog" value="Hotdog"> Hotdog <br>
        <input type="checkbox" name="taco" value="Taco"> Taco <br>

        <input type="submit" name="submit">
    </form>
    <br><br><hr><br> -->

    <!-- <form action="index.php" method="post">
        <label for="">username:</label><br>
        <input type="text" name="username"> <br>
        <label for="">age</label><br>
        <input type="text" name="age">
        <label for="">email</label><br>
        <input type="text" name="email">
        <input type="submit" name="login" value="login">
    
    </form>
    <br><hr>

    this is the home page

</body>
</html> -->
<?php 

    // session
    session_start();

    include("database.php");

    // cookie
    // setcookie("facce_food", "pizza", time() + (86400 * 2), "/"); 
    // setcookie("fave_desser", "pudding", time() + (86400 * 2), "/"); 

    // foreach($_COOKIE as $key => $value)
    // {
    //     echo"{$key} = {$value}<br> ";

    // }

    // include("header.html");

    // include("footer.html");
    // INCLUDE() = Copies the content of a file (php/html/text) and includes it in the php file.

     



    // SANTIZE / VALIDATE



    // if(isset($_POST['login'])){

    //     $username = filter_input(INPUT_POST,"username",
    
    //                                 FILTER_SANITIZE_SPECIAL_CHARS);
        
    //     $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    //     $age = filter_input(INPUT_POST, 'age',FILTER_SANITIZE_NUMBER_INT);




    //     echo "You are {$age} years old";

    //     echo"ok {$username}";
    // }
    
    
    // echo"strings" . "<br> <br>";
    // $username ="Bro Code ABC";

    // $username = strtolower($username);

    // echo $username . "<br> <hr>";

    // $a = trim($username);
    
    // $count = strlen($a) . " characters <br>";
    // echo"$count";

    // $fullname = explode(" ", $username);

    // // echo $fullname;

    // foreach ($fullname as $name){
    //     echo $name . "<br>";

    // }





    


    // echo"functions practice" . "<br>";

    // function hypotenuse($a,$b){
    //     $c = sqrt($a ** 2 + $b **2);
    //     return $c . "<hr> <br>";

    // }

    // echo hypotenuse(1,1);


    // function happy_birthday($first_name, $age){

    //     echo"Happy {$age}rd/th/nd Birthday {$first_name}  !!" . "<br>";




    // }
    // happy_birthday("jim", 26);
    // happy_birthday("john", 13);
    // happy_birthday("joe", 32);


    // if(isset($_POST["submit"])){

    //     if(isset($_POST["pizza"])){
    //         echo"You Like Pizza";
    //     }
    //     if(isset($_POST["hotdog"])){
    //         echo"You Like hotdog";
    //     }
    //     if(isset($_POST["burger"])){
    //         echo"You Like burger";
    //     }
        
    //     if(isset($_POST["taco"])){
    //         echo"You Like tac";
    //     }
    // }
    
    




    //radio button and isset function

    // if(isset($_POST['confirm'])){
    //     if(isset($_POST["credit_card"])){
    //         $credit_card = $_POST["credit_card"];
    //         // echo $credit_card;
    //     }

    //     if($credit_card == "Visa"){
    //         echo"You Selected Visa";
    //     }
    //     elseif($credit_card == "Master Card"){
    //         echo"You Selected Master Card";
    //     }
    //     elseif($credit_card == "American Express"){
    //         echo"You Selected American Express";
    //     }
    //     else{
    //         echo"Please make a selection";
    //     }

    // }

    // $credit_card = $_POST["credit_card"];

    // isset() , empty()

    // $username = "Jim";

    // echo isset($username);

    // foreach($_POST as $key => $value){

    //     echo"{$key} = {$value} <br>";
    // }

    // if(isset($_POST["login"])){
    //     echo"You Tried to login";
    // }

    // if(isset($_POST["login"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     if(empty($username)){
    //         echo"Username is missing";

    //     }
    //     elseif(empty($password)){
    //         echo"Password is missing"; 
    //     }
    //     else{
    //         echo"Hello {$username}";
    //     }


    // }
    

    // Associative arrays 

    // $capitals =array("USA" => "Washington D.C",
    //                 "Japan" => "Tokyo",
    //                 "Korea" => "Seoul");

    // $capitals["USA"] = "las Vegas";

    // foreach($capitals as $key => $value){
    //     echo"{$value} is the capital of {$key} <br>";
    // }

    
    // $capital = $capitals[$_POST["country"]];
    // echo $capital . "<hr>" ;




    //arrays
    // $foods = array("apple","orange","banana","coconut");

    // array_push($foods, "pineapple", "kiwi");

    // foreach($foods as $food){
    //     echo $food. "<br>" ;
    // }"<br>"
    



    //
    // $seconds = 0;
    // $running = true;

    // while($running){

    //     if(isset($_POST["stop"])){
    //         $running = false;
    //         echo"Stopped Running";
    //     }
    //     else{

    //     //wait 1 second
    //     $seconds++;
    //     echo $seconds . "<br>";
    //     }

    // }


    // $counter = $_POST["counter"];

    // for($i = 1; $i <=$counter; $i++){
    //     echo $i . "<br>";
    // }

    // $temp = 25;
    // $cloudy = true;
    // if ($temp >=0 && $temp <=30) {
    //     echo"The weather is good<br>";
    // }
    // else{
    //     echo"The weather is bad <br>";
    // }
    

    // if(!$cloudy){
    //     echo"It's sunny";
    // }
    // else{
    //     echo"it's overcast";
    // }

    // logical operators in php

    // and && or || not !
    



    // $hours = 40;
    // $rate = 15;
    // $weekly_pay = null;


    // if ($hours <=0){
    //     $weekly_pay = 0;
        
    // }
    // elseif($hours <=40){
    //     $weekly_pay = $hours * $rate;
        
    // }
    // echo"You made \${$weekly_pay} this week";




    // $radius =$_POST["radius"];
    // $circumference = null;

    // $circumference =2 * pi()* $radius;
    // $circumference = round($circumference,2);

    // echo"Circumference = {$circumference}cm <br>";
    
     // math function
    // if (isset($_POST["x"]) && is_numeric($_POST["x"]) && isset($_POST["action"])) {
    //     $x = $_POST["x"];
        
    //     if ($_POST["action"] === "total") {
    //         $total = abs($x);
    //         echo "Total (absolute value): {$total}";
    //     } elseif ($_POST["action"] === "round") {
    //         $rounded = round($x);
    //         echo "Rounded value: {$rounded}";
    //     } elseif ($_POST["action"] === "floor") {
    //         $floored = floor($x);
    //         echo "Floor value: {$floored}";
    //     }elseif ($_POST["action"] === "Random") {
    //         $random = rand(1,100);
    //         echo "A random number between 1-100: {$random}";
    //     }
    // } elseif (isset($_POST["x"]) && !is_numeric($_POST["x"])) {
    //     echo "Please enter a valid number.";
    // }

    // $item = "pizza";
    // $price =  5.99;
    // $quantity = $_POST["quantity"]; //The quantity received from the form
    // $total = null;
    // $total = $quantity * $price;


    // echo"you have ordered {$quantity} x {$item}/s<br>";
    // echo"Your total is: \${$total}";


    // echo "{$_POST["username"]}<br>";
    // echo $_POST["password"];

// $name ='Gio'; -->


// echo 'Hello ' , $name,' PHP test';

// $x = 3;
// $y = &$x;
// $x = 1 ;
// $age = 26;
// $quantity =2;
// $price = 4.99;
// $employed = true;
// $online = false;

// echo $y; 

// echo" I like burger <br>"; // this is a comment 


// variables in php

// $name = "Bro {$name}, you are {$age} years old <br>"; // placeholders can be even used inside variables
// echo $name;


// echo" You have  ordered {$quantity} pizzas <br>";
// $total = $quantity * $price;
// echo"Your total is: \${$total}<br>";

// Arithmetic operators
// increment/ decrement operators
// ++, --
// Operator Precedence
//()
// * / %
// + -

// $x = 10;
// $y =2;
// $z = null;

// $z =  $x * $y ;

// echo $z ;

// increment/ decrement operators
// $counter = 0;

// $counter++;
// echo" counter is, {$counter}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- This is the login page <br>
    <a href="home.php">This goes to the home page </a> -->

    <!-- Hello  -->
    <!-- <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        password: <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">




    </form> -->

    <form action="<?php  htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to Fakebook! </h2>

        username: <br>
        <input type="text" name="username"> <br>
        password: <br>
        <input type="passoword" name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>


</body>
</html>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo"please enter a username";

        }
        elseif(empty($password)){
            echo"Please enter a password";
        }
        else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username','$hash')";
            mysqli_query($conn,  $sql);
            echo"You are now registered";

        }
    }

    // foreach($_SERVER as $key => $value){
    //     echo"{$key} = {$value} <br>";

    // }

    // if(isset($_POST['login'])){

        

    //     if(!empty($_POST["username"]) && 
    //        !empty($_POST["password"]) ){

    //         $_SESSION["username"] = $_POST["username"];
    //     $_SESSION["password"] = $_POST["password"];

    //     echo $_SESSION["username"] . "<br>";
    //     echo $_SESSION["password"] . "<br>";

    //     header("Location:home.php");

    //     }
    //     else{
    //         echo"Missing username/password";
    //     }

    // }

    mysqli_close($conn);

?>