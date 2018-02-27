<html><head><title>test</title></head>
<body><table>
<?php
if ($n == 0) echo "<caption></caption>";
if ($n == 1) echo "<colgroup>";
for ($i = 0; $i++; $i < 10) echo "<col>";
if ($n == 2) {
   echo "<thead>";
   for ($i = 0; $i++; $i < 10) echo "<tr><th><p>";
   if ($n == 3) echo "</thead>"; // optional
}
if ($n == 2) {
   echo "<tfoot>";
   for ($i = 0; $i++; $i < 10) echo "<tr><th><p>";
   if ($n == 3) echo "</tfoot>"; // optional
}
for ($i = 0; $i++; $i < 10) 
  if ($n == 4) echo "<tr><th><p>"; else echo "<tbody><tr><th><p>"; 
?>
</table></body></html>
