<?php

/* Global Variables */

$candidate['page-title'] = 'Lokasi Budaya'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Lokasi Budaya'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Lokasi Budaya</h1>
		<p class="breadcrumb"><a href="<?php echo base_url(); ?>home">Home</a> / Lokasi Budaya</p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9">
							<?php 
								foreach ($query as $row) {
							?>
							<!-- <tr><a href="getIsi/<?php echo "$row->judul";?>">
								<?php echo "$row->judul"; ?>
								</a>
							<tr><td width=""><?php echo "$row->tanggal"; ?></td>
								<td width=""><?php echo "$row->jam"; ?></td>
							</tr> -->
							 <div class="sidebar-box white animate-onscroll">
			                  <tr><td>
			                  <h2><i class="icons icon-location"></i><?php echo "$row->nama_lokasi";?><h2>
							
			                  </td>
			                  </tr>
			                  <hr>
			                  <!-- <tr>	<td>
			                  		<h2><img class="portofolio"width="949" height="" alt=""src="<?php echo $h['image']; ?>" style="float: center; margin-right: 0px">
			                  		</td>
			                  </tr>
			                   --><tr><td>
			                   <iframe class="youtube-video" src="<?php echo "$row->location"; ?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			                  </td></tr>
			                  </div>
							<?php
								}
					 		?>	
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