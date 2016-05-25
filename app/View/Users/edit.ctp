<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->hidden('username');
		echo $this->Form->hidden('team');
		echo $this->Form->hidden('password');
		echo $this->Form->hidden('email');
		echo $this->Form->hidden('phone');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

