<?php
	require('head.php');
?>
	<title>
		<?php
			switch ($lang) {
				case 'ua':
					echo "РСМ Україна - Комерційна онлайн пропозиція";
					break;
				case 'en':
					echo "RSM Ukraine - Online offer";
					break;
			}
		?>
	</title>
	<?php 
		require('header_new.php');
		$services = get_services_all();
		$chosen_service = str_replace('-', ' ', $_GET['service']);
		$chosen_subservice = str_replace('-', ' ', $_GET['subservice']);
	?>
	<div class = "content__container">
		<div class="container">
			<div class="form__form-content">
				<div class="offer_title">
					<h1 class="offer__h1">
						<?php switch ($lang) {
							case 'ua':
								echo "Онлайн пропозиція";
								break;
							case 'en':
								echo "Online offer";
								break;
							}
						?>
					</h1>
				</div>
				<div class = "please_fill">
					<?php switch ($lang) {
						case 'ua':
							echo "Будь ласка, заповніть форму та оберіть послуги, в яких Ви зацікавлені! Наші співробітники зв'яжуться з вами якнайшвидше.";
							break;
						case 'en':
							echo "Please fill the form and check the services you are interested in! Our colleagues are contacting you as soon as possible.";
							break;
						}
					?>
				</div>
				<form id = "contact_form" action="/form_processing.php?lang=<?php echo $lang;?>" method="POST" autocomplete="off">
					<div class="text_inputs_container">
						<div class="text_input_container">
							<input class="text_input" type="text" name="name" onchange="change_placeholder(this)">
							<div class ="custom_placeholder"><span class="blue_star">*</span>
								<?php switch ($lang) {
									case 'ua':
										echo "Ім'я";
										break;
									case 'en':
										echo "Name";
										break;
									}
								?>
							</div>
							<span class="alert"></span>
						</div>
						<div class="text_input_container">
							<input class="text_input" type="text" name="company" onchange="change_placeholder(this)">
							<div class ="custom_placeholder"><span class="blue_star">*</span> 
								<?php switch ($lang) {
									case 'ua':
										echo "Компанія";
										break;
									case 'en':
										echo "Company";
										break;
									}
								?>
							</div>
							<span class="alert"></span>
						</div>
						<div class="text_input_container">
							<input class="text_input" type="text" name="email" onchange="change_placeholder(this)">
							<div class ="custom_placeholder"><span class="blue_star">*</span>
								<?php switch ($lang) {
									case 'ua':
										echo "Електронна пошта";
										break;
									case 'en':
										echo "Email";
										break;
									}
								?>	
							</div>
							<span class="alert"></span>
						</div>
						<div class="text_input_container">
							<input class="text_input" type="text" name = "note" onchange="change_placeholder(this)">
							<div class ="custom_placeholder"><span class="blue_star" >*</span>
								<?php switch ($lang) {
									case 'ua':
										echo "Примітки";
										break;
									case 'en':
										echo "Note";
										break;
									}
								?>			
							</div>
							<span class="alert"></span>
						</div>
					</div>
					<div class="checkboxes_inputs_container">
						<?php foreach ($services as $service): ?>
							<div style="margin-bottom: 20px;">
								<label class="checkbox_container">
									<?php echo $service['name'.'_'.$lang];?>
								  	<input type="checkbox" name = "<?php echo $service['name'.'_'.$lang]?>" <?php if($service['name_en']==$chosen_service) echo 'checked'?> onchange ="change_subservices_visibility(this)">
								  	<span class="checkmark"></span>
								</label>
								<div class="subservices_checkbox_container" style="padding-left: 35px; margin-bottom: 10px; max-height: 0px; overflow: hidden; transition: 1s; <?php if($service['name_en']==$chosen_service) echo 'max-height: 1000px;'?>">
									<?php $subservices = get_subservices_by_service_id($service['service_id']);
									foreach ($subservices as $subservice):?>
										<label class="checkbox_container" style ="font-size: 13pt; margin-bottom: 20px;">
											<?echo $subservice['name'.'_'.$lang] ?>
											<input type="checkbox" name = "<?php echo $subservice['subservice_name']?>" <?php if($subservice['name_en']==$chosen_subservice) echo 'checked'?>>
											<span class="checkmark"></span>
										</label>
									<?php endforeach;?>
								</div>
							</div>
						<?php endforeach ?>
					</div>
					<div class = "data_usage">
						<?php switch ($lang) {
							case 'ua':
								echo "Ваші дані будуть використані лише для цілей пропозиції і не будуть передаватися третім особам. 
									Ви можете переглянути <a href ='#''>політику конфіденційності</a> та <a href = '#'> інформацію щодо обробки даних тут</a>.
									<label class='checkbox_container'>
										Будь ласка, підтвердіть, що Ви хочете передати дані нам, а також, що Ви ознайомлені з політикою конфіденційності.
										<input type='checkbox'>
										<span class='checkmark'></span>
									</label>";
								break;
							case 'en':
								echo "Your data will be used only for the purpose of the online offer and we will not disclose such data to third parties. 
									You can check our <a href ='#''>privacy policy</a> and <a href = '#'> information on data processing here</a>.
									<label class='checkbox_container'>
										Please confirm with a click that you want to disclose these data to us, and you read and accepted our privacy policy.
										<input type='checkbox'>
										<span class='checkmark'></span>
									</label>";
								break;
							}
						?>	
					</div>
				</form>
				<div class="submit_container">
					<button onclick="submit_form()">
						<?php switch ($lang) {
							case 'ua':
								echo "ЗАПИТ НА ПРОПОЗИЦІЮ";
								break;
							case 'en':
								echo "REQUEST OFFER";
								break;
							}
						?>		
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php require('footer_new.php')?>
	<script src="/js/offer_form.js"></script>