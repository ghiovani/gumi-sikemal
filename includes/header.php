		
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
							
							<a href=""><img src="<?php echo base_url()."assets/"?>img/logoz.png" alt="Logo"></a>
							
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
							
							<form id="newsletter" action="<?php echo base_url(); ?>C_Pakar" method="POST">
								
								<h5><strong>Anda Pakar ?</strong> Silanhkan Login..</h5>
								<div class="newsletter-form">
								
									<div class="newsletter-zip">
										<input type="text" name="username" placeholder="Username...">
									</div>
									
									<div class="newsletter-zip">
										<input type="password" name="password" placeholder="Password...">
									</div>
									
									<div class="newsletter-submit">
										<input type="submit" value="">
										<i class="icons icon-right-thin"></i>
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
						<li class="home-button <?php if($candidate['current-menu-item'] == 'Home') echo 'current-menu-item'; ?>">					
							<a href="<?php echo base_url()?>C_main/home"><i class="icons icon-home"></i></a>						
						</li>
						<!-- /Home -->

						<!--  Penjelasan -->
						<li <?php if($candidate['current-menu-item'] == 'Introduction') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/introduction">Pengenalan</a>
						</li>
						<!-- /Penjelasan -->

						<!--  Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Macam Tipe') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/macamTipe">Macam Tipe</a>
						</li>
						<!-- /Macam Tipe -->

						<!--  Macam Insting -->
						<li <?php if($candidate['current-menu-item'] == 'Macam Insting') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/macamInsting">Macam Insting</a>
						</li>
						<!-- /Macam Insting -->

						<!--  System Work -->
						<li <?php if($candidate['current-menu-item'] == 'System Work') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/systemWork">Cara Kerja Sistem</a>
						</li>
						<!-- /System Work -->

						<!--  Misidentifikasi -->
						<li <?php if($candidate['current-menu-item'] == 'Misidentification') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/misidentification">Misidentifikasi</a>
						</li>
						<!-- /Misidentifikasi -->	

						<!--  Hubungan Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Hubungan Tipe') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/hubunganTipe">Hubungan Tipe</a>
						</li>
						<!-- /Hubungan Tipe -->

						<!--  Hubungan Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Team') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/team">Team</a>
						</li>
						<!-- /System Work -->					

						<!-- Donate -->
						<li class="donate-button <?php if($candidate['current-menu-item'] == 'Mulai Test') echo 'current-menu-item'; ?>">
							<a href="<?php echo base_url()?>C_main/preTest">Mulai Test</a>
						</li>
						<!-- /Donate -->
						
					</ul>
					
					</div>
					
				</div>
				<!-- /Lower Header -->
				
				
			</header>
			<!-- /Header -->