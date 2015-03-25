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
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('style.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<!-- Start Header -->
		<div class="header">
			<div class="logo">
				<a href="/"><?php echo $this->Html->image("logo_021.png"); ?></a>			
			</div>
		</div>
		<!-- End Header -->
	</div>
	
	 <div class="container">
		 <div class = "content-wrapper">
		 	
                <?php echo $this->fetch('content'); ?>
			<!-- Start Footer wrapper --> 
        <div class="footer-wrapper row">
            <div class="col-md-3 pull-left">
                <p>Bibo Global Opportunity, Inc.</p>
            </div>
            <div class="col-md-6 pull-right">
                <ul>
                    <li>
                        <a href="/about/">About Us</a>                  </li>
                    <li>
                        <a href="/apply/">Apply</a>                 </li>
                    <li>
                        <a href="/message/">Message</a>                 </li>
                    <li>
                        <a href="/news/">News</a>                   </li>
                    <li>
                        <a href="/contact/">Contact Us</a>                  </li>
                </ul>
            </div>
        </div><!-- End Footer wrapper -->   
	 	</div> <!-- class content-wrapper -->
	</div><!-- class container -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min'); ?> 

</body>
</html>
