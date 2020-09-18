<?php
	require('head.php');
?>
	<title>
		<?php
			$publication_title = $_GET['title'];
			$current_publication = get_publication_by_title(str_replace('-', ' ', $publication_title));
			switch ($lang) {
				case 'ua':
					echo "Блог РСМ Україна - ".$current_publication['title'.'_'.$lang];
					break;
				case 'en':
					echo "RSM Ukraine Blog - ".$current_publication['title'.'_'.$lang];
					break;
			}
		?>
	</title>
	<?php 
		require('header_new.php');
		$expert = get_expert_by_id($current_publication['expert_id']);
	?>
	<div class = "content__container">
		<div class="container">
			<div class="publication__publication-content">
				<div class="publication_info">
					<?php if ($expert['first_name_en'].' '.$expert['last_name_en'] != "RSM Global") { ?>
						<a href = "/expert-page/<?php echo $expert['first_name_en']."-".$expert['last_name_en']; add_lang_reference($lang)?>">
					<?php } ?>
							<img src="/<?php echo($expert['image_reference'])?>" class = "publication_expert_photo">
					<?php if ($expert['first_name_en'].' '.$expert['last_name_en'] != "RSM Global") { ?>
						</a>
					<?php } ?>
					<div class="publication_expert_info">
						<div class="publication_expert_name">
						<?php if ($expert['first_name_en'].' '.$expert['last_name_en'] != "RSM Global") { ?>
							<a href = "/expert-page/<?php echo $expert['first_name_en']."-".$expert['last_name_en']; add_lang_reference($lang)?>">
						<?php } ?>
								<?php echo $expert['first_name'.'_'.$lang]." ".$expert['last_name'.'_'.$lang]; ?>
						<?php if ($expert['first_name_en'].' '.$expert['last_name_en'] != "RSM Global") { ?>
							</a>
						<?php } ?>
						</div>
						<div class="publication_date">
							<?php echo $current_publication['date']; ?>
						</div>
					</div>
				</div>
				<div class="publication_title">
					<h1 class="publication__h1">
						<?php echo $current_publication['title'.'_'.$lang]?>
					</h1>
				</div>
				<div class="publication_text">
					<?php echo $current_publication['text'.'_'.$lang];?>
				</div>
			<div class="publication__publication-contnet">
		</div>
	</div>
</div>
	<?php require('footer_new.php');?>