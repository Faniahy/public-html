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
	 function plusPetit($n,$a,$b){
		if($n<$a){
	        if($a<$b) echo $n;
	    }else{
	        if($a>$b) echo $b;
	        else echo $a;
	    }
    }

    plusPetit(100,1000,10000);


?>