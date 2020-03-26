<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="index_2.php">
    <input type="text" name="name"> saxeli <br><br> 
    <input type="text" name="age"> asaki <br><br>
    <input type="text" name="work"> tanamdeboba <br><br>
    <input type="text" name="salary"> xelfasis raodenoba <br><br>
    <input type="text" name="percent"> dakavebuli sashemosavlo <br><br>
    <input type="text" name="money"> fuli <br><br>
    <input type="submit" value = "submit"> <br><br>
</form>


<?php


$name = $_POST["name"];
$age = $_POST["age"];
$work = $_POST["work"];
$salary = $_POST["salary"];
$percent = $_POST["percent"];
$money = $_POST["money"];


echo 
"<table border = '1' width = '400'>
    <tr border = '1' >
    <td bprder = '1'>saxeli
    </td>
    <td bprder = '1' width = '200'>$name
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>asaki
    </td>
    <td bprder = '1'>$age
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>tanamdeboba
    </td>
    <td bprder = '1'>$work
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>xelfasis raodenoba
    </td>
    <td bprder = '1'>$salary
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>dakavebuli sashemosavlo
    </td>
    <td bprder = '1'>$percent
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>fuli
    </td>
    <td bprder = '1'>$money
    </td>
    </tr>
</table>";

?>

</body>
</html>