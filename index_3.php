<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="index_3.php">
  <p>1) 2 + 2 = ?</p>
  <input type="radio" id="1" name="pirveli" value="1"> 1 <br>
  <input type="radio" id="2" name="pirveli" value="2"> 2 <br>
  <input type="radio" id="3" name="pirveli" value="3"> 3 <br>
  <input type="radio" id="4" name="pirveli" value="4"> 4 <br>

  <br>  

  <p>2) 2 + 2 * 2</p>
  <input type="radio" id="6" name="meore" value="6"> 6 <br>
  <input type="radio" id="8" name="meore" value="8"> 8 <br>
  <input type="radio" id="10" name="meore" value="10"> 10 <br>
  <input type="radio" id="0" name="meore" value="0"> 0 <br>

  <br>  

  <p>3) 3 * 3 = ?</p>
  <input type="radio" id="1" name="mesame" value="1"> 1 <br>
  <input type="radio" id="3" name="mesame" value="3"> 3 <br>
  <input type="radio" id="9" name="mesame" value="9"> 9 <br>
  <input type="radio" id="21" name="mesame" value="21"> 21 <br><br>

  <p>4)თარგმნეთ ინგლისურად ძაღლი</p>
  <input type="text" name="meotxe"><br>

  <br>  

  <p>5)თარგმნეთ ინგლისურად კატა</p>
  <input type="text" name="mexute"><br>

  <br>  

  <input type="submit" value="Submit"> <br><br>
</form>

<?php

$pirveli = $_POST["pirveli"];
$meore = $_POST["meore"];
$mesame = $_POST["mesame"];
$meotxe = $_POST["meotxe"];
$mexute = $_POST["mexute"];

if($pirveli == 4){
    $kitxva1 = true;
}else{
    $kitxva1 = false;
}


if($meore == 6){
    $kitxva2 = true;
}else{
    $kitxva2 = false;
}

if($mesame == 9){
    $kitxva3 = true;
}else{
    $kitxva3 = false;
}

if($meotxe == "dog"){
    $kitxva4 = true;
}else{
    $kitxva4 = false;
}

if($mexute == "cat"){
    $kitxva5 = true;
}else{
    $kitxva5 = false;
}

$pasuxebi = array($kitxva1, $kitxva2, $kitxva3, $kitxva4, $kitxva5);

echo count(array_filter($pasuxebi));

?>

</body>
</html>