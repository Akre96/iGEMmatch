<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Sign Up'); ?></legend>
	<?php
		echo $this->Form->input('username',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Username',
 			'class' => 'form-control'
        	));

		echo $this->Form->input('team',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Team',
 			'class' => 'form-control'
        	));
		echo $this->Form->input('password',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Password',
 			'class' => 'form-control'
        	));
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

	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Sign Up','class'=>'btn btn-success')); ?>

