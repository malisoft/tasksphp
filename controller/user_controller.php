<?php

require 'model/user_model.php';
class UserController
{
	private	$user;
	public function __CONSTRUCT()
	{
		$this->user = new UserModel();
	}

	public function Show()
	{
		switch ($_SERVER["REQUEST_METHOD"]) {
			case 'POST':
				$this->Validate();
				break;
			case 'GET':
				break;
		}

		/*         if (isset($_SESSION["userId"])) {*/
		/*$users=$this->user->get_user_tasks($_SESSION["userId"]);*/
		/*require_once 'view/user_view.php';*/
		/*} else {*/

		/*header("Location: " . DEFAULT_SERVER);*/
		/*}*/
	}
	public function Validate()
	{
		if (isset($_POST['user']) && isset($_POST['password'])) {
			$this->user->user_name = $_POST['user'];
			$this->user->password = $_POST['password'];
			if ($this->user->login()) {
				$this->Show();
			} else {
				header("Location: " . DEFAULT_SERVER);
				die();
			}
		} else {
			echo ("no hay parametros");
		}
	}
}
