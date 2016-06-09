<div class="container-fluid uView ">

	<?php 
	if (!$contacted)
	{

	echo $this->Form->create('User'); 
	echo $this->Form->end('Intent to Contact?');

	}

	?>
	<h2><?php echo 'Team: '.($user['User']['team']); ?></h2>
	<div class="about row row-centered">
		<div class="col-xs-8 col-centered">
			<h3>About:</h3>
			<h4>Category: <?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?> </h4> </br>
			<h4>Keywords: <?php foreach($user['Keyword'] as $keyword)
			{
				echo $this->Html->link($keyword['name'], array('controller' => 'keywords', 'action' => 'view', $keyword['id'])).'  '; 
			}
			?>&nbsp; </h4>
			<h4> What do you need? What can you offer? </h4>
			<p> <?php echo $user['User']['description']?></p>
		</div>

	</div>
</div>