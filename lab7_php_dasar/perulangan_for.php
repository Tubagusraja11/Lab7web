<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>PHP Dasar</title> 
</head> 
<body> 
    <h2>Perulangan For</h2> 
<?php 
echo "Perulangan 1 sampai 15 <br />"; 
for ($i=1; $i<=15; $i++) { 
    echo "Perulangan ke: " . $i . '<br />'; 
} 
echo "Perulangan Menurun dari 15 ke 1 <br />"; 
for ($i=15; $i>=1; $i--) { 
    echo "Perulangan ke: " . $i . '<br />'; 
} 
?>   
</body> 
</html>