<?php

/* Global Variables */

$candidate['page-title'] = 'Display Isi'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Profil' ; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headeradmin.php');

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
								<div align="left"><img style="height:25%; width:25%;" src="<?php echo base_url(); ?>assets/img/<?php echo "$row->gambar";?>" alt="" ></div>
								<p class="animate-onscroll" text-align="justify"><?php echo $row->isi; ?></p>
				</div>
				<div class="issue-block">
					
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