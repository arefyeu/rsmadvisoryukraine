<?php
	require('head.php');
?>
	<title>
		<?php
			switch ($lang) {
				case 'ua':
					echo "РСМ Україна - Контакти";
					break;
				case 'en':
					echo "RSM Ukraine - Contacts";
					break;
			}
		?>
	</title>
	<?php 
		require('header_new.php');
	?>
	<div class = "content__container">
		<div class="container">
			<div class="contacts__title">
				<h1 class="contacts__h1">
					<?php switch ($lang) {
					case 'ua':
						echo "Контакти";
					break;
					case 'en':
						echo "Contacts";
					break;
					}
					?>
				</h1>
			</div>
			<div class = "all_contacts_container">
				<div class="contact-1">
					<p class = "company_name">
						<?php switch ($lang) {
						case 'ua':
							echo "РСМ УКРАЇНА КОНСАЛТИНГ";
						break;
						case 'en':
							echo "RSM UKRAINE CONSULTING";
						break;
						}
						?>					
					</p>
					<p class = "company_address">
						<?php switch ($lang) {
						case 'ua':
							echo "Україна, 03680, м. Київ, вул. Фізкультури, 28";
						break;
						case 'en':
							echo "28 Fizkultury Street, Kyiv, 03680, Ukraine";
						break;
						}
						?>		
					</p>
					<p class = "company_email">
						<?php switch ($lang) {
						case 'ua':
							echo "Пошта: ";
						break;
						case 'en':
							echo "Email: ";
						break;
						}
						?>	
						<a href ="mailto:info@rsm.ua"> info@rsm.ua </a>
					</p>
					<p class="company_phone">
						<?php switch ($lang) {
						case 'ua':
							echo "Телефон: ";
						break;
						case 'en':
							echo "Phone: ";
						break;
						}
						?>
						<a href ="tel:+38 (044) 363-80-00"> +38 (044) 363-80-00 </a>
					</p>
				</div>
				<div class="contact-2">
					<p class = "company_name">
						<?php switch ($lang) {
						case 'ua':
							echo "РСМ УКРАЇНА";
						break;
						case 'en':
							echo "RSM UKRAINE";
						break;
						}
						?>
					</p>
					<p class = "company_address">
						<?php switch ($lang) {
						case 'ua':
							echo "Україна, 03151, м. Київ, вул. Донецька, 37/19";
						break;
						case 'en':
							echo "37/19 Donetska Street, Kyiv, 03151, Ukraine";
						break;
						}
						?>
					</p>
					<p class = "company_email">
						<?php switch ($lang) {
						case 'ua':
							echo "Пошта: ";
						break;
						case 'en':
							echo "Email: ";
						break;
						}
						?>
						<a href ="mailto:office@rsm.ua"> office@rsm.ua </a>
					</p>
					<p class="company_phone">
						<?php switch ($lang) {
						case 'ua':
							echo "Телефон: ";
						break;
						case 'en':
							echo "Phone: ";
						break;
						}
						?>
						<a href ="tel:+38 (044) 244-76-62"> +38 (044) 244-76-62 </a>, <a href ="tel:+38 (044) 501-59-34"> +38 (044) 501-59-34 </a>
					</p>
				</div>
				<div class="map-1">
					<?php switch ($lang) {
					case 'ua':?>
						<iframe class = "company_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.473342207516!2d30.505588315730776!3d50.43228337947283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cee39cb3d361%3A0x7b5f2abed0cba31c!2z0LLRg9C70LjRhtGPINCk0ZbQt9C60YPQu9GM0YLRg9GA0LgsIDI4LCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1suk!2sua!4v1589546605491!5m2!1suk!2sua" frameborder="0"  allowfullscreen="" aria-hidden="false"></iframe>
						<?php break;
					case 'en':?>
						<iframe class = "company_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.4731587838305!2d30.50558295165608!3d50.43228679645323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cee39cb3d361%3A0x7b5f2abed0cba31c!2sFizkul&#39;tury%20St%2C%2028%2C%20Kyiv%2C%2002000!5e0!3m2!1sen!2sua!4v1589492183142!5m2!1sen!2sua" frameborder="0"  allowfullscreen="" aria-hidden="false"></iframe>
						<?php break;
					}
					?>
				</div>
				<div class="map-2">
					<?php switch ($lang) {
					case 'ua':?>
						<iframe class = "company_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.7559560109103!2d30.44777935165596!3d50.42701839683273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceafc5706961%3A0xedc25894b00c1d6e!2z0LLRg9C70LjRhtGPINCU0L7QvdC10YbRjNC60LAsIDM3LCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1suk!2sua!4v1589547438951!5m2!1suk!2sua" frameborder="0"  allowfullscreen="" aria-hidden="false"></iframe>
						<?php break;
					case 'en':?>
						<iframe class = "company_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.7559560109103!2d30.44777935165596!3d50.42701839683273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceafc5706961%3A0xedc25894b00c1d6e!2sDonetska%20St%2C%2037%2C%20Kyiv%2C%2002000!5e0!3m2!1sen!2sua!4v1589492219622!5m2!1sen!2sua" frameborder="0"  allowfullscreen="" aria-hidden="false"></iframe>
						<?php break;
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<?php require('footer_new.php')?>