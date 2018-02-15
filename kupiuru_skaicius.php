<?php

/* Minimalaus Kupiuru Skaiciaus Algoritmas */

	function msk($psk) { //psk - pinigu suma keitimui
		
		$kupiuros = array(500, 200, 100, 50, 20, 10, 5, 1);
		rsort($kupiuros);
		
		$msk=0; //minimalus kupiuru skaicius
		
		foreach ($kupiuros as $k) {
			$msk += floor($psk/$k); //pridedamas kupiuru skaicius
			$psk = fmod($psk,$k); //atimama pridetu kupiuru sumos verte
			if($psk == 0) break;
		} 
		
		return $msk;
	}

	
/* Testui */

	function testas(){
		
		$reiksmes = array(999=>11, 5186=>16, 5000=>10, 135=>4, 12=>3, 500=>1, 5=>1, 0=>0);

		foreach($reiksmes as $x => $x_value){
			if(msk($x) == $x_value)echo $x." = ".msk($x).";\n"; //patikrinama ligybe ir parodomas rezultatas
			else echo $x." != ".msk($x).";\n";
		}
	}
