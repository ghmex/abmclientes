<?php



//4.Informar si la empresa terminó el año con ganancias o pérdidas, mostrando en pantalla la palabra POSITIVO O NEGATIVO.

$aCashflow["facturacion"] = array(875, 958, 345, 567, 136, 970, 563, 129, 567, 897, 984, 457);
$aCashflow["gastos"] = array(346, 467, 789, 508, 754, 567, 600, 456, 300, 350, 500, 128);

echo "Estado de flujo de TOUR SA.";
//1.Sumarizar la facturación anual
echo "<br>";
		function sumarizar($aCashflow){
			$totalFacturacion = 0;
				foreach ($aCashflow["facturacion"] as $aCash) {
				$totalFacturacion += $aCash;
			}
		return $totalFacturacion;
	}

echo "Facturación anual: ". sumarizar($aCashflow);
//2.Sumarizar los gastos anuales
		function sumarizarGastos($aCashflow){
			$totalGastos = 0;
				foreach ($aCashflow["gastos"] as $aGastos) {
				$totalGastos += $aGastos;
			}
		return $totalGastos;
	}

echo "<br>";

echo "Gastos anuales: ". sumarizarGastos($aCashflow);

echo "<br>";

//3.El mes de mayor ganancia
$mesGanancias = 0;
		//si la cantidad de elementos de arrays es igual
	if (count($aCashflow["facturacion"]) == count($aCashflow["gastos"])) {
		//creamos un bucle for para que la variable i sea igual a la cantidad de elementos del array
		for ($i=0; $i < count($aCashflow["facturacion"]) ; $i++) { 
		//entonces hacemos la cuenta para restar los dos arrays y lo guardamos en un nuevo array
			$mesGanancias = $aCashflow["facturacion"][$i] - $aCashflow["gastos"][$i];
 		
		}
		return $mesGanancias;
	}
	echo "$mesGanancias";
	/*$contador = 0;
	$mesGanancia = 0;
	foreach ($mesGanancias as $mayorGanancias) {
	 	if ($mesGanancia < $mayorGanancias){
	 		$mesGanancia = $mayorGanancias; 
	 		for ($i=0; $i < count($mayorGanancias) ; $i++) { 
	 			$i = count($mesGanancia); 
	 		return $i;
	 		}
	 	}
	}*/
		
echo "<br>";

echo "<br>";

	//while ejecuta un pedazo de codigo mientras la condicion siga siendo verdadera

?>