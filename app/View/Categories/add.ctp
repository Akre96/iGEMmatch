<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('name',array(
		        	'div' => array('class' => 'form-group'),
		 			'label' => 'Category Name',
		 			'class' => 'form-control'
		        	));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Submit','class'=>'btn btn-default')); ?>
</div>

