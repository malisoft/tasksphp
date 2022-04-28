<?php
require_once "./config/global.php";
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
	case DEFAULT_SERVER . '/':
		require_once  'controller/index_controller.php';
		$index=new IndexController();
		$index->Show();
		break;
	case DEFAULT_SERVER . USER_ROUTE:
		require_once 'controller/user_controller.php';
		$user=new UserController();
		$user->Show();
		break;
	case DEFAULT_SERVER . ADMIN_ROUTE.CREATE:
		require_once 'controller/admin_controller.php';
		$admin=new AdminController();
		$admin->Create();
		break;
	case DEFAULT_SERVER . ADMIN_ROUTE:
		require_once 'controller/admin_controller.php';
		$admin=new AdminController();
		$admin->Show();
		break;

	default:
		echo ("Lo sentimos no pudimos encontrar su dirección");
		http_response_code(404);
		break;
}


