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

		public function removeAllAction()
		{
			$vars = 
			[
				"user_id" => $_SESSION['user_id'],
			];
			$this->model->removeAll($vars);
			header('Location: ../tasks/show');
		}

		public function readyAllAction()
		{
			$vars =
			[
				"user_id" => $_SESSION['user_id'],
			];
			$this->model->readyAll($vars);
			header('Location: ../tasks/show');
		}
				
		public function addAction()
		{
			$vars =
			[
				"user_id" => $_SESSION['user_id'],
				'description' => $_POST['description'],
			];
			$this->model->add($vars);
			header('Location: ../tasks/show');
		}

		public function deleteAction()
		{
			$vars =
			[
				'id' => $_POST['deleteTask-form'],
			];
			$this->model->delete($vars);
			header('Location: ../tasks/show');
		}

		public function readyAction()
		{
			$vars =
			[
				'id' => $_POST['statusTask-form'],
			];
			$this->model->ready($vars);
			header('Location: ../tasks/show');
		}
	}


?>