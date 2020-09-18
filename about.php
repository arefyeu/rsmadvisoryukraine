<?php
	require('head.php');
?>
	<title>
		<?php
			switch ($lang) {
				case 'ua':
					echo "РСМ Україна - Про компанію";
					break;
				case 'en':
					echo "RSM Ukraine - About";
					break;
			}
		?>
	</title>
	<?php 
		require('header_new.php');
		$services = get_services_all();
		$experts = get_experts_all();
		$experts_count = $experts -> rowcount();
		for($i = 0; $i < $experts_count; $i++) {
			$indexes[] = $i;
		}
		$chosen_experts = array_rand($indexes, 3);
		$experts = $experts -> fetchAll();
	?>
	<div class="secondary-page-picture">
		<img src="/images/bg.jpg" class="background">
		<div class="container picture">
			<div class="secondary-page-picture__title">
				<h1 class="picture__page-title">
					<?php switch ($lang) {
						case 'ua':
							echo "Наша компанія";
							break;
						case 'en':
							echo "Our company";
							break;
					}?>
				</h1>
			</div>
			<div class="secondary-page-picture__blue"><img src="/images/sth.png"></div>
			<div class="secondary-page-picture__green"></div>
			<div class="secondary-page-picture__grey"></div>
		</div>
	</div>
	<div class = "content__container">
		<div class="container">
			<div class="about__content">
				<div class="main_text_container">
					<div class="labels_container">
						<h2 class="active" onclick = "change_description(1,this)">
							<?php switch ($lang) {
								case 'ua':
									echo "RSM International";
									break;
								case 'en':
									echo "RSM International";
									break;
								}
							?>	
						</h2>
						<h2 onclick = "change_description(2,this)">
							<?php switch ($lang) {
								case 'ua':
									echo "RSM в Україні";
									break;
								case 'en':
									echo "RSM Ukraine";
									break;
								}
							?>	
						</h2>
					</div>
					<div class = "description_container">
						<div class="description">
							<?php switch ($lang) {
								case 'ua':
									echo "<p>RSM – це потужна мережа експертів на ринку аудиторських та консалтингових послуг, яка посідає <span>6</span>-е місце в своїй галузі, маючи свої представництва в понад 120 юрисдикціях.</p>
										<p>RSM – це інтегрована команда, яка ділиться навичками, розумінням та ресурсами, а також підходами, спрямованими на глибоке розуміння потреб клієнта.</p>
										<p>RSM – це група компаній, яка працює для задоволення унікальних потреб бізнесу середнього ринку в напрямку аудиту та консалтингу, надаючи для них можливість впевнено рухатися вперед і реалізувати свій повний потенціал.</p>
										<p>В RSM ми працюємо над тим, щоб дати клієнтам більше розуміння, більше експертизи, більше впевненості.</p>
										<h3>Це і є The Power of Being Understood</h3>
										<p>Ми готові проконсультувати вас із широкого спектру питань: від проведення аудиту до розробки стратегії. Ми маємо багаторічний досвід, глибоко розуміємо кожен аспект вашого бізнесу, поєднуємо досвід мережі в цілому та розуміння національного ринку. Ми працюємо на задоволення потреб наших клієнтів.</p>
										<p>Наші клієнти – це представники від сімейного бізнесу до великих транснаціональних компаній багатьох секторів економіки, які орієнтовані на ріст, діють на національному рівні та закордоном.</p>
										<h3>RSM International у цифрах</h3>
										<p>Ми посідаємо <span>6</span>-е місце на ринку аудиторських та консалтингових послуг світу.</p>
										<p>Ми представлені в понад <span>120</span> країнах й знаходимося в кожному з 40 найбільших ділових центрів світу.</p>
										<p>Ми об'єднали понад <span>43 000</span> співробітників.</p>
										<p>У нас є <span>810</span> офісів по всій Америці, Європі, Близькому Сході, Африці та Азіатсько-Тихоокеанському регіону.</p>
										<img data-src='/images/rsm international.gif' width='100%' class='lazy'>
										<div class='bottom_underline'></div>
										<p>Більш детальна інформація за посиланням <a href ='https://www.rsm.global/'>www.rsm.global.</a></p>";
									break;
								case 'en':
									echo "<p>RSM is a powerful network of experts in the market of audit and consulting services, which ranks <span>6</span>-th in its field, with offices in more than 120 jurisdictions.</p>
										<p>RSM is an integrated team that shares skills, understanding and resources, as well as approaches to a deep understanding of customer needs.</p>
										<p>RSM is a group of companies that works to meet the unique needs of the mid-market business in the field of auditing and consulting, giving them the opportunity to confidently move forward and realize their full potential.</p>
										<p>At RSM, we work to give customers more understanding, more expertise, more confidence.</p>
										<h3>This is The Power of Being Understood</h3>
										<p>We are ready to advise you on a wide range of issues: from auditing to strategy development. We have many years of experience, deeply understand every aspect of your business, combine the experience of the network as a whole and understanding of the national market. We work to meet the needs of our customers.</p>
										<p>Our clients range from family businesses to large multinational companies in many sectors of the economy, which are focused on growth, operate nationally and abroad.</p>
										<h3>RSM International in numbers</h3>
										<p>We rank <span>6</span>-th in the world market of audit and consulting services.</p>
										<p>We are represented in more than <span>120</span> ountries and are located in each of the 40 largest business centers in the world.</p>
										<p>We have more than <span>43 000</span> employees.</p>
										<p>We have <span>810</span> offices throughout America, Europe, the Middle East, Africa and the Asia-Pacific region.</p>
										<img data-src='/images/rsm international english.gif' width='100%' class='lazy'>
										<div class='bottom_underline'></div>
										<p>More information at <a href ='https://www.rsm.global/'>www.rsm.global.</a></p>";
									break;
								}
							?>
						</div>
						<div class="description inactive">
							<?php switch ($lang) {
								case 'ua':
									echo "<p>RSM в Україні (ТОВ «РСМ Україна Аудит», ТОВ «РСМ Україна Консалтинг», ТОВ «РСМ Україна», ТОВ «РСМ Україна Сервіс») &mdash; це компанії на ринку аудиторських та консалтингових послуг України. Ми об'єднуємо колективні знання і досвід наших колег глобальної мережі РСМ з глибоким розумінням місцевої економічного та фінансового бізнес-середовища. </p>
										<p>RSM в Україні &mdash; це 3 офіси різних напрямів послуг з понад 60 провідними експертами. За 25 років успішної роботи компанії мережі RSM в Україні співпрацювали із більш ніж 500 українськими та іноземними компаніями та більш ніж 90 українськими та іноземними банками.</p>
										<h3><span>Послуги RSM в Україні</span></h3>
										<p>Ми працюємо в усіх сферах ринку аудиторських та консалтингових послуг, постійно розвиваємося та вдосконалюємося, щоб задовольнити ваші потреби.</p>
										<p>RSM в Україні надає послуги в напрямку аудиту, бухгалтерського аутсорсингу, консультаційних та податкових послуг. Детальніше про те, що ми пропонуємо за посиланням: <a href ='http://rsmadvisoryukraine.com/services/".$lang."'>http://rsmadvisoryukraine.com/services/".$lang.".</a></p>
										<p>Наші клієнти &mdash; це національні та іноземні компанії, представники різних галузей економіки: енергетика, гірнича справа та видобування, сільське господарство, страхування, банківська справа, приватний акціонерний капітал, нерухомість, торгівля тощо.</p>
										<h3><span>Переваги роботи з RSM в Україні</span></h3>
										<p><b>Глобальна мережа</b></p>
										<p>Пошук інвесторів у більше, ніж у 120 країнах світу, ефективна підтримка в різних юрисдикціях.</p>
										<p><b>Професіоналізм та досвід</b></p>
										<p>Глобальна підтримка міжнародних колег, багаторічний досвід та безліч успішно реалізованих проектів.</p>
										<p>RSM в Україні налічує понад 60 експертів, які є сертифікованими оцінювачами, аудиторами, мають МВА, PhD ступені, сертифікати MRICS, CIA, FCCA, АССА, DipIFR, CAP, CIPA.</p>
										<p><b>Індивідуальний підхід</b></p>
										<p>Ми прагнемо якомога глибше досліджувати проблему і надавати найбільш ефективні рішення під час супроводу угод.</p>";
									break;
								case 'en':
									echo "<p>RSM in Ukraine (LLC RSM Ukraine Audit, LLC RSM Ukraine Consulting, LLC RSM Ukraine, LLC RSM Ukraine Service) are the leading companies in the market of audit and consulting services in Ukraine. We combine the collective knowledge and experience of our colleagues in the global PCM network with a deep understanding of the local economic and financial business environment.</p>
										<p>RSM in Ukraine combines 3 offices of different services with more than 60 leading experts. For 25 years of successful work, RSM network companies in Ukraine have cooperated with more than 500 Ukrainian and foreign companies and more than 90 Ukrainian and foreign banks.</p>
										<h3><span>RSM services in Ukraine</span></h3>
										<p>We work in all areas of the audit and consulting services market, constantly evolving and improving to meet your needs.</p>
										<p>RSM in Ukraine provides services in the field of audit, accounting outsourcing, consulting and tax services. More about what we offer at the link: <a href ='http://rsmadvisoryukraine.com/services/".$lang."'>http://rsmadvisoryukraine.com/services/".$lang.".</a></p>
										<p>Our clients are national and foreign companies, representatives of various sectors of the economy: energy, mining and mining, agriculture, insurance, banking, private equity, real estate, trade and more.</p>
										<h3><span>Advantages of working with RSM in Ukraine</span></h3>
										<p><b>Global network</b></p>
										<p>Finding investors in more than 120 countries, effective support in different jurisdictions.</p>
										<p><b>Professionalism and experience</b></p>
										<p>Global support from international colleagues, many years of experience and many successfully implemented projects.</p>
										<p>RSM in Ukraine has more than 60 experts who are certified appraisers, auditors, have MBA, PhD degrees, certificates MRICS, CIA, FCCA, ACCA, DipIFR, CAP, CIPA.</p>
										<p><b>Individual approach</b></p>
										<p>We strive to investigate the problem as deeply as possible and provide the most effective solutions when supporting agreements.</p>";
									break;
								}
							?>
							<!--<img data-src="/images/rsm values.gif" style="width: 100%;" class="lazy"> -->					
							<div class="values_container">
								<div class="value">
									<img src = "/images/rsm-value.png" width="100%">
									<img src="/images/respect.png" class="value_image">
									<div class="value_name">
										<?php switch ($lang) {
											case 'ua':
												echo "Повага";
												break;
											case 'en':
												echo "Respect";
												break;
											}
										?>	
									</div>
									<div class="value_text">
										<?php switch ($lang) {
											case 'ua':
												echo "Ми демонструємо повагу при кожній взаємодії з нашими клієнтами, колегами та зацікавленими сторонами";
												break;
											case 'en':
												echo "We show respect in each interaction with <p> Clients </br> Employees </br> Partners</p>";
												break;
											}
										?>			
									</div>
								</div>
								<div class="value">
									<img src = "/images/rsm-value.png" width="100%">
									<img src="/images/fairness.png" class="value_image">
									<div class="value_name">
										<?php switch ($lang) {
											case 'ua':
												echo "Чесність";
												break;
											case 'en':
												echo "Integrity";
												break;
											}
										?>
									</div>
									<div class="value_text">
										<?php switch ($lang) {
											case 'ua':
												echo "Ми залишаємося вірними нашим цінностям у наших рішенням, обов’язках і комунікаціях";
												break;
											case 'en':
												echo "We stay true to our beliefs in <p>Decisions </br> Negotiations </br> Comminications</p>";
												break;
											}
										?>	
									</div>
								</div>
								<div class="value">
									<img src = "/images/rsm-value.png" width="100%">
									<img src="/images/team.png" class="value_image">
									<div class="value_name">
										<?php switch ($lang) {
											case 'ua':
												echo "Команда";
												break;
											case 'en':
												echo "Teamwork";
												break;
											}
										?> 
									</div>
									<div class="value_text">
										<?php switch ($lang) {
											case 'ua':
												echo "Ми працюємо разом, розвиваємо співпрацю в рамках нашого бізнесу, спільноти та закордоном";
												break;
											case 'en':
												echo "We cultivate genuine collaboration:
												<p>In work groups </br> Across member firms </br> Across functions </br> Amongst leaders</p>";
												break;
											}
										?>	
									</div>
								</div>
								<div class="value">
									<img src = "/images/rsm-value.png" width="100%">
									<img src="/images/perfection2.png" class="value_image">
									<div class="value_name">
										<?php switch ($lang) {
											case 'ua':
												echo "Досконалість";
												break;
											case 'en':
												echo "Excellence";
												break;
											}
										?>
									</div>
									<div class="value_text">
										<?php switch ($lang) {
											case 'ua':
												echo "Ми прагнемо бути кращими у всьому, що ми робимо, якісно виконувати нашу роботу";
												break;
											case 'en':
												echo "We achieve distinction through<p>Our standards</br>Our operations</br> the work we deliver</p>";
												break;
											}
										?>
									</div>
								</div>
								<div class="value">
									<img src = "/images/rsm-value.png" width="100%">
									<img src="/images/management5.png" class="value_image">
									<div class="value_name">
										<?php switch ($lang) {
											case 'ua':
												echo "Управління";
												break;
											case 'en':
												echo "Stewardship";
												break;
											}
										?>
									</div>
									<div class="value_text">
										<?php switch ($lang) {
											case 'ua':
												echo "Ми вдосконалюємося, розвиваючи наших людей, просуваючи різноманітність і створюючи наш бренд";
												break;
											case 'en':
												echo "We make RSM a better place by <p>Developing our people </br> Building our brand </br> Supporting our communities</p>";
												break;
											}
										?>
									</div>
								</div>
								<div id = "wrapper" class ="wrapper">
								</div>
							</div>
							<div class="additional_values">
								<div class="additional_value" id  = "cooperation">
									<?php switch ($lang) {
										case 'ua':
											echo "Співпраця";
											break;
										case 'en':
											echo "Collaboration";
											break;
										}
									?>				
								</div>
								<div class="additional_value" id = "ideas">
									<?php switch ($lang) {
										case 'ua':
											echo "Ідеї";
											break;
										case 'en':
											echo "Ideas";
											break;
										}
									?>		
								</div>
								<div class="additional_value" id = "understanding">
									<?php switch ($lang) {
										case 'ua':
											echo "Розуміння";
											break;
										case 'en':
											echo "Understanding";
											break;
										}
									?>	
								</div>
							</div>
							<div class="value_line" id ="value_line">
							</div>
						</div>
					</div>
					<!--<div class="bottom_underline"></div>
					<div class="clearfix">
						<div class="brochure_container">
							<img class="brochure_image" src="/images/brochure_image.jpg">
							<div class="blue_background"></div>
							<table>
								<tr>
									<td><p>
										<?php switch ($lang) {
											case 'ua':
												echo "ЗАВАНТАЖТЕ НАШУ БРОШЮРУ";
												break;
											case 'en':
												echo "DOWNLOAD OUR BROCHURE";
												break;
											}
										?>
									</p></td>
								</tr>
							</table>
						</div>
						<div class="ideas_container">
							<div class="blue_stripe"></div>
							<div class="ideas_title">
								<?php switch ($lang) {
									case 'ua':
										echo "БЛОГ";
										break;
									case 'en':
										echo "BLOG";
										break;
									}
								?>
							</div>
							<div class="ideas_text">
								<?php switch ($lang) {
									case 'ua':
										echo "Останні новини від наших експертів";
										break;
									case 'en':
										echo "Latest tax info from our professionals";
										break;
									}
								?>	
							</div>
							<div class="ideas_button"><p>
								<?php switch ($lang) {
									case 'ua':
										echo "ГЛОБАЛЬНІ ІДЕЇ";
										break;
									case 'en':
										echo "IDEAS & INSIGHTS";
										break;
									}
								?>	
								
							</p></div>
						</div>
					</div>-->
				</div>
				<div class="about__sidebar">
					<div class="about__services_container"> 
						<div class="blue_stripe"></div>
						<div class="about__services_text">
							<h3>
								<?php switch ($lang) {
									case 'ua':
										echo "Що ми пропонуємо";
										break;
									case 'en':
										echo "What we offer";
										break;
									}
								?>
							</h3>
							<p>
								<?php switch ($lang) {
									case 'ua':
										echo "Наші експерти надають комплексні послуги в сфері аудиту, консалтингу та податків для клієнтів у різних сферах економіки.";
										break;
									case 'en':
										echo "Our experts provide comprehensive auditing, consulting and tax services to clients in various areas of the economy.";
										break;
									}
								?>	
							</p>
							<ul>
							<?php foreach ($services as $service): ?>
								<li>
									<a href ="/service-page/<?php echo str_replace(' ','-',$service['name_en']); add_lang_reference($lang)?>">
										<?php echo $service['name'.'_'.$lang]?>
									</a>
								</li>
							<?php endforeach;?>
							</ul>
						</div>
					</div>
					<div class="experts_slider_container">
						<div class="slider_title">
							<?php switch ($lang) {
								case 'ua':
									echo "Наші експерти";
									break;
								case 'en':
									echo "Our experts";
									break;
								}
							?>		
						</div>
						<?php for($i=0; $i<3; $i++) : 
							$next_expert = $experts[$chosen_experts[$i]];?>
							<div class="slide">
								<a href = "/expert-page/<?php echo $next_expert['first_name_en']."-".$next_expert['last_name_en']; add_lang_reference($lang);?>">
									<img class="slide_photo" src = "/<?php echo $next_expert['image_reference']?>">
								</a>
								<a href = "/expert-page/<?php echo $next_expert['first_name_en']."-".$next_expert['last_name_en']; add_lang_reference($lang);?>">
									<div class="slide_name"><?php echo $next_expert['first_name'.'_'.$lang]." ".$next_expert['last_name'.'_'.$lang]?></div>
								</a>
								<div class="slide_position"><?php echo $next_expert['position'.'_'.$lang]?></div>
							</div>
						<? endfor;?>
						<div class="slider_button_container">
							<div class="slider_button" onclick="show_slide(1)"></div>
							<div class="slider_button" onclick="show_slide(2)"></div>
							<div class="slider_button" onclick="show_slide(3)"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<?php require('footer_new.php')?>
	<script type="text/javascript" src="/js/about.js"></script>