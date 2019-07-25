<?php
	/*$notes = [10,20,5,11,8];
	echo $notes[1];// 20
	echo $notes[3]; // 11*/

	/*$eleve = ['Marc', 'Doe', [10,20,40]];*/
	/*$eleve = [
		[
			'nom' => 'Doe', 
			'prenom' => 'Marc',
			'note' => [10, 20, 11]
		],
		[
			'nom' => 'ralison',
			'prenom' => 'faniahy',
			'notes' => [15, 14, 13]
		]
		
	];*/

	/* echo $eleve[2][1]; // 20 
	/* print_r($eleve['note']);  // 20 */
	/*echo $eleve[1]['notes'][1]; // 14*/

	//$notes = readline("Entrez votre note: "); // Afaka mampiditra am clavier
	/*if($notes >= 10){
		echo "Vous avez la moyenne";
	} else {
		echo 'Désoler vous n\'avez pas la moyenne';
	}*/

	/* Plus Petit des 3 nombres */
	 function plusPetit($n,$a,$b){
		if($n<$a){
	        if($a<$b) echo $n;
	    }else{
	        if($a>$b) echo $b;
	        else echo $a;
	    }
    }

    //plusPetit(100,1000,10000);

    /* Retourne le premier element d'un tableau */
    function premierElementTableau($tab){
        if(is_null($tab)) return null;
        else echo "\n".$tab[0];
    }

    $tab = [1,2,3];
    //premierElementTableau($tab);

   /* Retourne le dernier element d'un tableau */
    function dernierElementTableau($tab){
        $l = sizeof($tab);
        if(is_null($tab)) return null;
        else return $tab[$l-1];
    }

    function plusGrand($tab){
        if(is_null($tab)) return null;
        else{
            echo max($tab);
        }
    }
    function plusGrand2($tab){
        if(is_null($tab)) return null;
        else{
            $size = sizeof($tab);
		    $max = $tab[0];
		for ($i = 0; $i < $size - 1; $i++)
			if ($tab[$i] < $tab[$i + 1] && $tab[$i + 1] > $max)
				$max = $tab[$i + 1];
		return $max;
        }
    }
    plusGrand($tab);
    plusGrand2($tab);

?>