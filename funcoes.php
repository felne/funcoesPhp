<?php
	//tratar entrada de data BR para o banco SQL no formato EN
	function tratarData($param){
		$data = date("Y-m-d",strtotime(str_replace('/','-',$param)));
		return $data;
	}

	//para converter horas em segundos
	function converteHorasSegundos($horas){ 
		$segundos = strtotime('1970-01-01'.$horas.'UTC');
		return $segundos;
	}

	//para converter data/hora, basta usar direto a função strtotime.
	$segundos = strtotime('1970-01-01 23:59:02 UTC');

	//função para converter segundos em horas formatada. 
	function converterSegundosHoras($segundos){
		$horas = floor($segundos/3600);
		$minutos = floor(($segundos - ($horas*3600)) / 60 );
		$segundos = floor($segundos%60);

		return $horas.':'.$minutos.':'.$segundos;
	}


 ?>