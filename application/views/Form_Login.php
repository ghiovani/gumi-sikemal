<?php

/* Global Variables */

$candidate['page-title'] = 'Form Login'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Home'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
	

	<!-- Page Heading -->
	
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<a href="#"> Halaman Login</a>
		
	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-8 col-md-4 col-sm-4">
			
			
							<h1>SELAMAT DATANG</h1>

							<div class="author-info">
								<div class="author-description">
									<p>Sistem ini merupakan Project Akhir mata kuliah Rekayasa Perangkat Lunak di Fakultas Ilmu Komputer. Kelompok 1 kelas IF-C.</p>
								</div>
							</div>

			

		</div>
		
			<div class="col-lg-4 col-md-4 col-sm-4">
				<blockquote class="align-center animate-onscroll">
					<form id="align-center italic animate-onscroll" action="<?php echo base_url(); ?>Login/authentication" method="POST">
								
								<h5><strong>Punya Akun ?</strong> Silahkan Login..</h5>
								<div class="newsletter-form">
								
									<tr class="newsletter-zip">
										<input type="text" name="username" placeholder="Username...">
									</tr>
									</br></br>
									<tr class="newsletter-zip">
										<input type="password" name="password" placeholder="Password...">
									</tr>
									
									<tr class="newsletter-submit">
										<input type="submit" value="Login">
									</tr>
									
								</div>
								
							</form>

				</blockquote>
					
						
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