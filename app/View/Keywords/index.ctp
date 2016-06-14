<div class="keywords index">
	<h2>Keywords</h2>
	<table class = "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($keywords as $keyword): ?>
	<tr>
		<td><?php echo $this->Html->link(($keyword['Keyword']['name']),array('action'=>'view',$keyword['Keyword']['id'])); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
