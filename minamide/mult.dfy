// multiplication
method mult (x: int, y: int) returns (result: int) 
  requires y >= 0
  ensures result == x * y
{
  var z: int := 0;
  var d: int := 0;

  while (d < y)
    invariant z == x * d
    invariant d <= y
    decreases y - d
  {
    d := d + 1;
    z := z + x;
  }
  return z;
}

method Main() {
  var r := mult(3,5);
  print r, "\n";
} 