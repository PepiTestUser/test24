$x = 1;
$y = 2;

public function hallo1() 
{
  $z = $x + $y;
  return $z;
}

// Alle Funktionen können beibehalten werden
public function hallo2()
{
  $ausgabe = "Ich bin ein Teststring von einem fremden User";
  return $ausgabe;
}


public function lokaleFunktion() 
{
	$hallo = "Ich bin eine lokal belegte Variable";
	return 'Ausgabe ist: ' . $hallo . "!";
}



