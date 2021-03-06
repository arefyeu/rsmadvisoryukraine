<?php
	require('head.php');
?>
	<title>
		<?php
			switch ($lang) {
				case 'ua':
					echo "РСМ Україна - Дякуємо за пропозицію";
					break;
				case 'en':
					echo "RSM Ukraine - Thanks for your offer";
					break;
			}
		?>
	</title>
	<?php require('header_new.php');?>
	<div class="thank-you__content-container">
		<div class="container">
			<div class="thank-you__content">
				<div class="thank-you__title">
					<?php
						switch ($lang) {
							case 'ua':
								echo "Дякуємо!";
								break;
							case 'en':
								echo "Thank you!";
								break;
						}
					?>
				</div>
				<div class="bird-container">
					<a href = "/<?php echo $lang?>">
						<div class="bird__circle">
							<div class="back-to-main">
								<?php
									switch ($lang) {
										case 'ua':
											echo "На головну!";
											break;
										case 'en':
											echo "To main page!";
											break;
									}
								?>
							</div>
							<div class="bird">
								
							</div>
						</div>
					</a>
				</div>
				<div class="thank-you__sub-title">
					<?php
						switch ($lang) {
							case 'ua':
								echo "Дякуємо за пропозицію. Ми зв'яжемося з вами якомога швидше.";
								break;
							case 'en':
								echo "Thank you for the offer. We will contact you as soon as possible.";
								break;
						}
					?>	
				</div>
			</div>
		</div>
	</div>

<?php require('footer_new.php');?>