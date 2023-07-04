<?php 

	return [
		'tasks/add' => 
		[
			'controller' => 'tasks',
			'action' => 'add',
		],
		'tasks/delete' => 
		[
			'controller' => 'tasks',
			'action' => 'delete',
		],
		'tasks/ready' => 
		[
			'controller' => 'tasks',
			'action' => 'ready',
		],
		'account/logout' =>
		[
			'controller' => 'account',
			'action' => 'logout',
		],
		'account/login' => 
		[
			'controller' => 'account',
			'action' => 'login',
		],
		'tasks/show' => 
		[
			'controller' => 'tasks',
			'action' => 'show',
		],
		'tasks/removeAll' => 
		[
			'controller' => 'tasks',
			'action' => 'removeAll',
		],
		'tasks/readyAll' => 
		[
			'controller' => 'tasks',
			'action' => 'readyAll',
		],
		'' =>
		[
			'controller' => 'main',
			'action' => 'index',
		],
		];


?>