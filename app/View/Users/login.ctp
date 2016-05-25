<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Username'
        	));
        echo $this->Form->input('password',array(
        	'div' => array('class' => 'form-group'),
 			'label' => 'Password'
        	)););
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'),array('class'=>'btn btn-default')); ?>
</div>