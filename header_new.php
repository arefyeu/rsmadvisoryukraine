</head>
<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWRW4R8"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php
	$services = get_services_all();
?>
<div class="header">
		<div class="container">
			<div class="header__content">
				<a href="/<?php echo $lang;?>">
					<div class="logo">
						<img src = "/images/rsm logo.png">
					</div>
				</a>
				<div class="header__right">
					<div class="flag">
						<img src = "/images/ukraine_flag.png">
						<div class="flag__title">ukraine</div>
					</div>
					<div class="language">
						<div class="language__item <?php if($lang=='en') echo('selected')?>">
							<a href="<?php change_language("en")?>">en</a>
						</div>
						<div class="language__item <?php if($lang=='ua') echo('selected')?>">
							<a href="<?php change_language("ua")?>">ua</a>
						</div>
					</div>
					<div class="regions">
						<div class="regions__title">
							<?php switch ($lang) {
								case 'ua':
									echo "Світові представництва";
									break;
								case 'en':
									echo "Worldwide locations";
									break;
								}
							?>
						</div>
						<div class="regions__arrow">	
						</div>
						<div class="regions__all-regions">
							<div class="regions__region">
								<div class = "regions__region-title"> Global </div>
								<div class="regions__region-ref"> <a href = "https://www.rsm.global">RSM Global</a> </div>
							</div>
							<div class="regions__region">
								<div class = "regions__region-title"> Regions </div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/africa">Africa</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/asiapacific">Asia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/europe">Europe</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/latinamerica">Latina America</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/mena">MENA</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/northamerica">North America</a></div>
							</div>
							<div class="regions__region">
								<div class = "regions__region-title"> Countries / Jurisdictions </div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/afghanistan/">Afghanistan</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/albania-landing-page">Albania</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/angola">Angola</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/argentina/en">Argentina</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/australia/">Australia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/azerbaijan/">Azerbaijan</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/bahrain/">Bahrain</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/bangladesh/">Bangladesh</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/belarus/">Belarus</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/belgium/">Belgium</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/benin">Benin</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/bolivia">Bolivia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/bosniaandherzegovina/">Bosnia and Herzegovina</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/botswana/">Botswana</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/brazil/pt-br">Brasil</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/bulgaria/">Bulgaria</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/cambodia">Cambodia</a></div>
								<div class="regions__region-ref"><a href = "https://rsmcanada.com">Canada</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/caymanislands/">Cayman Islands</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/chad">Chad</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/channelislands/">Channel Islands</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/chile-contact-us">Chile</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/china/zh-hans">China</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/colombia/es">Colombia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/costarica/es">Costa Rica</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/croatia/hr">Croatia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/cyprus/">Cyprus</a></div>
								<div class="regions__region-ref"><a href = "https://rsm.cz">Czech Republic</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/denmark-contact-us">Denmark</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/dominicanrepublic/es">República Dominicana</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/ecuador">Ecuador</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/egypt/">Egypt</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/elsalvador/es">El Salvador</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/gabon">Gabon</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/eswatini/">Eswatini</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/ethiopia">Ethiopia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/finland/fi">Finland</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/france/fr">France</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/georgia/ka">Georgia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.de/en">Germany</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/ghana">Ghana</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/gibraltar/">Gibraltar</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/greece/">Greece</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/guatemala/es">Guatemala</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/channelislands/guernsey">Guernsey</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/guinea">Guinea</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/honduras/es">Honduras</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/hongkong/">Hon Kong</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.hu">Hungary</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/india/">India</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/indonesia/en">Indonesia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/iraq">Iraq</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/ireland/">Ireland</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/isle-man">Isle of Man</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/israel/he">Israel</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/italy/">Italy</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/ivory-coast">Ivory Coast</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/japan/">Japan</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/channelislands/jersey">Jersey</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/kazakhstan/ru">Kazakhstan</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/kenya/">Kenya</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/korea/">Korea</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/kosovo/">Kosovo</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/kuwait/">Kuwait</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/lebanon/">Lebanon</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/luxembourg/">Luxembourg</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/macedonia/mk">Macedonia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/malawi">Malawi</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/malaysia/">Malaysia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/malta/">Malta</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/mauritania">Mauritania</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/mauritius/">Mauritius</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/mexico/es">Mexico</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/morocco/">Morocco</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/mozambique/pt">Mozambique</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/myanmar">Myanmar</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/netherlands/nl">Netherlands</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/nicaragua/es">Nicaragua</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/nigeria-contact-us">Nigeria</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/norway/nb">Norway</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/oman/">Oman</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/pakistan/">Pakistan</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/palestine">Palestine</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/panama/es">Panama</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/peru/es">Peru</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/philippines/">Philippines</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsmpoland.pl">Poland</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/portugal/en">Portugal</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/puertorico/">Puerto Rico</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/qatar/">Qatar</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/romania/">Romania</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/russia/">Russia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/gabon">Sao Tome & Principe</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/saudiarabia/">Saudi Arabia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/senegal">Senegal</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/singapore/">Serbia</a></div>
								<div class="regions__region-ref"><a href = "https://rsmsk.sk">Slovakia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/southafrica/">South Africa</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.es/en/">Spain</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/sri-lanka">Sri Lanka</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/eswatini/">Swaziland</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/sweden/sv">Sweden</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/switzerland/">Switzerland</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/taiwan/zh-hant">Taiwan</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/tajikistan/">Tajikistan</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/tanzania/">Tanzania</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/thailand/">Thailand</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/tunisia-correspondent-firm">Tunisia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/turkey-contact-us">Turkey</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/turks-caicos">Turks & Caicos</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/uae/">UAE</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/uganda/">Uganda</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/ukraine/ua">Ukraine</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsmuk.com">United Kingdom</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/uruguay/es">Uruguay</a></div>
								<div class="regions__region-ref"><a href = "https://rsmus.com">USA</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/venezuela/es">Venezuela</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/vietnam/">Vietnam</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/zambia-landing-page">Zambia</a></div>
								<div class="regions__region-ref"><a href = "https://www.rsm.global/zimbabwe">Zimbabwe</a></div>
							</div>
						</div>
					</div>
					<style>
						
					</style>
					<div class="socialnetworks">
						<a href = "https://www.facebook.com/rsm.ukraine/"><img src = "/images/fb logo.png" class = "social_network_logo"></a>
						<a href = "https://ru.linkedin.com/company/rsm-ua"><img src = "/images/linkedin logo.png" class = "social_network_logo"></a>
						<a href = "https://www.youtube.com/user/RSMInternational"><img src = "/images/youtube logo.png" class = "social_network_logo"></a>
						<a href = "https://twitter.com/RSMukraine"><img src = "/images/twitter_logo.png" class = "social_network_logo"></a>
					</div>
					<div class="burger">
						<div class="burger__item"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu__container">
		<div class="container">
			<div class="menu">
				<div class="menu__button">
					<a id = "who_we_are" href = 'http://rsmadvisoryukraine.com/about<?php add_only_lang_reference($lang)?>'>
						<?php switch ($lang) {
							case 'ua':
								echo "ХТО МИ";
								break;
							case 'en':
								echo "WHO WE ARE";
								break;
						}
					?>
					</a>
					<div class="submenu">
						<div class="submenu__button">
							<a href="/about<?php add_only_lang_reference($lang)?>">
								<?php switch ($lang) {
									case 'ua':
										echo "ПРО НАС";
										break;
									case 'en':
										echo "ABOUT US";
										break;
								}?>
							</a>
						</div>
						<div class="submenu__button">
							<a href="/experts<?php add_only_lang_reference($lang)?>">
								<?php switch ($lang) {
									case 'ua':
										echo "НАШІ ЕКСПЕРТИ";
										break;
									case 'en':
										echo "OUR EXPERTS";
										break;
								}?>
							</a>
						</div>
						<div class="submenu__button">
							<a href="/contacts<?php add_only_lang_reference($lang)?>">
								<?php switch ($lang) {
									case 'ua':
										echo "КОНТАКТИ";
										break;
									case 'en':
										echo "CONTACT US";
										break;
								}
								?>
							</a>
						</div>
					</div>
				</div>
				<div class="menu__button">
					<a id = "what_we_offer" href = 'http://rsmadvisoryukraine.com/services<?php add_only_lang_reference($lang)?>'>
						<?php switch ($lang) {
							case 'ua':
								echo "МИ ПРОПОНУЄМО";
								break;
							case 'en':
								echo "WHAT WE OFFER";
								break;
						}?>
					</a>
					<div class="submenu">
						<?php foreach ($services as $service):?>
							<div class="submenu__button">
								<a href="/service-page/<?php echo str_replace(' ','-',$service['name_en']); add_lang_reference($lang) ?>"><?php echo mb_strtoupper($service['name'.'_'.$lang]);?></a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="menu__button">
					<a href ="/offer<?php add_only_lang_reference($lang)?>">
						<?php switch ($lang) {
							case 'ua':
								echo "ОНЛАЙН ПРОПОЗИЦІЯ";
								break;
							case 'en':
								echo "MAKE ONLINE OFFER";
								break;
						}
						?>
					</a>
				</div>
			</div>
		</div>
	</div>