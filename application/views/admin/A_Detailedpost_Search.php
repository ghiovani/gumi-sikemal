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
		<h1><a href="<?php echo base_url(); ?>Pencarian/getIsi/<?php echo "$row->id_post";?>"><?php echo $row->judul; ?></a></h1>
		<p class="breadcrumb"><i class="icons icon-user"></i>Posted by.<?php echo "$row->username"; ?></a> at <?php echo "$row->tanggal"; ?>, <?php echo "$row->jam"; ?></p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">

			<?php foreach ($query as $row) {} ?>
		
			<div class="col-lg-9 col-md-12 col-sm-12">
				<div class="issue-isi">		
					<?php if($row->gambar==NULL){
					echo "";
				} else{?>
					<div align="left"><img style="height:50%; width:100%;" src="<?php echo base_url(); ?>assets/img/<?php echo "$row->gambar";?>" alt="" ></div>
				<?php } ?>
					<p class="animate-onscroll" text-align="justify"><?php echo $row->isi; ?></p>
				</div>
				<div class="issue-isi">
					<p><i class ="icons icon-user"></i>Posted by. <a href="https://www.instagram.com/<?php echo "$row->instagram";?>"><?php echo "$row->username"; ?></a> at <?php echo "$row->tanggal"; ?>, <?php echo "$row->jam"; ?></p>
				</div> 
 <!-- komentar -->
 				
				<div class="issue-isi">
                  	<form method="post" action="<?php echo base_url(); ?>Pencarian/SubmitKomentar/<?php echo "$row->id_post";?>">
                    <textarea type="text" class="newsletter-form" placeholder="what's on your mind" name="komentar" /> </textarea>
                    <input type="submit" class="button button-arrow" value="komentar" />
                  	</form>
				</div>
 				<div class="issue-isi">
                	<?php foreach ($komentar as $k) {
                	?>
	            	<p><strong><a href="https://www.instagram.com/<?php echo "$k->instagram";?>"><i class ="icons icon-user"></i><?php echo "$k->username"; ?></a>'s:</strong><?php echo "$k->isi_komentar"; ?></p>
	            	<!-- <p>at <?php echo "$k->tanggal"; ?>, <?php echo "$k->jam"; ?></p> -->
                  	<hr>
                  	<?php } ?>
                </div> 

				<!-- <div class="issue-isi">
                	<a href="<?php echo base_url(); ?>Informasi_Bersejarah/lihatKomentar/<?php echo "$row->id_post";?>"><i>lihat semua komentar</i></a>
                </div>
				 -->  
                
					

			</div></div>

				</section>
				<!-- /Section -->

			</section>



			<?php

			/* <footer> </footer> */
			include ('assets/includes/footer.php');

			/* JavaScript */
			include ('assets/includes/foot.php');

			?>