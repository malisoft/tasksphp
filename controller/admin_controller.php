<?php
require "model/user_model.php";
require "config/global.php";
class AdminController
{
	private $user;
	function __construct()
	{
		$this->user = new UserModel();
	}
	function Show()
	{
		//this users variable will be used in the component when this will run
		$users = $this->user->get_users();
		require_once 'view/admin_view.php';
	}
	function Create()
	{
		switch ($_SERVER["REQUEST_METHOD"]) {
			case 'POST':
				$this->CreateUser();
				break;
			case 'GET':

				require_once 'view/create_user_view.php';
				break;
		}
	}
	function CreateUser()
	{

		echo ($_POST['user']);
		echo ($_POST['password']);
		echo ($_POST['type']);
		if (isset($_POST['user']) && isset($_POST['password']) && isset($_POST['type'])) {
			$data['user'] = $_POST['user'];
			$data['password'] = $_POST['password'];
			$data['type'] = $_POST['type'];
			$this->user->register_user($data);
			header("Location: " . DEFAULT_SERVER . ADMIN_ROUTE);
			die();
		} else {
			echo ("no hay datos");
		}
	}
}
