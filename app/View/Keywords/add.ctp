<div class="keywords form">
<?php echo $this->Form->create('Keyword'); ?>
	<fieldset>
		<legend><?php echo __('Add Keyword'); ?></legend>
	<?php
		echo $this->Form->input('name',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Name',
 			'class' => 'form-control'
        	));
		echo $this->Form->hidden('User.id');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Create','class'=>'btn btn-info')); ?>
</div>

