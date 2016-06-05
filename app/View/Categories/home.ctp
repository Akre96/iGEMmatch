<div class="row row-centered">

	<div class="col-xs-2 col-centered step" id = "step1">
		<h2><a href = "http://igemmatch.org/users/add">Sign Up</a></h2>
		<p>Quick and easy process</p>
	</div>
	<div class="col-xs-1 col-centered" ></div>
	<div class="col-xs-2 col-centered step" id = "step2">
		<h2><a href = "http://igemmatch.org/users/login">Login</a></h2>
		<p>You must log in to see the other teams information</p>
	</div>
	<div class="col-xs-1 col-centered"></div>
	<div class="col-xs-2 col-centered step" id = "step3">
		<h2><a href = "http://igemmatch.org/categories" >Find teams </a> </h2>
		<p>Find other users in the same track and similar projects</p>
	</div>

</div>

<br/><br/>

<div class = "row row-centered" id = "categoryHome">
<?php foreach($categories as $cat): ?>
<div class = "col-xs-3 col-centered catCont">
	<h2><?php echo $cat['Category']['name']?></h2>
</div>


<?php endforeach; ?>
</div>