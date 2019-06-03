<?php
namespace Modelo;

class Database{

	private $database;

	public function __construct($container)
	{
		$this->database = $container->database;
	}


	public function Noticias(){
		$arr = $this->database->select('noticia', ['idNoticia', 'Titulo','Encabezado','Cuerpo','Estado']);
		return $arr;
	}
}