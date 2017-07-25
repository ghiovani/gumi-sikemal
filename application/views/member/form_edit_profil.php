<?php

/* Global Variables */

$candidate['page-title'] = 'Profil'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Profil'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headermember.php');

?>

<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<a href="#"> Halaman Profil</a>
		
	</section>

		<!-- Page Heading -->


		<!-- Section -->
		<section class="section full-width-bg gray-bg">

			<div class="row">
				
				<div class="col-lg-12 col-md-9 col-sm-8">

					<div class="row">
						
						<div class="col-lg-3 col-md-5 col-sm-5">
							<div class="sidebar-box image-banner animate-onscroll">
								
								<?php 
							foreach ($query as $row) {
							?>
								<a href="https://www.instagram.com/<?php echo "$row->instagram";?>" target="_blank">
								<span class="button transparent button-arrow">
								
								Profil</span>
								<img src="<?php echo base_url(); ?>assets/img/member/<?php echo "$row->foto";?>" alt="">
								<span class="button transparent button-arrow">
								<?php echo "$row->username";?></span>
								</a>
							<?php 
							}
							?>
							</div>
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
							</div>
							
						</div>

						<div class="col-lg-6 col-md-5 col-sm-5">
							<?php 
							foreach ($query as $row) {
							?>
							<form class="newsletter" action="<?php echo base_url(); ?>member/editprofil/<?php echo "$row->uid";?>" enctype="multipart/form-data" method="post">
								<blockquote class="align-center animate-onscroll">
								<h3><strong>Form Edit Profil</strong><br/></h3>
								<hr>
								
								<div class="newsletter-form">
								
									<tr class="newsletter-zip">
										<input type="text" name="username" value="<?php echo "$row->username"; ?>" required>
									</tr>
									<tr class="newsletter-zip">
										<input type="password" name="password" placeholder="Password..." required>
									</tr>
									</br></br>
									<tr >
										Biodata Diri
									</tr>
									<tr class="newsletter-zip">
										<input type="text" name="email" value="<?php echo "$row->email"; ?>" required>
									</tr>
									
									<tr class="newsletter-zip">
										<input type="text" name="nama" value="<?php echo "$row->nama"; ?>" required>
									</tr>
									<tr class="newsletter-zip">
										<input type="text" name="alamat" value="<?php echo "$row->alamat"; ?>" required>
									</tr>
									<tr class="newsletter-zip">
										<input type="text" name="notelp" value="<?php echo "$row->notelp"; ?>" required>
									</tr>
									<tr class="newsletter-zip">
										<input type="text" name="instagram" value="<?php echo "$row->instagram"; ?>" required>
									</tr>
									</br></br>
									<tr>
										Pilih Foto
									</tr>
									<tr class="newsletter-zip">
										<input type="file" name="userfile" required/>
									</tr>
									
									<tr class="newsletter-submit">
										<input type="submit" name="edit" value="Edit Profil">
									</tr>
									
							
							</div>
							
							</blockquote>
						
							</form>
							<?php
								}
							?>
						</div>



				<!-- Sidebar -->
				<div class="col-lg-3 col-md-3 col-sm-3 sidebar">

					<!-- Image Banner -->
					<!-- /Image Banner -->							


					<!-- Upcoming Events -->
					
						
					<!-- /Upcoming Events -->		
			
				</div>
				<!-- /Sidebar -->




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