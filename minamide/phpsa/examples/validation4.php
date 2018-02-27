<html>
<head><title>test</title></head>
<body>
<?php
// (<p></p>)^n<div>(<p></p>)^n</div>
$x = "<div>";
for ($i = 0; $i < 10; $i++) 
  $x = "<p></p>".$x."<p></p>";
echo $x;
echo "</div>";
?>
</body>
</html>