<?php if ($page == 'Home') { ?> 


<div class="ui inverted fixed top menu">
	<div class="ui item floated left">
		<a href="javascript:void();" class="menu trigger"><i class="reorder icon"></i> Philly News Feeds</a>
	</div>
	<div class="item floated right">
		<?php include ("partials/structure/headerweather.php"); ?><!-- /weather -->
	</div>
	<div class="item floated right">
		<span class="month">
			<?php echo date('M'); ?>
		</span>
		<span class="day">
			<?php echo date('d'); ?>
		</span>
	</div>
</div>

<?php } ?>