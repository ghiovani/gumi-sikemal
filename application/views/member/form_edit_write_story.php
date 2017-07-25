<?php
echo initialize_tinymce();
?>
<?php

/* Global Variables */

$candidate['page-title'] = 'write story'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'write story'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headermember.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>STORY</h1>
		<p class="breadcrumb">Member/write Story/</p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8">
		<h4>
		<div class="sidebar-box white animate-onscroll">
		<div class="newsletter-form">
<?php 		foreach ($query as $row) {} ?>
			<form action="<?php echo base_url();?>Story/updateStory/<?php echo "$row->id_story";?>" enctype="multipart/form-data" method="post">
			<div class="newsletter-zip">
			<input type="text" name="judul"  value="<?php echo "$row->judul";?>" required/>
			</div>
			<div class="newsletter-zip"><br/>
			<textarea name="content"><?php echo "$row->isi";?></textarea>
			</div>
			
			<div class="newsletter-zip">
			</br>
			<i class="icons icon-camera"></i><input type="file" name="userfile" value="<?php echo "$row->gambar";?>"/>
			</div>
			
			<div class="newsletter-submit">
			<input type="submit"  name="submit" value="SAVE" class="input"/>
			</div>
			</form>

         </div>
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