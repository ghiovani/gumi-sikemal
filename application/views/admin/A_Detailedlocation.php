<?php

/* Global Variables */

$candidate['page-title'] = 'Display Isi'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Lokasi Budaya' ; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headeradmin.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">
<?php foreach ($query as $row) {} ?>
		<h1><?php echo $row->nama_lokasi; ?></h1>
		<p class="breadcrumb"><i class="icons icon-user"></i>Posted by.<?php echo "$row->username"; ?></p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
		<?php foreach ($query as $row) {} ?>
				<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="issue-isi">
									<div class="issue-image">
										<iframe class="youtube-video" src="<?php echo "$row->location"; ?>" width="100" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									<hr>
									
								
						</div>
					</div>
</div>

					
				</section>
				<!-- /Section -->

			</section>



			<?php

			/* <footer> </footer> */
			include ('assets/includes/footer.php');

			/* JavaScript */
			include ('assets/includes/foot.php');

			?>