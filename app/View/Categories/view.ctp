<div class="categories view">
<h2><?php echo $category['Category']['name']; ?></h2>

<div class="related">
	<?php if (!empty($category['User'])): ?>
	<table class = "table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('team'); ?></th>
		<th><?php echo __('Description'); ?></th>
	</tr>
	<?php foreach ($category['User'] as $user): ?>
		<tr>
		<td><?php echo $this->Html->link($user['team'], array('controller'=>'users','action' => 'view', $user['id'])) ?>&nbsp;</td>

		<td><?php echo $user['description']?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
