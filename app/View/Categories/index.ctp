<div class="categories index container-fluid">
	<h2><?php echo __('Categories'); ?></h2>

	<?php
	$i = 0;
	foreach($categories as $cat)
	{
	if($i%4 == 0)
	{
		echo "<div class = 'row row-centered'>";
	}
	echo "<div class='catHold col-xs-3 col-centered'>";
		echo "<h3>".$cat['Category']['name']."</h3>";

		if(!empty($cat['User']))
		{
			foreach($cat['User'] as $users)
			{
				echo "<h4> ".$this->Html->link($users['team'],'http://www.igemmatch.org/users/view/'.$users['id'])."</h4>";
			}
		}
	echo "</div>";
	if($i%4 == 0){echo "</div>";}
	$i++;
	}



	?>

</div>

