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
	<style>
		.thank-you__content {
			padding: 100px 10px;
		}
		.thank-you__content {
			font-size: 40px;
			color: rgba(63,156,53);
		}
	</style>
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
								echo "Thank you";
								break;
						}
					?>
				</div>
			</div>
		</div>
	</div>

<?php require('footer_new.php');?>