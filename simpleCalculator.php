
<html>
<head>
  <title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
div.calb{
  position: absolute;
  text-align: center;
  background: #F0F8FF;
  border-radius: 30px 30px 30px 30px;
  width: 478px;
  height: 380px;
  left:520px;
  top:150px;
}

div.out{
  position: relative;
  background-color: #008000;
  width: 300px;
  color: #FFFF00;
  top: 50px;
  left:100px;
  font-size: 26px;

}

div.cl{
  position: relative;
  top:24px;
}
</style>

<div class ="calb">
<?php
$page = $_GET['page'];

// Defining the "calculator" class
class calculator {
     var $value1;
     var $value2;

          function add($value1,$value2)
          {
                   $result =$value1 + $value2;
                    echo("$result");
                    exit;
           }

          function subtract($value1,$value2)
          {
                   $result =$value1 - $value2;
                    echo("$result");
                    exit;
           }

          function divide($value1,$value2)
          {
                   $result =$value1 / $value2;
                    echo("$result");
                    exit;
           }

          function multiply($value1,$value2)
          {
                   $result =$value1 * $value2;
                    echo("$result");
                    exit;
           }
}
$calculator = new calculator();
?>

<html>
    <head>
       <title>PHP calculator </title>
    </head>

    <body>
<form name="calculator" action="?page=calculator" method="POST">

<input type=text name=value1>
<input type=text name=value2><br>

<input type=radio name=operator value="add">Addition 
<input type=radio name=operator value="subtract">Subtraction 
<input type=radio name=operator value="multiply">Multiplication
<input type=radio name=operator value="divide">Division 

</input><br>

<div class="cl">
<input type=submit value="   Calculate   ">
</div>
</form>
<div class="out">

<?php
if($page == "calculator"){
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$operator = $_POST['operator'];
    
    // check that $value1 & $value2 are intered
     if(!$value1){
          echo("You must enter first value !");
          exit;
     }
     if(!$value2){
          echo("You must enter sencond value!");
          exit;
     } 
     if(!$operator){
          echo("You must select an operatoration!");
          exit;
     }
     if(!eregi("[0-9]", $value1)){
          echo("Please enter a number!");
          exit;
     }
     if(!eregi("[0-9]", $value2)){
          echo("Please enter a number!");
          exit;
     }
      // calculate $value using if els statement
     if($operator == "add"){
          $calculator->add($value1,$value2);
     }
     if($operator == "subtract"){
          $calculator->subtract($value1,$value2);
     }
     if($operator == "divide"){
          $calculator->divide($value1,$value2);
     }
     if($operator == "multiply"){
          $calculator->multiply($value1,$value2);
     }
}
?> 
</div>
</div>
</body>
</html>