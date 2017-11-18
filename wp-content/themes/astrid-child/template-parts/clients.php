<?php
	$list = CFS()->get('client_list');
	$i = 0;
	?>
	<div class="portfolio-box">
		<div class="row clients">
		<?php foreach($list as $client){
			$i++; ?>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 client">
				<a href=""><img src="<?php echo $client['icon_client'];?>"></a>
			</div>

			<?php if($i % 4 == 0) { ?>
				</div><div class="row clients">
			<?php }
		} ?>
		</div>
	</div>