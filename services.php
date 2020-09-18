<?php
	require('head.php');
?>
	<title>
		<?php
			switch ($lang) {
				case 'ua':
					echo "РСМ Україна - Послуги";
					break;
				case 'en':
					echo "RSM Ukraine - Services";
					break;
			}
		?>
	</title>
	<?php 
		require('header_new.php');
	?>
	<div class="secondary-page-picture">
		<img src="/images/bg.jpg" class="background">
		<div class="container picture">
			<div class="secondary-page-picture__title">
				<h1 class="picture__page-title">
					<?php switch ($lang) {
						case 'ua':
							echo "Наші послуги";
							break;
						case 'en':
							echo "Our services";
							break;
					}?>
				</h1>
			</div>
			<div class="secondary-page-picture__blue"><img src="/images/services_image.png"></div>
			<div class="secondary-page-picture__green"></div>
			<div class="secondary-page-picture__grey"></div>
		</div>
	</div>
	<?php
		$services = get_services_all();
	?>
	<div class = "content__container">
		<div class="container">
			<div class="content services">
				<?php foreach ($services as $service):?>
					<div class="service">
						<div class="growing_block">
							<div class="blue_stripe"></div>
							<div class="services__service_title">
								<?php echo $service['name'.'_'.$lang];?>
							</div>
							<div class="service_image">
								<img src ="/<?php echo $service['image_reference'];?>">
							</div>
							<div class="details">
								<a href = "/service-page/<?php echo str_replace(' ','-',$service['name_en']); add_lang_reference($lang);?>"><span>
									<?php switch ($lang) {
										case 'ua':
											echo "Деталі";
											break;
										case 'en':
											echo "Details";
											break;
										}
									?>
									
									<div class="right_icon"></div>
								</span></a>
							</div>
							<div class="subservices_container">
								<?php $subservices = get_subservices_by_service_id($service['service_id']);
								foreach ($subservices as $subservice): ?>
									<a href = "/subservice-page/<?php echo str_replace(' ','-',$service['name_en']);?>/<?php echo str_replace(' ','-',$subservice['name_en']); add_lang_reference($lang);?>">
										<p><?php echo $subservice['name'.'_'.$lang]?></p>
									</a>
								<?php endforeach;?>	
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php require('footer_new.php');?>