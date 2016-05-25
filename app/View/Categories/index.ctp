<div class="categories index">
	<h2><?php echo __('Categories'); ?></h2>
	<?php
	foreach($categories as $cat)
	{
		echo "<br/><h3>".$cat['Category']['name']."</h3><br/>";
		foreach($cat['User'] as $user)
		{
			echo "<h4> "$user['teamname']."</h4><br/>";
		}
	}


	?>
</div>

