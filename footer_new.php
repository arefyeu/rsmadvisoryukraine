<div class="footer__container">
		<div class="container">
			<div class="footer">
				<div class = "the-power">
					<?php switch ($lang) {
						case 'ua':
							echo "<b>СИЛА В РОЗУМІННІ</b>
								</br>
								АУДИТ<span>ПОДАТКИ</span>КОНСУЛЬТАЦІЇ";
							break;
						case 'en':
							echo "<b>THE POWER OF BEING UNDERSTOOD</b>
								</br>
								AUDIT<span>TAX</span>CONSULTING";
							break;
						}
					?>
				</div>
				<div class="footer__references">
					<div class="footer__references-block">
						<div class="footer__reference-title">
							<?php switch ($lang) {
								case 'ua':
									echo "Послуги";
									break;
								case 'en':
									echo "Services";
									break;
								}
							?>
						</div>
						<div class="footer__reference">
							<?php $services = get_services_all();
								foreach ($services as $service) {?>
									<a href = "/<?php echo 'service-page/'.str_replace(' ', '-', $service['name_en']) ?>"><?php echo $service['name'.'_'.$lang];?></a>
							<?php } ?>
						</div>
					</div>
					<div class="footer__references-block">
						<div class="footer__reference">
							<?php switch ($lang) {
								case 'ua':
									echo "<div class='footer__reference-title'>RSM у світі</div>";
									echo "
											<a href = 'https://www.rsm.global/africa'>Африка</a>
											
											<a href = 'https://www.rsm.global/mena'>БСПА</a>
											
											<a href = 'https://www.rsm.global/asiapacific'>Азія</a>
											
											<a href = 'https://www.rsm.global/europe'>Європа</a>
											
											<a href = 'https://www.rsm.global/latinamerica'>Латинська Америка</a>
											
											<a href = 'https://www.rsm.global/northamerica'>Північна Америка</a>";
									break;
								case 'en':
									echo "<div class='footer__reference-title'>RSM Links</div>";
									echo "
											<a href = 'https://www.rsm.global/africa'>Africa</a>
											
											<a href = 'https://www.rsm.global/mena'>MENA</a>
											
											<a href = 'https://www.rsm.global/asiapacific'>Asia Pacific</a>
											
											<a href = 'https://www.rsm.global/europe'>Europe</a>
											
											<a href = 'https://www.rsm.global/latinamerica'>Latin America</a>
											
											<a href = 'https://www.rsm.global/northamerica'>North America</a>";
									break;
								}
							?>
						</div>
					</div>
					<div class="footer__references-block">
						<div class="footer__reference-title">
							<?php switch ($lang) {
								case 'ua':
									echo "Соцальні сторінки";
									break;
								case 'en':
									echo "Social links";
									break;
							}
							?>
						</div>
						<div class="footer__reference social">
							<a href = "https://ru.linkedin.com/company/rsm-ua"><img src="/images/linkedin logo.png"> Linkedin </a>
							<a href = "https://twitter.com/RSMukraine"><img src="/images/twitter_logo.png"> Twitter </a>
							<a href = "https://www.youtube.com/user/RSMInternational"> <img src="/images/youtube_icon.png"> Youtube </a>
							<a href = "https://www.facebook.com/rsm.ukraine/"><img src="/images/fb_icon.png"> Facebook </a>
						</div>
					</div>
				</div>
				<div class="disclaimer">
					<?php switch ($lang) {
						case 'ua':
							echo "<p>
								РСМ УКРАЇНА є членом мережі RSM і діє під торгівельною маркою RSM. Торгівельна назва RSM використовується членами мережі RSM.
							</p>

							<p>
								Кожен член мережі RSM є незалежною фірмою з надання бухгалтерських та консультаційних послуг, який діє від власного імені. Мережа RSM не є самостійною юридичною особою в жодній юрисдикції. Управління мережею RSM здійснюється компанією RSM International Limited, яка зареєстрована в Англії та Уельсі, (номер компанії 4040598), з офісом, зареєстрованим за адресою: 50 Cannon Street, London, EC4N 6JJ.
							</p>

							<p>
								Бренд з торгівельною маркою RSM та інші права інтелектуальної власності, які використовуються членами мережі, належать RSM International Association, яка створена у відповідності до статті 60 (і наступних) Цивільного кодексу Швейцарії, з місцезнаходженням в м. Цуг. Будь-які статті та публікації, розміщенні на цьому сайті, не призначені для надання конкретної консультації з питань ведення бізнесу чи інвестицій. Ми не несемо відповідальності за будь-які помилки або упущення, а також за заподіяний будь-якій особі або організації збиток, спричинений її діями або бездіяльністю в результаті будь-якого опублікованого матеріалу; однак, вони можуть бути визнані автором(ами) або RSM International. Перед прийняттям будь-якого бізнес або інвестиційного рішення ви маєте отримати окрему незалежну консультацію.
							</p>";
							break;
						case 'en':
							echo "
							<p>
								RSM Ukraine is a member of the RSM network and trades as RSM. RSM is the trading name used by the members of the RSM network.
							</p>

							<p>
								Each member of the RSM network is an independent accounting and advisory firm each of which practices in its own right. The RSM network is not itself a separate legal entity of any description in any jurisdiction. The RSM network is administered by RSM International Limited, a company registered in England and Wales (company number 4040598) whose registered office is at 50 Cannon Street, London, EC4N 6JJ.
							</p>

							<p>
								The brand and trademark RSM and other intellectual property rights used by members of the network are owned by RSM International Association, an association governed by article 60 et seq of the Civil Code of Switzerland whose seat is in Zug. Any articles or publications contained within this website are not intended to provide specific business or investment advice. No responsibility for any errors or omissions nor loss occasioned to any person or organisation acting or refraining from acting as a result of any material in this website can, however, be accepted by the author(s) or RSM International. You should take specific independent advice before making any business or investment decision.
							</p>";
							break;
					}?>
				</div>
			</div>
		</div>
	</div>
	<script src ="/js/jquery.js"></script>
	<script src ="/js/header_new.js"></script>
</body>
</html>