<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table class = "table table-striped">
	<thead>
	<tr>

			<th><?php echo $this->Paginator->sort('team'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<!-- <th>Keywords</th> -->
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>

		<td><?php echo $this->Html->link($user['User']['team'], array('action' => 'view', $user['User']['id'])) ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
		</td>
		<!-- until larger server don't add keywords
		<td><?php foreach($user['Keyword'] as $keyword)
		{
			echo $this->Html->link($keyword['name'], array('controller' => 'keywords', 'action' => 'view', $keyword['id'])).'  '; 
		}
		?>&nbsp;</td>
		-->
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

