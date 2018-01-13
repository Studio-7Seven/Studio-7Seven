<?php $title = "Contact"; ?>

<section class="description_studio">
	<div class="container text-center">
		<div class="content">
			<h2>Contact</h2>
			<span class="text-justify">
				<?php echo cockpit('regions:region_field', 'Contact', 'MainText', 'value'); ?>
			</span>
			<div class="separ"></div>
			<span class="text-center contact_email">Mail : <?php echo cockpit('regions:region_field', 'Contact', 'MainEmail', 'value'); ?></span>
			<div class="separ_last"></div>
		</div>
	</div>
</section>

<section class="description_studio bottom_page contact">
	<div class="container text-center">
		<div class="content">
			<h2>Equipe</h2>
			<span class="text-justify contact_p">
				<?php echo cockpit('regions:region_field', 'Contact', 'TeamDescription', 'value'); ?>
			</span>
		</div>
		<div class="space_bottom content_annul">
			<?php $i = 1; ?>
				<?php foreach(collection("team")->find() as $item): ?>
					<?php if($i%2==0): ?>
						<div class="col-md-12 col_zone max_width-992">
							<div class="col-md-12">
								<div class="col-md-3">
									<img src="<?php echo substr($item["Image"], 5); ?>" class="team_contact_img contact_img">
								</div>
								<div class="col-md-9">
									<div class="col-md-12">
										<h3><strong><?php echo $item["Name"]; ?></strong> <?php echo $item["FirstName"]; ?></h3>
										<div class="separ"></div>
										<span class="text-justify paragraph_justify_large"><?php echo $item["Description"]; ?></span>
										<?php if(!empty($item["Phone"])): ?>
											<div class="separ"></div>
											<span class="text-center contact_phone_number paragraph_justify_large">Téléphone : <?php echo $item["Phone"]; ?></span>
										<?php endif; ?>
										<div class="separ"></div>
										<span class="text-center contact_email paragraph_justify_large">Mail : <?php echo $item["Email"]; ?></span>
										<div class="separ"></div>
										<span class="text-center contact_cv paragraph_justify_large"><a href="<?php echo substr($item["Resume"], 5); ?>">Curriculum Vitae</a></span>
										<div class="separ"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col_zone min_width-992">
							<div class="col-md-12">
								<div class="col-md-9">
									<div class="col-md-12">
										<h3><strong><?php echo $item["Name"]; ?></strong> <?php echo $item["FirstName"]; ?></h3>
										<div class="separ"></div>
										<span class="text-justify paragraph_justify_large"><?php echo $item["Description"]; ?></span>
										<?php if(!empty($item["Phone"])): ?>
											<div class="separ"></div>
											<span class="text-center contact_phone_number paragraph_justify_large">Téléphone : <?php echo $item["Phone"]; ?></span>
										<?php endif; ?>
										<div class="separ"></div>
										<span class="text-center contact_email paragraph_justify_large">Mail : <?php echo $item["Email"]; ?></span>
										<div class="separ"></div>
										<span class="text-center contact_cv paragraph_justify_large"><a href="<?php echo substr($item["Resume"], 5); ?>">Curriculum Vitae</a></span>
										<div class="separ"></div>
									</div>
								</div>
								<div class="col-md-3">
									<img src="<?php echo substr($item["Image"], 5); ?>" class="team_contact_img contact_img">
								</div>
							</div>
						</div>
					<?php else:?>
						<div class="col-md-12 col_zone">
							<div class="col-md-12">
								<div class="col-md-3">
									<img src="<?php echo substr($item["Image"], 5); ?>" class="team_contact_img contact_img">
								</div>
								<div class="col-md-9">
									<div class="col-md-12">
										<h3><strong><?php echo $item["Name"]; ?></strong> <?php echo $item["FirstName"]; ?></h3>
										<div class="separ"></div>
										<span class="text-justify paragraph_justify_large"><?php echo $item["Description"]; ?></span>
										<?php if(!empty($item["Phone"])): ?>
											<div class="separ"></div>
											<span class="text-center contact_phone_number paragraph_justify_large">Téléphone : <?php echo $item["Phone"]; ?></span>
										<?php endif; ?>
										<div class="separ"></div>
										<span class="text-center contact_email paragraph_justify_large">Mail : <?php echo $item["Email"]; ?></span>
										<div class="separ"></div>
										<span class="text-center contact_cv paragraph_justify_large"><a href="<?php echo substr($item["Resume"], 5); ?>">Curriculum Vitae</a></span>
										<div class="separ"></div>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php $i++; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>