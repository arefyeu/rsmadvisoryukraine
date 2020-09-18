<?php
	require('head.php');
?>
	<title>
		<?php
			switch ($lang) {
				case 'ua':
					echo "РСМ Україна - Експерти";
					break;
				case 'en':
					echo "RSM Ukraine - Experts";
					break;
			}
		?>
	</title>
	<?php 
		require('header_new.php');
		$expert_count = 0;
		$experts = get_experts_all();
	?>
	<div class="secondary-page-picture">
		<img src="/images/bg.jpg" class="background">
		<div class="container picture">
			<div class="secondary-page-picture__title">
				<h1>
					<?php switch ($lang) {
						case 'ua':
							echo "Наші експерти";
							break;
						case 'en':
							echo "Our experts";
							break;
					}?>
				</h1>
			</div>
			<div class="secondary-page-picture__blue"><img src="/images/experts_picture.png"></div>
			<div class="secondary-page-picture__green"></div>
			<div class="secondary-page-picture__grey"></div>
		</div>
	</div>
	<div class = "content__container">
		<div class="container">
				<div class = "experts_blocks_container">
					<?php 
						foreach ($experts as $expert):
						$expert_count++;?>
						<div class="experts__expert_block">
							<a href = "/expert-page/<?php echo $expert['first_name_en']."-".$expert['last_name_en']; add_lang_reference($lang);?>">
								<img src="/<?php echo $expert['image_reference']?>" class="experts__expert_photo">
							</a>
							<a href = "/expert-page/<?php echo $expert['first_name_en']."-".$expert['last_name_en']; add_lang_reference($lang);?>">
								<div class="experts__expert_name"><?php echo $expert['first_name'.'_'.$lang].' '.$expert['last_name'.'_'.$lang];?></div>
							</a>
							<div class="experts__expert_position">
								<p><?php echo $expert['position'.'_'.$lang]?></p>
								<p><?php echo $expert['qualifications'.'_'.$lang]?></p>	
							</div>
							<style>
								
							</style>
							<a href = "/expert-page/<?php echo $expert['first_name_en']."-".$expert['last_name_en']; add_lang_reference($lang);?>">
								<div class = "introduction_button">
									<?php switch ($lang) {
										case 'ua':
											echo "Про експерта";
											break;
										case 'en':
											echo "Introduction";
											break;
										}
									?>
									<span>
										<div class="introduction_arrow" ></div>
									</span>
								</div>
							</a>
							
						</div>
						<?php if($expert_count == 4) : ?>
							<div class="rsm_about_block">
								<div class = "blue_stripe"></div>
								<img src="/images/rsm in ukraine.png" class="about_block_image">
								<div class="about_block_title">
									<?php switch ($lang) {
										case 'ua':
											echo "РСМ Україна";
											break;
										case 'en':
											echo "RSM Ukraine";
											break;
										}
									?>
								</div>
								<div class="about_block_text">
									<?php switch ($lang) {
										case 'ua':
											echo "<b>Аудит, консалтинг та послуги з оподаткування</b> &ndash; це основні сфери діяльності групи компаній РСМ в Україні.";
											break;
										case 'en':
											echo "<b>Accounting, advisory services and tax consulting</b> &ndash; these are the pillars of RSM Ukraine.";
											break;
										}
									?>			
								</div>
								<br>
								<div class="about_rsm_button"><a href = "/about<?php add_only_lang_reference($lang);?>"><p>
									<?php switch ($lang) {
										case 'ua':
											echo "ПРО НАШУ КОМПАНІЮ";
											break;
										case 'en':
											echo "ABOUT OUR COMPANY";
											break;
										}
									?>
								</p></a></div>
							</div>
						<?php endif;
					endforeach;?>
				</div>
		</div>
	</div>
	<?php require('footer_new.php');?>