<?php
function mesDiaAnio($fecha){
	$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	return $meses[date("n", strtotime($fecha))-1]." ".date("d", strtotime($fecha)). ", ".date(date("Y", strtotime($fecha))) ;
}