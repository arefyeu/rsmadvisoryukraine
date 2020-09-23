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
			padding: 200px 10px;
			text-align: center;
		}
		.bird-container {
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.bird__circle {
			width: 100px;
			height: 100px;
			background: rgba(255,255,255,1);
			border-radius: 50%;
			display: flex; align-items: center;
			justify-content: center;
			padding-bottom: 10px;
			transition: 0.5s;
		}
		.bird__circle::before {
			width: 102px;
			height: 0px;
			position: absolute;
			content: '';
			display: block;
			background: rgba(13,106,3);
			top: -1px;
			left: -1px;
			transition: 0.5s;
		}
		.bird__circle:hover {
			background-color: rgba(63,156,53,1);
		}
		.bird__circle:hover:before {
			height: 102px;
		}
		.bird {
			height: 20px;
			width: 40px;
			border: 6px solid rgba(63,156,53,1);
			border-right: none;
			border-top: none;
			transform: rotate(-45deg);
			transition: 0.5s;
		}
		.bird__circle:hover .bird {
			border-color: rgba(255,255,255,1);
		}
		.thank-you__title {
			font-size: 60px;
			color: rgba(63,156,53);
			padding: 20px;
		}
		.thank-you__sub-title {
			font-size: 20px;
			padding: 20px;
			color: rgba(99,102,106);
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
								echo "Thank you!";
								break;
						}
					?>
				</div>
				<div class="bird-container">
					<div class="bird__circle">
						<div class="bird">
							
						</div>
					</div>
				</div>
				<div class="thank-you__sub-title">
					Thank you for the offer. We will contact you as soon as possible.
				</div>
			</div>
		</div>
	</div>

<?php require('footer_new.php');?>