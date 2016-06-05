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
		echo $this->Form->hidden('password');
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
		echo $this->Form->input('Keyword',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Pick 3 keywords specific to your project',
 			'class' => 'form-control'
        	));

		echo $this->Html->link('Add Keyword','http://igemmatch.org/keywords/add')		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
	</ul>
</div>
