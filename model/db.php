<?php
class db
{
	protected function connect()
	{
		try {
			$connect = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8;', 'root', '480484zZ+');
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connect;
		} catch (Exception $e) {
			die('Error db(connect) ' . $e->getMessage());
		}
	}
}
