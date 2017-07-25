<?php

/* Global Variables */

$candidate['page-title'] = 'Kalender Event'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Kalender Event'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Kalender Event</h1>
		<p class="breadcrumb"><a href="<?php echo base_url(); ?>home">Home</a> / Kalender Event</p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
						<?php foreach ($query as $row) {
								
							 ?>	
							<div class="col-lg-6 col-md-6 col-sm-12 animate-onscroll">
								
								<div class="issue-block">
									
									<div class="issue-image">
										<iframe class="youtube-video" src="<?php echo "$row->location"; ?>" width="100" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									
									<div class="issue-content">
										<h2 class="judul"><a href="getIsi/<?php echo "$row->id_event";?>" target="_blank"><?php echo "$row->judul"; ?></a></h2>
										<hr>
										<h4><i class="icons icon-calendar"></i><?php echo "$row->tanggal_event"; ?></h4>
										<h4><i class="icons icon-clock"></i><?php echo "$row->jam_event"," - Selesei"; ?></h4>
										<h4><i class="icons icon-location"></i><?php echo "$row->nama_lokasi";?><h4>
							
										<p><i class="icons icon-user"></i>Posted by.<?php echo "$row->username"; ?></a> at <?php echo "$row->tanggal"; ?>, <?php echo "$row->jam"; ?></h2>
			                  			</p>
										<a class="button big button-arrow" href="<?php echo site_url('Kalender_Event/getIsi/'.$row->id_event);?>" target="_blank">Read more</a>
									
									</div>
									
								</div>
							
							</div>
							<?php } ?>	
						
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