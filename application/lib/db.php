<?php

	namespace application\lib;

	use PDO;

	class DB
	{
		protected $db;

		public function __construct()
		{
			$config = require 'application/config/db.php';
			$this->db = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'],$config['user'],$config['password']);
		}

		public function query($sql,$params = [])
		{ 
			$stmt = $this->db->prepare($sql);
			if (isset($params))
			{
				foreach($params as $key => $value)
				{
					$stmt->bindValue("$key", $value, PDO::PARAM_STR);
				}
			}
			$stmt->execute();
			return $stmt;
		}

		public function row($sql, $params = [])
		{
			$result = $this->query($sql,$params);
			return $result->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function column($sql, $params = [])
		{
			$result = $this->query($sql,$params);
			return $result->fetchColumn();
		}
	}
?>