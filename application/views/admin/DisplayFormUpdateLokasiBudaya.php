<?php
echo initialize_tinymce();
?>
<?php

/* Global Variables */

$candidate['page-title'] = 'Lokasi Budaya'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Lokasi Budaya'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headeradmin.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">
<?php foreach ($query as $row) {} ?>
		<h1>Lokasi Budaya</h1>
		<p class="breadcrumb">admin/Lokasi Budaya/<?php echo "$row->nama_lokasi"; ?></p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
				<!-- <a href="DisplayFormTambah" class="button button-arrow">Tambah Konten</a> -->
		<div class="row">
		<div class="col-lg-8 col-md-12 col-sm-12">
		<h4>
		<div class="sidebar-box white animate-onscroll">
			<form action="<?php echo base_url(); ?>Lokasi_Budaya/updateLokasiBudaya/<?php echo "$row->id_loc";?>" method="post">
			<div class="newsletter-zip">
			<input type="text" name="nama_lokasi"  value="<?php echo "$row->nama_lokasi"; ?>" required/>
			</div>
			<div class="newsletter-zip">
			<br><p>copy paste link embed lokasi di google map<p><br/>
			<input type="text" name="location"  value="<?php echo "$row->location"; ?>" required/>
			</div>
			
			<div class="newsletter-zip">
			</br>
			<!-- <i class="icons icon-camera"></i><input type="file" name="userfile"/> -->
			</div>
			
			<div class="newsletter-submit">
			<input type="submit"  name="submit" value="SAVE" class="input"/>
			</div>
			</form>

         </div>  
         </h4>
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