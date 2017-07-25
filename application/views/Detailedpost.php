<?php

/* Global Variables */

$candidate['page-title'] = 'Display Isi'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Home' ; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">
<?php foreach ($query as $row) {} ?>
		<h1><?php echo $row->judul; ?></h1>
		<p class="breadcrumb"><i class="icons icon-user"></i>Posted by.<?php echo "$row->username"; ?></a> at <?php echo "$row->tanggal"; ?>, <?php echo "$row->jam"; ?></p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
		<?php foreach ($query as $row) {} ?>
			<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="issue-isi">		
								<!-- <div align="center"><img style="height:540px; width:480px;" src="<?php echo base_url().$d->gambar?>" alt="" ></div> -->
								<?php if($row->gambar==NULL){
					echo "";
				} else{?>
					<div align="left"><img style="height:50%; width:100%;" src="<?php echo base_url(); ?>assets/img/<?php echo "$row->gambar";?>" alt="" ></div>
				<?php } ?>
								<p class="animate-onscroll" text-align="justify"><?php echo $row->isi; ?></p>
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