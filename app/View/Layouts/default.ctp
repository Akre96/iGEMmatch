<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'iGemMatch.org'; echo " ";?>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

//		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('style.css');
		echo $this->Html->script('jquery-2.2.4.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('style.js');		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container-fluid">
	<h1 id = "title"><?php echo $this->Html->link('iGemMatch.org','http://igemmatch.org'); ?><small> Find the iGem collaboration of your dreams</small></h1>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><?php echo $this->Html->link('Users','http://igemmatch.org/users/'); ?></li>
			        <li><?php echo $this->Html->link('Categories','http://igemmatch.org/categories/');?></li>

			      </ul>
			      <ul class="nav navbar-nav navbar-right">
							<?php
							if($this->Session->check('Auth.User'))
							{			
								echo '<li>';echo $this->Html->link($this->Session->read('Auth.User.team'), 'http://igemmatch.org/users/view/'.$this->Session->read('Auth.User.id'));echo '</li>';	
								echo '<li>';echo $this->Html->link('logout', 'http://igemmatch.org/users/logout');echo '</li>';
								echo '<li>'.$this->Html->link('change category', 'http://igemmatch.org/users/edit/'.$this->Session->read('Auth.User.id')).'</li>';
							}
							else
							{
							echo '<li>';echo $this->Html->link('login', 'http://igemmatch.org/users/login');echo '</li>';
							echo '<li>';echo $this->Html->link('sign up', 'http://igemmatch.org/users/add');echo '</li>';
							}
							?>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>		
		<div class = "container-fluid" id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>

</body>
</html>
