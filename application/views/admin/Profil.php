<?php

/* Global Variables */

$candidate['page-title'] = 'Profil'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Profil'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headeradmin.php');

?>

<section id="content">	

	<!-- Page Heading -->
		<!-- Page Heading -->


		<!-- Section -->
		<section class="section page-heading animate-onscroll">

			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">

					<div class="row">
						
						<div class="col-lg-4 col-md-4 col-sm-4" style="height:350px">
							
							<div class="sidebar-box image-banner animate-onscroll">
							<?php 
							foreach ($query as $row) {
							?>
								<a href="https://www.instagram.com/<?php echo "$row->instagram";?>" target="_blank">
								<img style="height:85%;width:85%;" src="<?php echo base_url(); ?>assets/img/admin/<?php echo "$row->foto";?>" alt=""></br>
								<h3><?php echo "$row->username";?></h3>
								</a>
							<?php 
							}
							?>
							</div>
						</div>
						<div class="col-lg-8 col-md-4 col-sm-4" style="height:350px">

							<div class="sidebar-box white animate-onscroll">
								<h3><strong>Information</strong><br/>
								<hr>
							<?php 
							foreach ($query as $row) {
							?>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td><?php echo "$row->nama"; ?></td>
								
								</tr></br>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td><?php echo "$row->email"; ?></td>
								</tr></br>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><?php echo "$row->alamat"; ?></td>	
								</tr></br>
								<tr>
									<td>No. Telepon</td>
									<td>:</td>		
									<td><?php echo "$row->notelp"; ?></td>
								</tr></br>
								<tr>
									<td>Instagram</td>
									<td>:</td>			
									<td><?php echo "$row->instagram"; ?></td>
								</tr></br>
							<?php 
							}
							?>
								</h3>
							
								<hr>
								<tr >
							<!-- 
							<?php 
								foreach ($query as $row) {
							?>
							<a class="btn" href="<?php echo base_url(); ?>admin/DisplayformEditProfil/<?php echo "$row->uid";?>">Edit Profil</a>
							<?php 
							}
							?>
							
							 -->	</tr>
							</div>
							</div></div></div></div></section>
	<section class="section full-width-bg gray-bg">

			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">


							
						<div class="col-lg-4 col-md-8 col-sm-8">
						<hr>
						
						<a class="button button-arrow" href="<?php echo base_url(); ?>Informasi_Tarian/DisplayListJudul">Tarian Malang</a>
						<?php 
						foreach ($tarian as $t) {
						?>
								<div class="issue-block">
									<div class="issue-content">
									
										<h2 class="judul"><a href="<?php echo base_url(); ?>Informasi_Tarian/getIsi/<?php echo "$t->id_post";?>" target="_blank"><?php echo "$t->judul"; ?></a></h2>
										<hr>
										<!-- <p><?php echo substr($t->isi,0,100)?></p> -->
										<p><i class="icons icon-user"></i>Posted at <?php echo "$t->tanggal"; ?>, <?php echo "$t->jam"; ?></h2>
			                  			</p>
										
									</div>
									
								</div>	

						<?php 
						}
						?>
							
					

						</div>
					<div class="col-lg-4 col-md-8 col-sm-8">
						<hr>
						
						<a class="button button-arrow" href="<?php echo base_url(); ?>Informasi_Kuliner/DisplayListJudul">Kuliner Malang</a>
						<?php 
						foreach ($kuliner as $k) {
						?>
								<div class="issue-block">
									<div class="issue-content">
									
										<h2 class="judul"><a href="<?php echo base_url(); ?>Informasi_Kuliner/getIsi/<?php echo "$k->id_post";?>" target="_blank"><?php echo "$k->judul"; ?></a></h2>
										<hr>
										<!-- <p><?php echo substr($k->isi,0,100)?></p> -->
										<p><i class="icons icon-user"></i>Posted at <?php echo "$k->tanggal"; ?>, <?php echo "$k->jam"; ?></h2>
			                  			</p>
										
									</div>
									
								</div>	

						<?php 
						}
						?>
							
					

						</div>
						<div class="col-lg-4 col-md-8 col-sm-8">
						<hr>
						
						<a class="button button-arrow" href="<?php echo base_url(); ?>Informasi_Bersejarah/DisplayListJudul">Sejarah Malang</a>
						<?php 
						foreach ($sejarah as $s) {
						?>
								<div class="issue-block">
									<div class="issue-content">
									
										<h2 class="judul"><a href="<?php echo base_url(); ?>Informasi_Bersejarah/getIsi/<?php echo "$s->id_post";?>" target="_blank"><?php echo "$s->judul"; ?></a></h2>
										<hr>
										<!-- <p><?php echo substr($s->isi,0,100)?></p> -->
										<p><i class="icons icon-user"></i>Posted at <?php echo "$s->tanggal"; ?>, <?php echo "$s->jam"; ?></h2>
			                  			</p>
										
									</div>
									
								</div>	

						<?php 
						}
						?>
							
					

						</div>
				<!-- /Sidebar -->


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