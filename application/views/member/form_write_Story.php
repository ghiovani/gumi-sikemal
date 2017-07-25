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
			<form action="<?php echo base_url();?>Story/inputStory/" enctype="multipart/form-data" method="post">
			<div class="newsletter-zip">
			<input type="text" name="judul"  placeholder="Story Title" required/>
			</div>
			<div class="newsletter-zip"><br/>
			<textarea name="content"></textarea>
			</div>
			
			<div class="newsletter-zip">
			</br>
			<i class="icons icon-camera"></i><input type="file" name="userfile" />
			</div>
			
			<div class="newsletter-submit">
			<input type="submit"  name="submit" value="SAVE" class="input"/>
			</div>
			</form>

         </div>
         </div>  
         </h4>
         <?php foreach ($query as $row) {
								# code...
							 ?>	
		 						
									<div class="issue-block">
									<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="issue-image">
										<?php if($row->gambar==NULL){ ?>
										<img src="<?php echo base_url(); ?>assets/img/nopic.PNG" alt="" height="250px =">
										<?php }else{?>
										<img src="<?php echo base_url(); ?>assets/img/<?php echo "$row->gambar";?>" alt="" height="250px =">
										<?php } ?>
									</div>
									</div>
									<div class="issue-content">
									
										<h2 class="judul"><a href="getIsi/<?php echo "$row->id_story";?>" target="_blank"><?php echo "$row->judul"; ?></a></h2>
										<hr>
										<p><?php echo substr($row->isi,0,100)?></p>
										<p><i class="icons icon-user"></i>Posted at <?php echo "$row->tanggal"; ?>, <?php echo "$row->jam"; ?></h2>
			                  			</p>
										<div class="col-lg-2 col-md-6 col-sm-6">

										<a class="button big button-arrow" href="<?php echo site_url('Story/getIsi/'.$row->id_story);?>" target="_blank">Read Story</a>
										</div>
									<div class="col-lg-2 col-md-6 col-sm-6">

										<a class="button big button-arrow" href="<?php echo site_url('Story/DisplayFormEditWS/'.$row->id_story);?>">Edit Story</a>
									</div>
									
									<div class="col-lg-2 col-md-6 col-sm-6">

										<a class="button big button-arrow" href="<?php echo site_url('Story/DeleteStory/'.$row->id_story);?>" onclick="return confirm('Anda yakin akan menghapus Soal ini?')">Hapus Story</a>
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