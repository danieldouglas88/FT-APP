<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>  

<?php
// define variables and set to empty values
    
include 'menu.php';
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach($meats as $value) {
  '$' . $value->Name = test_input($_POST['"' . $value->Name . '"']);
    
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Food Truck Menu</h2> <hr>
    
<?php
    
    if(is_numeric($taco) and is_numeric($carneasada) and is_numeric($tortas) and is_numeric($burrito) and is_numeric($taquito) and is_numeric($tamale)) { 
     
    foreach ($meats as $value) {
        
        echo ($taco * $value->Price). ": ". $value->Name ." at $" . $value->Price . ": Item total: $" . ($value->Price * $taco) . "<br>";

}
                
        
echo "<h2>Your Receipt: </h2>";
echo ($taco * 1) . " Carnitas Tacos at $7.99. Item total: $" . (7.99 * $taco);
        
echo "<br>";   
echo ($carneasada * 1) . " Carne Asada at $9.99. Item total: $" . (9.99 * $carneasada);
        
echo "<br>";
echo ($tortas * 1) . " Tortas at $8.99. Item total: $" . (8.99 * $tortas);
echo "<br>";
        
echo ($burrito * 1) . " Burrito at $7.99. Item total: $" . (7.99 * $burrito);
echo "<br>";

echo ($taquito * 1) . " Taquito at $6.99. Item total: $" . (6.99 * $taquito);
echo "<br>";
        
echo ($tamale * 1) . " Tamales at $5.99. Item total: $" . (5.99 * $tamale);
        
echo "<h2>Grand Total: $" . ((7.99 * $taco) + (9.99 * $carneasada) + (8.99 * $tortas) + (7.99 * $burrito) + (6.99 * $taquito) + (5.99 * $tamale)) . "</h2>";
     
    
    }else{
        echo "<script>alert('Please enter valid numbers only.')</script>" . "<h1>Please enter valid numbers only.</h1>";
    }
    ?>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    
<?php
    
foreach ($meats as $value) {
  echo $value->Name . '- $'. $value->Price . '<br> <input type="text" placeholder="How many?" name="' .  $value->Name .'" value="0"> <br>' .  $value->Description . '<br><br><hr>';
}
 ?>
    
  <input type="submit" name="submit"
 value="Submit">  
</form>
<br>
</body>
</html>