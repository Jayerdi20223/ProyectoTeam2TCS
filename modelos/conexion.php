<?php

class Conexion{

	public function conectar(){
	//	Development Connection
	//	$link = new PDO("mysql:host=localhost;dbname=ecommerce",
	//					"root",
	//					"root",
	//					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	//	                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	//					);

	//	Remote Database Connection
		$link = new PDO("mysql:host=remotemysql.com;dbname=sxy0IG1TIW",
						"sxy0IG1TIW",
						"Z4hafY3UDB",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



