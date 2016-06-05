<div class = 'row'>
	<div class = "col-xs-12" id= "welcome" style = "border: 1px solid #53D16F">
		<h2>Welcome to iGem Match:</h2>
		<p>This site is intended to allow iGem teams to see what type of project a certain team is conducting and gain their contact information. Find other teams any of the following categories, or create your own and another team may contact you.</p>
		<hr/>
		<h2> How To Use this site</h2>
		<ol>
			<li>Sign up</li>
			<li>Pick a category, either create your own or pick an existing one.</li>
			<li>Find users in the same or related categores, click their name to get their contact information</li>
		</ol>
	</div>
</div>

<div class = "row row-centered" id = "categoryHome">
<?php foreach($categories as $cat): ?>
<div class = "col-xs-3 col-centered catCont">
	<h2><?php echo $cat['Category']['name']?></h2>
</div>


<?php endforeach; ?>
</div>