<?php
//namespace par defaut 
namespace App;
class Math{
	/* //fonction qui retourne le double d’un nombre 
	public static function double($nombre){
	return $nombre * 2;
	} */

	/* public static function TTC($nombreHT){
	return $nombreHT * 1.2;
	} */

	/* public static function compare($nombre1, $nombre2){
		if ($nombre1 === $nombre2){
			if ($nombre1 == $nombre2){
				return 1;
			}
		}
		else{
			return 0;
		}
	} */

	public static function pasinf($nombre1, $nombre2){
		if ($nombre1 > $nombre2){
			return 1;
		}
		else{
			return 0;
		}
	}
}
?>