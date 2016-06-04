<div class="keywordsUsers view">
<h2><?php echo __('Keywords User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($keywordsUser['KeywordsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keyword'); ?></dt>
		<dd>
			<?php echo $this->Html->link($keywordsUser['Keyword']['name'], array('controller' => 'keywords', 'action' => 'view', $keywordsUser['Keyword']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($keywordsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $keywordsUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Keywords User'), array('action' => 'edit', $keywordsUser['KeywordsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Keywords User'), array('action' => 'delete', $keywordsUser['KeywordsUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $keywordsUser['KeywordsUser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keywords User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
