<div class="keywords view">
<h2><?php echo $keyword['Keyword']['name']; ?></h2>

<div class="related">
	<?php if (!empty($keyword['User'])): ?>
	<table class = "table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('team'); ?></th>
		<th><?php echo __('Description'); ?></th>
	</tr>
	<?php foreach ($keyword['User'] as $user): ?>
		<tr>
		<td><?php echo $this->Html->link($user['team'], array('action' => 'view', $user['id'])) ?>&nbsp;</td>

		<td><?php echo $user['description']?></td>
		</tr>
	<?php endforeach; ?>
	</table>

<?php endif; ?>

