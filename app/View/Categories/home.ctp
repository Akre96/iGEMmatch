<div class = 'row'>
	<div class = "col-xs-12" id= "welcome">
		<h2>Welcome to iGem Match:</h2>
		<p>This site is intended to allow iGem teams to see what type of project a certain team is conducting and gain their contact information. Find other teams any any of the following categories, or create your own and another team may contact you.</p>
	</div>
</div>

<div class = "row" id = "categoryHome">
<?php foreach($categories as $cat): ?>
<div class = "col-xs-3" id = "catCont">
	<h2><?php echo $cat['Category']['name']?></h2>
</div>


<?php endforeach; ?>
</div>