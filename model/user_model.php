<?php
require "db.php";
class UserModel extends db
{
	public $user_name;
	public $password;

	public function __construct()
	{
		$this->connect();
	}
	function get_user_tasks($userId)
	{
		try {
			$SQL = "SELECT * FROM task WHERE userId=?";
			$result = $this->connect()->prepare($SQL);
			$result->execute($userId);
			return $result->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error Administrator(view_users) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}


	function get_users()
	{
		try {
			$SQL = "SELECT * FROM user";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error Administrator(view_users) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function register_user($data)
	{

		try {
		  echo("creando usuario");
			$SQL = 'INSERT INTO user (user,password,type) VALUES (?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$data['user'],
					$data['password'],
					$data['type']
				)
			);
		} catch (Exception $e) {
		  echo ($e);
			//die('Error Administrator(register_users) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function login()
	{
		try {
			$SQL = 'SELECT * FROM user WHERE user=? ';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$this->user_name,
				)
			);
			$result->fetchAll(PDO::FETCH_OBJ);
			return $result->rowCount == 0 ? true : false;
		} catch (Exception $e) {

		} finally{
		  return false;
		}
	}
}
