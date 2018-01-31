<!DOCTYPE HTML>  
<html>
<head>
<style>
    body {
    margin: auto;
    width: 50%;
    border: 3px dashed lightblue;
    padding: 10px;
    }
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$taco = $carneasada = $tortas = $burrito = $taquito = $tamale = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $taco = test_input($_POST["taco"]);
  $carneasada = test_input($_POST["carneasada"]);
  $tortas = test_input($_POST["tortas"]);
  $burrito = test_input($_POST["burrito"]);
  $taquito = test_input($_POST["taquito"]);
  $tamale = test_input($_POST["tamale"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Food Truck Menu</h2>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Carnitas Tacos - $7.99 <br> <input type="text" placeholder="How many?" name="taco" value="0"> <br>
    Try our delicious Carnitas Tacos with premium pork and cooked with the freshest Jalopenos and Onions. Served with rice and beans.
  <br><br><hr>
    
  Carne Asada - $9.99 <br> <input type="text" placeholder="How many?" name="carneasada" value="0"> <br>
    Our incredible Carne Asada has the freshest local beef, served with green bell peppers, onions, and rice and beans.
  <br><br><hr>
    
  Tortas - $8.99 <br> <input type="text" placeholder="How many?" name="tortas" value="0"> <br>
    Our tortas are the best in Seattle: Served on fresh local bread, with the most premium regional meats and vegetables. 
  <br><br><hr>
    
      Burrito - $7.99 <br> <input type="text" placeholder="How many?" name="burrito" value="0"> <br>
    Fresh localized Burrito with rice, pinto beans, cilantro, onions, and your choice of meat.
  <br><br><hr>
    
      Taquitos - $6.99 <br> <input type="text" placeholder="How many?" name="taquito" value="0"> <br>
    Finest taquitos in town with cruncy shell outside and fresh meats and veggies inside.
  <br><br><hr>
    
      Mama's Tamale - $5.99 <br> <input type="text" placeholder="How many?" name="tamale" value="0"> <br>
    Premium tamales like Mama use to make. With shreded meat and premium salsa on the side.
  <br><br><hr>
  <input type="submit" name="submit"
 value="Submit">  
</form>
    
    

<?php
    if(is_numeric($taco) and is_numeric($carneasada) and is_numeric($tortas) and is_numeric($burrito) and is_numeric($taquito) and is_numeric($tamale)) { 
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
echo "<br>";
        
echo "<h2>Grand Total: $" . ((7.99 * $taco) + (9.99 * $carneasada) + (8.99 * $tortas) + (7.99 * $burrito) + (6.99 * $taquito) + (5.99 * $tamale)) . "</h2>"; 
     
    
    }else{
        echo "<script>alert('Please enter valid numbers only.')</script>" . "<h1>Please enter valid numbers only.</h1>";
    }
?>

</body>
</html>