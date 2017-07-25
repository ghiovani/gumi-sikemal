<?php

/* Global Variables */

$candidate['page-title'] = 'Hasil Pencarian'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Home'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Hasil Pencarian</h1>
		
	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-lg-9 col-md-12 col-sm-12">
							        
						        <?php if($query == NULL) {?>
								<h2>Hasil Tidak Ditemukan</h2>
								<?php }else{ ?>
				
						         <?php foreach ($query as $row) {
								# code...
							 	?>	
		 						
									<div class="issue-block">
									<div class="col-lg-4 col-md-6 col-sm-6">
									<div class="issue-image">
										<img src="<?php echo base_url(); ?>assets/img/<?php echo "$row->gambar";?>" alt="" height="250px =">
									</div>
									</div>
									<div class="issue-content">
									
										<h2 class="judul"><a href="getIsi/<?php echo "$row->id_post";?>" target="_blank"><?php echo "$row->judul"; ?></a></h2>
										<hr>
										<p><?php echo substr($row->isi,0,100)?></p>
										<p><i class="icons icon-user"></i>Posted at <?php echo "$row->tanggal"; ?>, <?php echo "$row->jam"; ?></h2>
			                  			</p>
										
										<a class="button big button-arrow" href="<?php echo site_url('Pencarian/getIsi/'.$row->id_post);?>" target="_blank">Read More</a>
										
									</div>
									
								</div>
							
						
							<?php } }?>	
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