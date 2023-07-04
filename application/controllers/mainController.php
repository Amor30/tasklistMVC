<?php

	namespace application\controllers;

	use application\core\Controller;
	use application\core\View;
	use application\lib\DB;

	class mainController extends Controller
	{
		public function indexAction()
		{
			$result = $this->model->getTasks();
			$vars = 
			[
				'tasks' => $result,
			];
			$this->view->render('Главная страница', $vars);
		}
	}


?>