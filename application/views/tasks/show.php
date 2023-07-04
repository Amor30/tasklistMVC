<div class="tasklist-wrap">
	<hr>
		<div class="tasklist__first-block">
			<form method="post" class="add-task__block" action='add'>
				<input type="text" placeholder="Enter text..." class="form-control" id="exampleInputEmail1" name="description" required>
				<button class="btn btn-primary" name="addTask-form">Add task</button>
			</form>
			<div class="all-task__block">
				<form method="post" action="removeAll">
					<button class="btn btn-primary" name="removeAll-form">Remove all</button>
				</form>
				<form method="post" action="readyAll">
					<button class="btn btn-primary" name="readyAll-form">Ready all</button>
				</form>
			</div>
		</div>
		<hr>
		<?php foreach($vars as $key => $value):?>
		<div class="second-block__line">
			<div class="tasklist__second-block">
				<div class="task-description__block">
					<p class="text-std"><?php echo ''.htmlspecialchars($value['description'], ENT_QUOTES, 'UTF-8').'';?></p>
					<div class="task-action__block">
						<form method="post" action='ready'>
							<button class="btn btn-primary" name="statusTask-form" value='<?php echo ''.$value['id'].''?>'>
								<?php echo ''.($value['status'] == '1' ? 'Unready' : 'Ready').''?>
							</button>
						</form>
						<form method="post" action='delete'>
							<button class="btn btn-primary" name="deleteTask-form"  value='<?php echo''.$value['id'].''?>'>Delete</button>
						</form>
					</div>
				</div>
				<div class="task-status__block">
					<span class="circle <?php	echo''.($value['status'] == '1' ? 'true' : 'false').''?>"></span>
				</div>
			</div>
			<hr>
		</div>
		<?php endforeach;?>
	</div>