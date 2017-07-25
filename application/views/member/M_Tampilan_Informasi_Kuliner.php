<?php

/* Global Variables */

$candidate['page-title'] = 'Informasi Kuliner'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Informasi Kuliner'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headermember.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Kuliner Malang</h1>
		<p class="breadcrumb">Member/Kuliner/</p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="row">
						<?php foreach ($query as $row) {
								# code...
							 ?>	
							<div class="col-lg-4 col-md-4 col-sm-12 animate-onscroll">
								
								<div class="issue-block">
									
									<!-- <div class="issue-image">
										<img src="<?php echo base_url().$t->gambar?>" alt="">
									</div>
									 -->
									<div class="issue-image" style="height:100%;">
										<?php if($row->gambar==NULL){ ?>
										<img src="<?php echo base_url(); ?>assets/img/nopic.PNG" alt="" height="250px =">
										<?php }else{?>
										<img src="<?php echo base_url(); ?>assets/img/<?php echo "$row->gambar";?>" alt="" height="250px =">
										<?php } ?>
						
									</div>
									
									<div class="issue-content">
									
										<h2 class="judul"><a href="getIsi/<?php echo "$row->id_post";?>" target="_blank"><?php echo "$row->judul"; ?></a></h2>
										<p><?php echo substr($row->isi,0,100)?></p>
										<p><i class="icons icon-user"></i>Posted by.<?php echo "$row->username"; ?></a> at <?php echo "$row->tanggal"; ?>, <?php echo "$row->jam"; ?></h2>
			                  			</p>
										<a class="button big button-arrow" href="<?php echo site_url('Informasi_Kuliner/getIsi/'.$row->id_post);?>" target="_blank">Read more</a>
									
									</div>
									
								</div>
							
							</div>
							<?php } ?>	
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