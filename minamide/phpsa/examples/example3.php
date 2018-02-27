<html><body>
<?php 
$x = $_POST['name'];
$x = htmlspecialchars($x);
for ($i = 0;  $i < 2; $i++) 
  echo $x;
?>
</body></html>
