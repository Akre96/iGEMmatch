<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table class = "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('team'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>

		<td><?php echo $this->Html->link(h($user['User']['team']), array('action' => 'view', $user['User']['id'])); ?></td>
		<td>
			<?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
		</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>

