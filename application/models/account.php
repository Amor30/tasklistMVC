<?php

	namespace application\models;

	use application\core\Model;

	class Account extends Model
	{
		public function login($vars = [])
		{
			$hash = password_hash($vars['password'],PASSWORD_BCRYPT);
			$password = $vars['password'];
			$login = 
			[
				'login' => $vars['login'],
			];
			$query = $this->db->row('SELECT id,password FROM users WHERE login=:login',$login);
			if(!empty($query)) // Проверка на уникальность логина
			{
				if(password_verify($vars['password'],$query[0]['password'])) // Проверка пароля
				{
					$_SESSION['user_id'] = $query[0]['id'];
					header('Location: ../tasks/show');
				}
				else
				{
					echo '<p>Неверный пароль</p>';
				}
			}
			else // Создание нового пользователя
			{
				$hash = password_hash($vars['password'],PASSWORD_BCRYPT);
				$password = $vars['password'];
				$vars['password'] = $hash;
				$query = $this->db->query('INSERT INTO users(login,password) VALUES (:login,:password)',$vars);
				$query = $this->db->row("SELECT id FROM users WHERE login=:login AND password=:password",$vars);
				if (!empty($query))
				{
					$_SESSION['user_id'] = $query[0]['id'];
					header('Location: ../tasks/show');
				}
				else
				{
					echo '<p>Неверные данные</p>';
				}
			}
		}
	}


?>