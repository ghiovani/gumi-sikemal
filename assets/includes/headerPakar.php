		
		<!-- Container -->
		<div class="container">
			<!-- Header -->
			<header id="header" class="animate-onscroll">
				
				<!-- Main Header -->
				<div id="main-header">
					<div class="container">
					<div class="row">	
						
						<!-- Logo -->
						<div id="logo" class="col-lg-3 col-md-3 col-sm-3">
							
							<a href=""><img src="<?php echo base_url()."assets/"?>img/logoAdmin.png" alt="Logo"></a>
							
						</div>
						<!-- /Logo -->
						
						
						
						<!-- Main Quote -->
						<div class="col-lg-5 col-md-4 col-sm-4">
							
							<blockquote>Sistem Pakar Untuk Mengetahui Tipe Kepribadian Enneagram <br>Menggunakan Fuzzy K-Nearest Neighbor

..</blockquote>
							
						</div>
						<!-- /Main Quote -->
						
						
						
						<!-- Newsletter -->
						<div class="col-lg-4 col-md-5 col-sm-5">
							
							<form id="newsletter" action="<?php echo base_url(); ?>C_Pakar/logout" method="POST" onclick="asdas">
								
								<h5><strong>Bukan Anda ?</strong> Silanhkan Logout</h5>
								<div class="newsletter-form">								
								<div class="newsletter-submit">
										<input type="submit" value="">
										<i class="icons icon-left-thin"></i>
									</div>
									
								</div>
								
							</form>
							
						</div>
						<!-- /Newsletter -->
						
						
						
					</div>
					
					</div>
					
				</div>
				<!-- /Main Header -->
								
				<!-- Lower Header -->
				<div id="lower-header">
					
					<div class="container">
					
					<div id="menu-button">
						<div>
						<span></span>
						<span></span>
						<span></span>
						</div>
						<span>Menu</span>
					</div>
					
					<ul id="navigation">
						
						<!-- Home -->
						<li class="home-button <?php if($candidate['current-menu-item'] == 'Dashboard') echo 'current-menu-item'; ?>">					
							<a href="<?php echo base_url()?>C_Pakar"><i class="icons icon-home"></i></a>						
						</li>
						<!-- /Home -->

						<!--  Penjelasan -->
						<li <?php if($candidate['current-menu-item'] == 'Kelola Soal') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/kelolaSoal">Kelola Soal</a>
						</li>
						<!-- /Penjelasan -->

						<!--  Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Kelola Bobot') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/kelolaBobot">Kelola Bobot</a>
						</li>
						<!-- /Macam Tipe -->

						<!--  Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Pengguna Enneagram') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/listPengguna">Lihat Pengguna</a>
						</li>
						<!-- /Macam Tipe -->

						<!--  Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Forum Pakar') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/dalamPerbaikan">Forum Pakar</a>
						</li>
						<!-- /Macam Tipe -->

					</ul>
					
					</div>
					
				</div>
				<!-- /Lower Header -->
				
				
			</header>
			<!-- /Header -->