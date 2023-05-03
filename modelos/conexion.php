<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=sql209.epizy.com;dbname=epiz_32497908_pos",
			            "epiz_32497908",
			            "Lb9Y3oc4OY2");

		$link->exec("set names utf8");

		return $link;

	}

}