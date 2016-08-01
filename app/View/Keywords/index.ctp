<div class="keywords index">
	<h2>Keywords</h2>
	<table class = "table table-striped">
	<thead>
	<tr>
			<th>Name</th>
			<th>Teams</th>
	</tr>
	</thead>
	<tbody>
<?php foreach ($keywords as $keyword): ?>
	<tr>
		<td><?php echo $this->Html->link(($keyword['Keyword']['name']),array('action'=>'view',$keyword['Keyword']['id'])); ?>&nbsp;</td>
		
		<td>
		<?php foreach ($keyword['User'] as $user): ?>
		<?php echo $this->Html->link(($user['team']).'  |',array('action'=>'view',$user['id'])); ?>
		<?php endforeach; ?>
		</td>
	

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
