<?php $title = "Studio 7Seven"; ?>

<section class="description_studio">
<div class="container text-center">
	<div class="content">
		<h2>Le studio</h2>
		<span class="text-justify"><?php echo cockpit('regions:region_field', 'Home', 'MainDescription', 'value'); ?></span>
	</div>
</div>
</section>

<section class="description_items">
	<div class="container text-center">
		<div class="content">
			<h2>Les projets</h2>
			<div class="col-md-12 elements_items">
				<a href="/web" class="box_a_link max_width-992">
					<div class="col-md-4">
						<div class="col-md-12 element_items box_size main">
							<div class="col-md-12">
								<h3><strong>Site web</strong></h3>

								<span><?php echo cockpit('regions:region_field', 'Home', 'WebDescription', 'value'); ?></span>

								<span class="fondateur"><img src="assets/icons/iconmonstr-favorite-7-red.svg" class="svg_main_menu"></span>
							</div>
							<div class="col-md-12 row box_element_bottom">
								En savoir plus
							</div>
						</div>
					</div>
				</a>
				<a href="/jeux" class="box_a_link">
					<div class="col-md-4">
						<div class="col-md-12 element_items box_size">
							<div class="col-md-12">
								<h3><strong>Jeux Video</strong></h3>
								<span><?php echo cockpit('regions:region_field', 'Home', 'JeuxDescription', 'value'); ?></span>
							</div>
							<div class="col-md-12 row box_element_bottom">
								En savoir plus
							</div>
						</div>
					</div>
				</a>
				<a href="/web" class="box_a_link min_width-992">
					<div class="col-md-4">
						<div class="col-md-12 element_items box_size main">
							<div class="col-md-12">
								<h3><strong>Site web</strong></h3>

								<span><?php echo cockpit('regions:region_field', 'Home', 'WebDescription', 'value'); ?></span>

								<span class="fondateur"><img src="assets/icons/iconmonstr-favorite-7-red.svg" class="svg_main_menu"></span>
							</div>
							<div class="col-md-12 row box_element_bottom">
								En savoir plus
							</div>
						</div>
					</div>
				</a>
				<a href="/softwares" class="box_a_link">
					<div class="col-md-4">
						<div class="col-md-12 element_items box_size">
							<div class="col-md-12">
								<h3><strong>Logiciels</strong></h3>
								<span><?php echo cockpit('regions:region_field', 'Home', 'SoftwaresDescription', 'value'); ?></span>
							</div>
							<div class="col-md-12 row box_element_bottom">
								En savoir plus
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="description_items bottom_page">
	<div class="container text-center">
		<div class="content">
			<h2>L'équipe</h2>
			 <?php $item = collection("team")->findOne(["Founder"=>true]); ?>
			<div class="col-md-12 elements_items">
				<div class="col-md-4 max_width-992">
					<div class="col-md-12 element_items main">
						<div class="col-md-12 description_element">
							<h3><strong><?php echo $item["Name"]; ?></strong><br><?php echo $item["FirstName"]; ?></h3>
							<span class="fondateur">Fondateur</span>
							<span><?php echo $item["Job"]; ?></span>
						</div>
						<div class="col-md-12 description_element">
							<img src="<?php echo substr($item["Image"], 5); ?>">
						</div>
					</div>
				</div>
				<?php $item = collection("team")->findOne(["ID"=>"2"]); ?>
				<div class="col-md-4">
					<div class="col-md-12 element_items">
						<div class="col-md-12 description_element">
							<h3><strong><?php echo $item["Name"]; ?></strong><br><?php echo $item["FirstName"]; ?></h3>
							<span><?php echo $item["Job"]; ?></span>
						</div>
						<div class="col-md-12">
							<img src="<?php echo substr($item["Image"], 5); ?>">
						</div>
					</div>
				</div>
				<?php $item = collection("team")->findOne(["Founder"=>true]); ?>
				<div class="col-md-4 min_width-992">
					<div class="col-md-12 element_items main">
						<div class="col-md-12 description_element">
							<h3><strong><?php echo $item["Name"]; ?></strong><br><?php echo $item["FirstName"]; ?></h3>
							<span class="fondateur">Fondateur</span>
							<span><?php echo $item["Job"]; ?></span>
						</div>
						<div class="col-md-12 description_element">
							<img src="<?php echo substr($item["Image"], 5); ?>">
						</div>
					</div>
				</div>
				<?php $item = collection("team")->findOne(["ID"=>"3"]); ?>
				<div class="col-md-4">
					<div class="col-md-12 element_items">
						<div class="col-md-12 description_element">
							<h3><strong><?php echo $item["Name"]; ?></strong><br><?php echo $item["FirstName"]; ?></h3>
							<span><?php echo $item["Job"]; ?></span>
						</div>
						<div class="col-md-12">
							<img src="<?php echo substr($item["Image"], 5); ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>