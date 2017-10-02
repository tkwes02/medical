<?php
	define("TITLE", "Menu | Franklin's Fine Dining");
	
	include('includes/header.php');
?>
	
	<div id="menu-items">
	
		<h1>What we can do</h1>
		<p>Like our team, our services is very comprehensive &mdash; and, does it ever pack a punch!</p>
		<p><em>Click each selection and learn more about it. Suggested length of therapy time is listed.</em></p>
		
		<hr>
		
		<ul>
			<!--
				syntax: foreach ($array as $key => $value)
				http://www.tuxradar.com/practicalphp/5/3/0
			-->
			<?php foreach ($menuItems as $dish => $item) { ?>
				
				<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a> <?php echo $item["time"]; ?><sup>min long</sup></li>
			
			<?php } ?>
		</ul>
		
	</div><!-- team-members -->
	
	<hr>
			
<?php include('includes/footer.php'); ?>
