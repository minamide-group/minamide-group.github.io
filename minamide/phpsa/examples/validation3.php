<html>
<head><title>test</title></head>
<body>
<?php

$x1 = "<div>";
$x2 = $x1.$x1;
$x3 = $x2.$x2;
$x4 = $x3.$x3;
$x5 = $x4.$x4;
$y1 = "</div>";
$y2 = $y1.$y1;
$y3 = $y2.$y2;
$y4 = $y3.$y3;
$y5 = $y4.$y4;
echo $x5;
echo $y5;
?>
</body>
</html>