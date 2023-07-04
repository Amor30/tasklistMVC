<?php

	namespace application\models;

	use application\core\Model;

	class Tasks extends Model
	{
		public function getTasks($vars = [])
		{
			$result = $this->db->row('SELECT id,description,status FROM tasks WHERE user_id =:user_id',$vars);
			return $result;
		}

		public function removeAll($vars = [])
		{
			$this->db->query('DELETE FROM tasks WHERE user_id = :user_id',$vars);
		}

		public function readyAll($vars = [])
		{
			$this->db->query('UPDATE tasks SET status = true WHERE user_id = :user_id',$vars);
		}

		public function delete($vars = [])
		{
			$this->db->query('DELETE FROM tasks WHERE id = :id',$vars);
		}
		
		public function ready($vars = [])
		{
			$this->db->query('UPDATE tasks SET status = !status WHERE id = :id',$vars);
		}

		public function add($vars = [])
		{
			$this->db->query('INSERT INTO tasks(user_id,description) VALUES (:user_id,:description)',$vars);
		}
	}

?>
