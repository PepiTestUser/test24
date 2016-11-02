$x = 1;
$y = 2;

public function hallo1() 
{
  $z = $x + $y;
  return $z;
}

public function lokaleFunktion() 
{
	$hallo = "Ich bin eine lokal belegte Variable";
	return 'Ausgabe ist: ' . $hallo . "!";
}