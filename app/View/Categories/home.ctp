<div class="row row-centered" style = "display:table">

	<div class="col-xs-2 col-centered" style = "display:table-cell;height:200px" id="step">
		<h2>Sign Up</h2>
	</div>
	<div class="col-xs-1 col-centered" ></div>
	<div class="col-xs-2 col-centered" style = "display:table-cell; height:200px" id="step">
		<h2>Login</h2>
	</div>
	<div class="col-xs-1 col-centered"></div>
	<div class="col-xs-2 col-centered" style = "display:table-cell; height:200px" id="step">
		<h2>Find teams</h2>
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