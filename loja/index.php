<?php include("cabecalho.php")?>

<h1>Hello, world!</h1>

<?php 

	function somarArray($array) 
	{
		$total = 0;

		for($i = 0; $i < sizeof($array); $i++)
		{
			if(gettype($array[$i]) == "integer")
				$total += $array[$i];
		}	

		return $total;
	}

	$meuArray = array(1, 2, 3, 4, 5, "banana");

	echo somarArray($meuArray);
?>



<?php include("rodape.php")?>
