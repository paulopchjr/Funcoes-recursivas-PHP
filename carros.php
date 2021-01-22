<?php 



$veiculos = array(
	array(
		'marca'=>'marcas',
		'modelo'=>array(

			// INICIO: VOLKS
			array(
				'marca'=>'VOLKSWAGEM',
				'modelo'=> array(
					// INICIO DO JETTA
					array(
						'marca'=>"JETTA",
						'cor'=>"Branco"
					)//FIM DO JETA
				)
			),
			// FIM : VOLKS

			//INICIO:TOYOTA
			array(
				'marca'=>'TOYOTA',
				'modelo'=>array(
					// INICIO DO COROLA
					array(
						'marca'=>'COROLA',
						'cor'=>'Prata'
					), //  FIM COROLA
				)
			)
		)
	)
);


	function exibe($carros){


		$html ='<ul>';

		foreach ($carros as $car) {
			$html.='<li>';
			$html.=$car['marca'];

			if (isset($car['modelo']) && count($car['modelo']) > 0){
				$html.= exibe($car['modelo']);
			}
			$html.='</li>';
		}

	   $html.='</ul>';

	   return $html;

	}


	echo exibe($veiculos);


	echo "<hr>";

	// IMPRIMI O ARRAY VEICULOS
	print_r($veiculos);






?>