<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table class = "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('team'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo 'keywords' ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>

		<td><?php echo $this->Html->link($user['User']['team'], array('action' => 'view', $user['User']['id'])) ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
		</td>
		<td><?php foreach($user['Keyword'] as $keyword)
		{
			echo $this->Html->link($keyword['name'], array('controller' => 'keywords', 'action' => 'view', $keyword['id'])); 
		}



		?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>


