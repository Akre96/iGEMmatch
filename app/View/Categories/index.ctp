<div class="categories index">
	<h2><?php echo __('Categories'); ?></h2>
	<?php
	foreach($categories as $cat)
	{
		echo "<br/><h3>".$cat['Category']['name']."</h3><br/>";

		if(!empty($cat['User']))
		{
			foreach($cat['User'] as $users)
			{
				echo "<h4> ".$this->Html->link($users['team'],'http://www.igemmatch.org/view/'.$users['id'])."</h4><br/>";
			}
		}
	}


	?>
</div>

