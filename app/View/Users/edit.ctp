<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->hidden('username');
		echo $this->Form->input('team',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Team Name',
 			'class' => 'form-control'
        	));
//		echo $this->Form->hidden('password');
		echo $this->Form->input('email',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Email',
 			'class' => 'form-control'
        	));
		echo $this->Form->input('phone',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Phone Number',
 			'class' => 'form-control'
        	));
		echo $this->Form->input('category_id',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'iGem Track',
 			'class' => 'form-control'
        	));
		echo $this->Form->input('description',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'What can your team offer and what is it looking for?',
 			'class' => 'form-control'
        	));
		echo $this->Html->link('Create New Keyword','http://igemmatch.org/keywords/add',array('class' => 'btn btn-info'));	
		echo $this->Form->input('Keyword',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Pick 3 keywords specific to your project',
 			'class' => 'form-control'
        	));

	
	?>
	</fieldset>
</br>
<?php echo $this->Form->end(array('label'=>'Update Profile','class'=>'btn btn-primary')); ?>
</div>

