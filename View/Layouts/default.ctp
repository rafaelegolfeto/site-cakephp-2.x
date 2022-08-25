<?php

/**
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<?php echo $this->element('head') ?>

<body>
	<!--  wrapper -->
	<div id="wrapper">
		<?php echo $this->element('navbar-top') ?>
		<?php echo $this->element('navbar-side')	?>


		<!--  page-wrapper -->
		<div id="page-wrapper">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>

		</div>
		<!-- end page-wrapper -->

	</div>
	<!-- end wrapper -->



	<?php echo $this->element('sql_dump'); ?>
</body>

</html>