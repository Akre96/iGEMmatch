<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo h($user['User']['team']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>




</div>
