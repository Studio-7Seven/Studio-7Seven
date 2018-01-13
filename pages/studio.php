<?php $title = "Studio"; ?>

<section class="description_studio">
<div class="container text-center">
	<div class="content">
		<h2>Le studio</h2>
		<span class="text-justify"><?php echo cockpit('regions:region_field', 'Studio', 'Description', 'value'); ?></span>
	</div>
</div>
</section>

<section class="description_studio bottom_page">
	<div class="container text-center">
		<div class="content">
			<h2>Les réalisations</h2>
			<span class="text-justify"><?php echo cockpit('regions:region_field', 'Studio', 'Achievements', 'value'); ?></span>
			<?php foreach(collection("Achievements")->find() as $item): ?>
				<div class="separ"></div>
				<div class="realisation">
					<h3><?php echo $item["Name"]; ?></h3>
					<span class="text-justify"><?php echo $item["Description"]; ?></span>
					<a href="<?php echo $item["Link"]; ?>" class="demo_sites">Ici</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
