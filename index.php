<?php
	require('head.php');
?>
	<title>
		<?php
			switch ($lang) {
				case 'ua':
					echo "РСМ Україна - Аудит | Оподаткування | Консалтинг";
					break;
				case 'en':
					echo "RSM Ukraine - Audit | Tax | Consulting";
					break;
			}
		?>
	</title>
	<?php
		require('header_new.php');
	?>
	<div class="main-picture">
		<img src="/images/main-picture small.jpg" class="main-picture__small">
		<img src="/images/index_image.jpg" class="main-picture__large">
		<h1 class="main-picture__paige-title">
			<?php switch ($lang) {
				case 'ua':
					echo "RSM &ndash; ГЛОБАЛЬНЕ ПРИЗНАЧЕННЯ ДЛЯ ВАШОГО АУДИТУ, ОПОДАТКУВАННЯ ТА КОНСАЛТИНГУ";
					break;
				case 'en':
					echo "RSM &ndash; THE GLOBAL DESTINATION FOR YOUR AUDIT, TAX AND CONSULTING NEEDS";
					break;
			}?>
		</h1>
	</div>
	<div class="content__container">
		<div class="container">
			<div class="content">
				<div class="content-block">
					<div class="content-block__top about"></div>
					<div class="content-block__title">
						<?php switch ($lang) {
						case 'ua':
							echo "Про нас";
							break;
						case 'en':
							echo "About us";
							break;
						}?>
					</div>
					<div class="content-block__image about">
						<img src = "/images/services_image.png">
					</div>
					<div class="content-block__content">
						<div class="content-block__text">
							<?php switch ($lang) {
								case 'ua':
									echo "43,000  експертів, 120+ країн, 6-та найбільша мережа аудиторських та консалтингових фірм у світі";
									break;
								case 'en':
									echo "43,000 professionals, 120+ countries, 6th world's largest audit and consulting firms network";
									break;
								} 
							?>
						</div>
						<div class="content-block__button">
							<div class="content-block__button-item about">
								<a href = "about<?php add_only_lang_reference($lang);?>">
									<?php switch ($lang) {
									case 'ua':
										echo "БІЛЬШЕ ПРО НАС";
										break;
									case 'en':
										echo "MORE ABOUT US";
										break;
									} ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="content-block">
					<div class="content-block__top services"></div>
					<div class="content-block__title">
						<?php switch ($lang) {
						case 'ua':
							echo "Наші послуги";
							break;
						case 'en':
							echo "Our services";
							break;
						}  ?>
					</div>
					<div class="content-block__image services">
						<img src = "images/sth.png">
					</div>
					<div class="content-block__content">
						<div class="content-block__text">
							<?php switch ($lang) {
								case 'ua':
									echo "Ми допомагаємо нашим клієнтам впевнено рухатись вперед";
									break;
								case 'en':
									echo "We help our clients move forward with confidence";
									break;
								} 
							?>
						</div>
						<div class="content-block__button">
							<div class="content-block__button-item services">
								<a href = "/services<?php add_only_lang_reference($lang);?>">
									<?php switch ($lang) {
									case 'ua':
										echo "НАШІ ПОСЛУГИ";
										break;
									case 'en':
										echo "OUR SERVICES";
										break;
									}  ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="content-block">
					<div class="content-block__top experts"></div>
					<div class="content-block__title">
						<?php switch ($lang) {
							case 'ua':
								echo "Наші експерти";
								break;
							case 'en':
								echo "Our experts";
								break;
						} ?>
					</div>
					<div class="content-block__image experts">
						<img src = "/images/services_image.png">
					</div>
					<div class="content-block__content">
						<div class="content-block__text">
							<?php switch ($lang) {
								case 'ua':
									echo "З правильною командою все стає можливим";
									break;
								case 'en':
									echo "With the right team, anything is possible";
									break;
								} 
							?>
						</div>
						<div class="content-block__button">
							<div class="content-block__button-item experts">
								<a href = "/experts<?php add_only_lang_reference($lang);?>">
									<?php switch ($lang) {
									case 'ua':
										echo "НАШІ ЕКСПЕРТИ";
										break;
									case 'en':
										echo "OUR EXPERTS";
										break;
									} ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php
					$last_publication = get_publications_all() -> fetch();
					$last_publication_expert = get_expert_by_id($last_publication['expert_id']);
				?>
				<div class="content-block big">
					<img src="/images/bg.jpg" class="background">
					<div class="background___blue-border">
						<img src="/images/sth.png">
					</div>
					<div class="background___green-border">
					</div>
					<div class="background___grey-border">
					</div>
					<div class="content-block-big__title">
						<div class="content-block__photo">
							<?php if ($last_publication_expert['first_name_en'].' '.$last_publication_expert['last_name_en'] != "RSM Global") { ?>
								<a href = "expert-page/<?php echo $last_publication_expert['first_name_en']."-".$last_publication_expert['last_name_en']; add_lang_reference($lang)?>">
							<?php } ?>
									<img src = "<?php echo $last_publication_expert['image_reference']?>" class = "big_article_expert_photo">
							<?php if ($last_publication_expert['first_name_en'].' '.$last_publication_expert['last_name_en'] != "RSM Global") { ?>
								</a>
							<?php } ?>		
						</div>
						<div class="content-block__article-data">
							<div class="content-block__author">
								<?php if ($last_publication_expert['first_name_en'].' '.$last_publication_expert['last_name_en'] != "RSM Global") { ?>
									<a href = "expert-page/<?php echo $last_publication_expert['first_name_en']."-".$last_publication_expert['last_name_en']; add_lang_reference($lang)?>">
								<?php } ?>
									<?php echo $last_publication_expert['first_name'.'_'.$lang]." ".$last_publication_expert['last_name'.'_'.$lang];?>
								<?php if ($last_publication_expert['first_name_en'].' '.$last_publication_expert['last_name_en'] != "RSM Global") { ?>
									</a>
								<?php } ?>
							</div>
							<div class="content-block__date">
								<?php echo $last_publication['date'];?>
							</div>
						</div>
					</div>
					<div class="content-block__article">
						<div class="content-block__article-title">
							<a href ="publication-page/<?php echo str_replace(' ', '-', $last_publication['title_en']); add_lang_reference($lang)?>">
								<?php echo $last_publication['title'.'_'.$lang] ?>
							</a>
						</div>
						<div class="content-block__article-text">
							<?php echo $last_publication['short_text'.'_'.$lang]?>
						</div>
						<div class="content-block__read-article">
							<div class="index-article__read-more-button">
								<a href ="/publication-page/<?php echo str_replace(' ', '-', $last_publication['title_en']); add_lang_reference($lang)?>">
									<?php switch ($lang) {
										case 'ua':
											echo "Читати далі";
											break;
										case 'en':
											echo "Read more";
											break;
									}?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="subscribe-block">
					<div class="content-block__top experts"></div>
					<div class="content-block__title fb-form-title">
						<?php switch ($lang) {
							case 'ua':
								echo "Підписуйтеся, щоб отримувати останні новини!";
								break;
							case 'en':
								echo "Subscribe to stay up to date!";
								break;
						}?>
						<img src = "/images/mail_icon.png" class="mail_icon">
					</div>
					<form method="POST" action = "email_processing.php" autocomplete="off">
						<div class="email-enter">
							<?php switch ($lang) {
								case 'ua':
									echo "Ваша електронна адреса:";
									break;
								case 'en':
									echo "Your email:";
									break;
							}?>	
							<input type ="text" name = "email" placeholder="<?php switch ($lang) {
								case 'ua':
									echo 'Введіть Вашу вдресу';
									break;
								case 'en':
									echo 'Please, enter your email';
									break;
							}?>">
						</div>
					</form>
					<div class="subscribe-button">
						<div class="subscribe-button__item">
							<?php switch ($lang) {
								case 'ua':
									echo "Підписатися";
									break;
								case 'en':
									echo "Subscribe";
									break;
							}?>
						</div>
					</div>
					<div class="follow-fb">
						<div class="follow-fb__content">
							<div class="follow-fb__icon">
								<a href = "https://www.facebook.com/rsm.ukraine/"><img src = "images/fb_icon.png"></a>
							</div>
								Follow us on
								<a href="https://www.facebook.com/rsm.ukraine/">Facebook</a>
						</div>
					</div>
				</div>
				<?php $services = get_services_all(); 
				foreach ($services as $service) {?>
					<div class="service-block">
						<div class="content-block__top experts"></div>
						<div class="content-block__title">
							<?php echo $service['name'.'_'.$lang];?>
						</div>
						<div class="service-image">
							<img src='<?php echo $service['image_reference']?>'>
						</div>
						<div class="service-block__content">
							<a href = "service-page/<?php echo str_replace(' ', '-', $service['name_en']); add_lang_reference($lang)?>">
								<div class="service__read-more-button">
									<?php switch ($lang) {
										case 'ua':
											echo "Більше інформації";
											break;
										case 'en':
											echo "Read more";
											break;
									}?>
								</div>
							</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php
		require('footer_new.php');
	?>