<?php if ($get_2 == null): ?>


<?php $title = "Softwares"; ?>
<?php $height = "800px" ?>

<section class="description_studio bottom_page">
<div class="container text-center">
	<div class="content">
		<h2>Softwares</h2>
		<span class="text-justify"><?php echo cockpit('regions:region_field', 'Softwares', 'Description', 'value'); ?></span>
	</div>
	<div class="content">
		<?php foreach(collection("Softwares")->find() as $item): ?>
			<div class="col-md-12 col_zone">
				<div class="col-md-12">
					<div class="col-md-3">
						<img src="<?php echo substr($item["Image"], 5); ?>" class="team_contact_img contact_img">
					</div>
					<div class="col-md-9 correct_col">
						<div class="col-md-12 correct_col">
							<h3><?php echo $item["Name"]; ?></h3>
							<div class="separ"></div>
							<span class="text-justify"><?php echo $item["Description"]; ?></span>
							<div class="separ"></div>
							<span class="text-center contact_email">
								<a href="<?php echo $get_1 . "/". $item["Name"]; ?>"><?php echo $item["Status"]; ?></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
</section>

<?php else: ?>
  	<?php $item = collection("Softwares")->findOne(["Name"=>$get_2]); ?>

	<section class="band_image_background">
		<div class="band_image" style="background-image:url('<?php echo "/" . substr($item["Cover"], 5); ?>');">
	</section>

	<section class="description_studio">
	<div class="container text-center">
		<div class="content">
			<h2><?php echo $get_2; ?></h2>
			<span class="text-justify"><?php echo $item["Description"]; ?></span>
		</div>
	</div>
	</section>

	<section class="description_studio">
	<div class="container text-center">
		<div class="content">
			<h2>Description</h2>
			<div class="col-md-3 os_icons_all">
				<img src="<?php echo "/" . substr($item["Image"], 5); ?>" class="team_contact_img">
			</div>
			<div class="col-md-9">
				<span class="text-justify"><?php echo $item["FullDescription"]; ?></span>
			</div>
		</div>
	</div>
	</section>

	<section class="description_studio">
		<div class="container text-center">
			<div class="separ_2"></div>
				<?php if($item["Status"] == "Télécharger") echo '<a class="link_download" href="/' . substr($item["File"], 5) . '">'; ?>
				<?php echo "<h3>" . $item["Status"] . "<h3>"; ?>
				<?php if($item["Status"] == "Télécharger") echo '</a>'; ?>
			<div class="separ_2"></div>
		</div>
	</section>

	<section class="description_studio">
	<div class="container text-center bottom_page">
		<div class="content">
			<h2>OS</h2>
			<?php $os = explode(",", $item["OS"]); ?>
			<?php if(count($os)%2 == 1): ?>
			<div class="col-md-8 col-md-offset-2 os_icons_all">
				<div class="col-md-4">
					<?php if(!empty($os[1])) echo '<img src="/assets/icons/iconmonstr-' . $os[1] . '-os-1.svg" class="os_icons">' ; ?>
				</div>
				<div class="col-md-4">
					<?php if(!empty($os[0])) echo '<img src="/assets/icons/iconmonstr-' . $os[0] . '-os-1.svg" class="os_icons">' ; ?>
				</div>
				<div class="col-md-4">
					<?php if(!empty($os[2])) echo '<img src="/assets/icons/iconmonstr-' . $os[2] . '-os-1.svg" class="os_icons">' ; ?>
				</div>
			</div>
			<?php else: ?>
				<div class="col-md-6 col-md-offset-3 os_icons_all">
					<div class="col-md-6">
						<img src="<?php if(!empty($os[0])) echo "/assets/icons/iconmonstr-" . $os[0] . "-os-1.svg" ; ?>" class="os_icons">
					</div>
					<div class="col-md-6">
						<img src="<?php if(!empty($os[1])) echo "/assets/icons/iconmonstr-" . $os[1] . "-os-1.svg" ; ?>" class="os_icons">
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	</section>
<?php endif; ?>