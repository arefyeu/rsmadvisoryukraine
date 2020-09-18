<?php
	require('head.php');
?>
	<title>
		<?php
			$expert = get_expert_by_name($_GET['name']);
			switch ($lang) {
				case 'ua':
					echo "Експерти РСМ Україна - ".$expert['first_name'.'_'.$lang]." ".$expert['last_name'.'_'.$lang];
					break;
				case 'en':
					echo "RSM Ukraine experts - ".$expert['first_name'.'_'.$lang]." ".$expert['last_name'.'_'.$lang];
					break;
			}
		?>
	</title>
	<?php 
		require('header_new.php');
		$publications = get_publications_by_expert_id($expert['expert_id']);
	?> 	
	<div class = "content__container">
		<div class="container">
			<div class="expert__expert-content">
				<div class="main_block_container">
					<div class="expert_info_container">
						<div class="expert_photo_container">
							<img src="/<?php echo $expert['image_reference']; ?>">
						</div>
						<div class="expert_text_container">
							<div class="expert__expert_name">
								<?php echo $expert['first_name'.'_'.$lang]." ".$expert['last_name'.'_'.$lang]; ?>
							</div>
							<div class = "expert_position">
								<?php echo $expert['position'.'_'.$lang]; ?>
							</div>
							<div class="expert_info">
								<?php echo $expert['description'.'_'.$lang] ?>
							</div>
							<!--<div class="expert_contacts_container">
								<div class="expert_info_underline"></div>
								<div class = "expert_email_container">
									<span class = "contact_title">
										<?php switch ($lang) {
											case 'ua':
												echo "ПОШТА";
												break;
											case 'en':
												echo "EMAIL";
												break;
											}
										?>
									</span> <br>
									<span class = "contact_text"><a href= "mailto:<?php echo $expert['email']?>"><?php echo $expert['email'] ?></a></span>
								</div>
								<div class = "expert_phone_container">
									<span class = "contact_title">
										<?php switch ($lang) {
											case 'ua':
												echo "ТЕЛЕФОН";
												break;
											case 'en':
												echo "PHONE";
												break;
											}
										?>
									</span><br>
									<span class = "contact_text"><a href= "tel:<?php echo $expert['phone']?>"><?php echo $expert['phone']?></a></span>
								</div>
							</div>--->
						</div>
					</div>
					<div class="services_block">
						<div class="services_title">
							<?php switch ($lang) {
								case 'ua':
									echo "Послуги РСМ Україна";
									break;
								case 'en':
									echo "RSM Ukraine services";
									break;
								}
							?>
						</div>

						<div class="services_text">
							<?php switch ($lang) {
								case 'ua':
									echo "Ми пропонуємо повний спектр аудиторських, консалтингових та податкових послуг";
									break;
								case 'en':
									echo "We offer a comprehensice pool of audit, consulting and tax services.";
									break;
								}
							?>	
						</div>
						<div class="services_button_container">
							<a href = "/services/<?php add_only_lang_reference($lang);?>"><div class="services_button">
								<?php switch ($lang) {
									case 'ua':
										echo "НАШІ ПОСЛУГИ";
										break;
									case 'en':
										echo "OUR SERVICES";
										break;
									}
								?>		
							</div></a>
						</div>
					</div>
				</div>

				<?php foreach ($publications as $publication): ?>
					<div class = "expert_article">
						<div class="expert_article_margin_left"></div>
						<div class="expert_article_content">
							<div class="expert_article_name">
								<?php echo $expert['first_name'.'_'.$lang]." ".$expert['last_name'.'_'.$lang]?>
							</div>
							<div class="expert_article_date">
								<?php echo $publication['date']?>
							</div>
							<div class="expert_article_title">
								<a href ="/publication-page/<?php echo str_replace(' ', '-', $publication['title_en']); add_lang_reference($lang)?>">
									<?php echo $publication['title'.'_'.$lang]?>
								</a>
							</div>
							<div class="expert_article_text">
								<?php echo $publication['short_text'.'_'.$lang]?>
							</div>
							<a href ="/publication-page/<?php echo str_replace(' ', '-', $publication['title_en']); add_lang_reference($lang)?>">
								<div class="expert-article__read_more">
									<?php switch ($lang) {
										case 'ua':
											echo "Читати далі >";
											break;
										case 'en':
											echo "Read more >";
											break;
										}
									?>	
									
								</div>
							</a>
							<div class="expert_info_underline"></div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php require('footer_new.php')?>