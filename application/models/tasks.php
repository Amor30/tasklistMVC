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
	}

?>
