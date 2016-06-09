<div class="container-fluid uView ">

<?php 
if (!$contacted)
{

echo $this->Form->create('User'); 
echo $this->Form->end('Intent to Contact?');

}

?>
<h2><?php echo 'Team: '.($user['User']['team']); ?></h2>
	<dl>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo h($user['User']['team']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($user['User']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Keywords'); ?></h3>
	<?php if (!empty($user['Keyword'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Keyword'] as $keyword): ?>
		<tr>
			<td><?php echo $keyword['id']; ?></td>
			<td><?php echo $keyword['name']; ?></td>

		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
