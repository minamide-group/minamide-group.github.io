<html>
<head><title>test</title></head>
<body>
<?php
// <div>(<p></p>)^+</div>
echo "<div><p>";
for ($i = 0; $i < 10; $i++) 
  echo "</p><p>";
echo "</p></div>";
?>
</body>
</html>