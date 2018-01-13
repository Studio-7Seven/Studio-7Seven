<?php $title = "Jeux"; ?>

<section class="band_image_background">
	<div class="band_image" style="background-image:url('<?php echo substr(cockpit('regions:region_field', 'Jeux', 'Image', 'value'), 5); ?>');">
</section>


<section class="description_studio">
<div class="container text-center">
	<div class="content">
		<h2>Tales of Crysias</h2>
		<span class="text-justify"><?php echo cockpit('regions:region_field', 'Jeux', 'JeuxMainDescription', 'value'); ?></span>
	</div>
</div>
</section>

<section class="description_studio">
<div class="container text-center">
	<div class="content">
		<h2>Version 1</h2>
		<div class="col-md-12 col_zone">
			<span class="text-justify"><?php echo cockpit('regions:region_field', 'Jeux', 'V1Description', 'value'); ?>
			</span>
		</div>
		<div class="col-md-12 col_zone">
			<div class="col-md-3">
				<div class="col-md-12">
					<img src="../assets/icons/iconmonstr-server-1.svg" class="svg_illustration_box">
				</div>
				<div class="col-md-12 text_illustration_box">
					<h3 class="language_code">C#</h3>
				</div>
			</div>
			<div class="col-md-9">
				<span class="text-justify"><?php echo cockpit('regions:region_field', 'Jeux', 'V1CSharp', 'value'); ?></span>
			</div>
		</div>

		<div class="col-md-12 col_zone">
			<div class="col-md-9">
				<span class="text-justify"><?php echo cockpit('regions:region_field', 'Jeux', 'V1Cpp', 'value'); ?></span>
			</div>
			<div class="col-md-3">
				<div class="col-md-12">
					<img src="../assets/icons/iconmonstr-computer-7.svg" class="svg_illustration_box">
				</div>
				<div class="col-md-12 text_illustration_box">
					<h3 class="language_code">C++</h3>
				</div>
			</div>
		</div>
		<div class="col-md-12 text-center col_zone video_illustration">
			<iframe width="100%" height="340" src="<?php echo cockpit('regions:region_field', 'Jeux', 'LinkVideo', 'value'); ?>?autoplay=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>
</section>


<section class="description_studio">
<div class="container text-center">
	<div class="content">
		<h2>Version 2</h2>
		<span class="text-justify"><?php echo cockpit('regions:region_field', 'Jeux', 'V2Description', 'value'); ?></span>
	</div>
	<div class="content">
		<h3>Les modules serveur</h3>
		<img src="../assets/icons/iconmonstr-server-1.svg" class="svg_illustration_box">

		<div class="col-md-12 col_zone correct_col">
			<div class="col-md-3">
				<img src="../assets/icons/communication-icon.svg" class="svg_illustration_box">
			</div>
			<div class="col-md-9">
				<h4>Communication</h4>
				<span class="text-justify">
					<?php echo cockpit('regions:region_field', 'Jeux', 'V2CommunicationServer', 'value'); ?>
				</span>
			</div>
		</div>
		<div class="col-md-12 col_zone correct_col">
			<div class="col-md-3">
				<img src="../assets/icons/database-icon.svg" class="svg_illustration_box">
			</div>
			<div class="col-md-9">
				<h4>Base de données</h4>
				<span class="text-justify">
					<?php echo cockpit('regions:region_field', 'Jeux', 'V2DatabaseServer', 'value'); ?>
				</span>
			</div>
		</div>
		<div class="col-md-12 col_zone correct_col">
			<div class="col-md-3">
				<img src="../assets/icons/modele-icon.svg" class="svg_illustration_box">
			</div>
			<div class="col-md-9">
				<h4>Modèle</h4>
				<span class="text-justify">
					<?php echo cockpit('regions:region_field', 'Jeux', 'V2ModeleServer', 'value'); ?>
				</span>
			</div>
		</div>
		<span class="text-justify"><?php echo cockpit('regions:region_field', 'Jeux', 'V2ResumeServer', 'value'); ?></span>
	</div>
	<div class="content">
		<h3>Les modules client</h3>
		<img src="../assets/icons/iconmonstr-server-1.svg" class="svg_illustration_box">

		<div class="col-md-12 col_zone correct_col">
			<div class="col-md-3">
				<img src="../assets/icons/communication-icon.svg" class="svg_illustration_box">
			</div>
			<div class="col-md-9">
				<h4>Communication</h4>
				<span class="text-justify">
					<?php echo cockpit('regions:region_field', 'Jeux', 'V2CommunicationClient', 'value'); ?>
				</span>
			</div>
		</div>
		<div class="col-md-12 col_zone correct_col">
			<div class="col-md-3">
				<img src="../assets/icons/modele-icon.svg" class="svg_illustration_box">
			</div>
			<div class="col-md-9">
				<h4>Modèle</h4>
				<span class="text-justify">
					<?php echo cockpit('regions:region_field', 'Jeux', 'V2ModeleClient', 'value'); ?>
				</span>
			</div>
		</div>
		<div class="col-md-12 col_zone correct_col">
			<div class="col-md-3">
				<img src="../assets/icons/view-icon.svg" class="svg_illustration_box">
			</div>
			<div class="col-md-9">
				<h4>Vue</h4>
				<span class="text-justify">
					<?php echo cockpit('regions:region_field', 'Jeux', 'V2ViewClient', 'value'); ?>
				</span>
			</div>
		</div>
		<span class="text-justify">
			<?php echo cockpit('regions:region_field', 'Jeux', 'V2ResumeClient', 'value'); ?>
		</span>
	</div>
</div>
</section>


<section class="description_studio bottom_page">
<div class="container text-center">
	<div class="content">
		<h2>Version 3</h2>
		<div class="col-md-12 col_zone correct_col">
			<span class="text-justify"><?php echo cockpit('regions:region_field', 'Jeux', 'V3Resume', 'value'); ?>
			</span>
		</div>
	</div>
</div>
</section>