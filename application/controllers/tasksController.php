<?php

	namespace application\controllers;

	use application\core\Controller;

	class tasksController extends Controller
	{

		public function showAction()
		{
			$vars = 
			[
				"user_id" => $_SESSION['user_id'],
			];
			$result = $this->model->getTasks($vars);
			$this->view->render('Задачи', $result);
		}
	}


?>