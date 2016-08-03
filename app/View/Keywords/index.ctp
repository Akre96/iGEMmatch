<div class="keywords index">
	<h2>Keywords</h2>
	<table class = "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th>Teams</th>
	</tr>
	</thead>
	<tbody>
<?php foreach ($keywords as $keyword): ?>
	<tr>
		<td><?php echo $this->Html->link(($keyword['Keyword']['name']),array('action'=>'view',$keyword['Keyword']['id'])); ?>&nbsp;</td>
		
		<td>
		<?php foreach ($keyword['User'] as $user): ?>
		<?php echo $this->Html->link(($user['team']).'  |',array('action'=>'view',$user['id'])); ?>
		<?php endforeach; ?>
		</td>
	

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
<div class="pagination pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
</div>
</div>