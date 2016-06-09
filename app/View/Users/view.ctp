<div class="container-fluid uView ">

	<?php 
	if (!$contacted)
	{

	echo $this->Form->create('User'); 
	echo $this->Form->end('Intent to Contact?');

	}

	?>
	<h2>Team: <span style = "color: #FF7465"><?php echo ($user['User']['team']); ?></span></h2>
	<div class="row row-centered">
		<div class="about col-xs-8 col-centered">
			<h3>About:</h3>
			<h4>iGem Track: </h4>
			<p><?php echo $this->Html->link($user['Category']['name'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?> <p>
			<h4>Keywords: </h4>
			<p> <?php foreach($user['Keyword'] as $keyword)
			{
				echo $this->Html->link($keyword['name'], array('controller' => 'keywords', 'action' => 'view', $keyword['id'])).'  '; 
			}
			?>&nbsp; </p>
			<h4> What do you need? What can you offer? </h4>
			<p> <?php echo $user['User']['description']?></p>
			<h4></h4>
		</div>

	</div>
</div>