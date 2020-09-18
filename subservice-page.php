<?php
	require('head.php');
?>
	<title>
		<?php
			require('queries_functions.php');
			$current_service = get_service_by_name(str_replace('-', ' ', $_GET['service_name']));
			$service_id = $current_service['service_id'];
			$current_subservice = get_subservice_by_name(str_replace('-', ' ', $_GET['name']));
			$subservice_id = $current_subservice['subservice_id'];
			switch ($lang) {
				case 'ua':
					echo "Послуги РСМ Україна | ".$current_service['name'.'_'.$lang]." - ".$current_subservice['name'.'_'.$lang];
					break;
				case 'en':
					echo "RSM Ukraine services | ".$current_service['name'.'_'.$lang]." - ".$current_subservice['name'.'_'.$lang];
					break;
			}
		?>
	</title>
	<?php
		require('header_new.php');	
		$services = get_services_all();
		$products = get_products_by_subservice_id($subservice_id);
	?>
	<div class = "content_container">
		<div class="container">
			<div class="service__service-content">
				<div class="content_grid">
					<div class="sidebar">
						<div class="sticky_sidebar">
							<?php foreach ($services as $service):?>
								<div class="sidebar_service_container <?php if($service['service_id'] == $service_id) echo ' chosen'?>">
									<div class="sidebar_service"> <a href = "/service-page/<?php echo str_replace(' ','-',$service['name_en']); add_lang_reference($lang);?>"> <?php echo $service['name'.'_'.$lang];?> </a>
										<?php
											$subservices = get_subservices_by_service_id($service['service_id']);
											if ($subservices -> rowCount() != 0):
										?>
											<div class="down_arrow_container" onclick="change_subservices_visibility(this)"><div class="<?php if($service['service_id'] == $service_id) echo 'up_arrow'; else echo 'down_arrow'?>" ></div></div>
										<?php endif ?>
									</div>
									<div class="sidebar_subservice_container" style = "<?php if($service['service_id'] == $service_id) echo 'max-height: 1000px'?>">
										<?php foreach ($subservices as $subservice): ?>
											<a href = "/subservice-page/<?php echo str_replace(' ','-',$service['name_en']);?>/<?php echo str_replace(' ','-',$subservice['name_en']); add_lang_reference($lang);?>">
												<p class="sidebar_subservice" style="<?php if($subservice['subservice_id']==$subservice_id) echo 'background-color: rgb(0,106,172);' ;?>" >
													<img src="/images/square.jpg" class="list_image">
													<?php echo $subservice['name'.'_'.$lang];?>
												</p>
											</a>
										<?php endforeach?>
									</div>
								</div>
							<?php endforeach?>
						</div>
					</div>
					<div class="main_content_container">
						<div class="service_description">
							<div class="service_title"><h1 class="service__h1"><?php echo $current_subservice['name'.'_'.$lang] ?></h1></div>
							<?php echo $current_subservice['description'.'_'.$lang]?>
							<?php foreach ($products as $product): ?>
								<div class = "product" onclick = "change_product_visibility(this)">
									<div class="product_title">
										<?php echo $product['name'.'_'.$lang];?>
										<div class="product_arrow_down"></div>
									</div>
									<div class="product_description">
										<?php echo $product['description'.'_'.$lang];?>
									</div>
								</div>
							<?php endforeach ?>
							<div class="related_services_container">
								<div class="related_services_title">
									<?php switch ($lang) {
										case 'ua':
											echo "Інші послуги";
											break;
										case 'en':
											echo "Other services";
											break;
										}
									?>	
								</div>
								<!--<div class="related_services_text">
									<?php switch ($lang) {
										case 'ua':
											echo "Тут ми розмістимо послуги, що перегукуються з даною послугою.";
											break;
										case 'en':
											echo "Our products provide assistance in tax planning for enterprises. Do not hesitate to contact our professionals with your questions.";
											break;
										}
									?>	
								</div>-->
								<div class="related_service_block_container">
									<?php $services = get_services_all();
									foreach ($services as $service):
										if($service['service_id'] != $service_id):?>
											<div class="related_service_block">
												<div class="blue_stripe"></div>
												<div class="related_service_block_title">
													<?php echo $service['name'.'_'.$lang]?>
												</div>
												<div class="related_service_block_image">
													<img src= "/<?php echo $service['image_reference']?>">
												</div>
												<div class="related_service_block_text">
													<?php echo $service['short_description'.'_'.$lang]?>
												</div>
												<div class="read_more">
													<a href = "/service-page/<?php echo str_replace(' ','-',$service['name_en']); add_lang_reference($lang);?>">
														<?php switch ($lang) {
															case 'ua':
																echo "Деталі";
																break;
															case 'en':
																echo "Read more";
																break;
															}
														?>
														<div class="read_more_arrow"></div>
													</a>
												</div>
											</div>			
										<?php endif;
									endforeach ?>
								</div>
							</div>
						</div>
						<div class="all_experts_contacts">
							<div class="sticky_sidebar">
								<div class="any_question">
									<?php switch ($lang) {
										case 'ua':
											echo "Кваліфікація наших експертів відповідає всім вашим потребам";
											break;
										case 'en':
											echo "Our experts' qualifications meet all of your needs";
											break;
									}
									?>
								</div>
								<!--<div class="dont_hesitate">
								<?php switch ($lang) {
									case 'ua':
										echo "Не зволікайте з'єднатись з нами";
										break;
									case 'en':
										echo "Don't hesitate to contact us";
										break;
									}
								?>
								</div>-->
								<?php 
									$responsible_experts = get_responsible_experts_by_subservice_id($subservice_id);
									$responsible_experts = explode(",",$responsible_experts);
									for ($i =0; $i<count($responsible_experts); $i++) {
									$responsible_expert = get_expert_by_id($responsible_experts[$i]);?>
									<div class="expert_contacts">
										<a href = "/expert-page/<?php echo $responsible_expert['first_name_en']."-".$responsible_expert['last_name_en']; add_lang_reference($lang);?>">	
											<img class="expert_photo" src = "/<?php echo $responsible_expert['image_reference']?>">
										</a>
										<a href = "/expert-page/<?php echo $responsible_expert['first_name_en']."-".$responsible_expert['last_name_en']; add_lang_reference($lang);?>">
											<div class="expert_name">
												<?php echo $responsible_expert['first_name'.'_'.$lang]." ".$responsible_expert['last_name'.'_'.$lang];?>
											</div>
										</a>
										<div class="expert_position" style="color: rgb(63,156,53)">
											<?php echo $responsible_expert['position'.'_'.$lang];?>
										</div>
										<!--<a class="expert_email" href = "mailto:<?php echo $responsible_expert['email']?>">
											<?php echo $responsible_expert['email'] ?>
										</a>
										<br>
										<a class="expert_tel" href = "tel:<?php echo $responsible_expert['phone']?>"><?php echo $responsible_expert['phone']?></a>-->
									</div>
								<?php } ?>
								<div class="make_offer_button_container">
									<a href = "/offer/<?php echo str_replace(' ','-',$current_service['name_en']); echo '/'.str_replace(' ','-',$current_subservice['name_en'])."/$lang"?>"><div>
										<?php switch ($lang) {
											case 'ua':
												echo "Онлайн пропозиція";
												break;
											case 'en':
												echo "Make online offer";
												break;
											}
										?>	
									</div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require('footer_new.php')?>
	<script src="/js/service_page.js"></script>