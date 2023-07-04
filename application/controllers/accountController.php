<?php

	namespace application\controllers;

	use application\core\Controller;
	use application\core\View;
	use application\lib\DB;

	class accountController extends Controller
	{
		public function loginAction()
		{
			if(isset($_POST['login-form']))
			{
				$vars =
				[
					'login' => $_POST['login'],
					'password' => $_POST['password'],
				];
				$this->model->login($vars);
			}

			$this->view->render('Авторизация');
		}

		public function logoutAction()
		{
			unset($_SESSION['user_id']);
			session_destroy();
			header('Location: ../');
		}
	}


?>