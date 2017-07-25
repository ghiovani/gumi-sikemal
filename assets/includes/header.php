		
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
							
							<a href=""><img src="<?php echo base_url()."assets/"?>img/logo.png" alt="Logo" style="height:40px;margin-bottom:7px;">
							</a>
							
						</div>

						<!-- /Logo -->
						
						
						
						<!-- Main Quote -->
						<!-- <div class="col-lg-6 col-md-4 col-sm-4">
						<BLOCKQUOTE>SISTEM INFORMASI KEBUDAYAAN MALANG</BLOCKQUOTE>
						</div>
						 -->
						<div class="col-lg-6 col-md-3 col-sm-3">
							<div class="demo-4 search" style="margin-bottom:7px;">
							
								<form action="<?php echo base_url();?>Pencarian/Cari" method="post">
							
                    			
                    			<input type="search" id="search" name="keyword" placeholder="Search..." required/>
                    			<button class="icon"><i class="icons icon-search"></i></button>
                				<!-- <span class="icon"><i class="icons icon-search"></i></span> -->
                				</form>
            				</div>
							
						</div>
						<!-- <div class="col-lg-5 col-md-4 col-sm-4">
						<BLOCKQUOTE>SISTEM INFORMASI KEBUDAYAAN MALANG</BLOCKQUOTE>
						</div> -->
						<!-- /Main Quote -->
						
						
						
						<!-- Newsletter -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							
							<a href="<?php echo base_url();?>Login/DisplayFormLogin" class="btn" style="margin-bottom:7px;">Login</a>
																				
							<a href="<?php echo base_url();?>Registrasi/DisplayFormRegistrasi" class="btn" style="margin-bottom:7px;">Registrasi</a>
							
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
							<a href="<?php echo base_url()?>home"><i class="icons icon-home"></i></a>						
						</li>
						<!-- /Home -->

						<!--  Penjelasan -->
						<li <?php if($candidate['current-menu-item'] == 'Informasi Tarian') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>Informasi_Tarian/getListJudul">Tarian</a>
						</li>
						<!-- /Penjelasan -->

						<!--  Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Informasi Kuliner') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>Informasi_Kuliner/getListJudul">Kuliner</a>
						</li>
						<!-- /Macam Tipe -->

						
						<!--  System Work -->
						<li <?php if($candidate['current-menu-item'] == 'Informasi Sejarah') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>Informasi_Bersejarah/getListJudul">Sejarah</a>
						</li>
						<!-- /System Work -->

						<!--  Misidentifikasi -->
						<li <?php if($candidate['current-menu-item'] == 'Kalender Event') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>Kalender_Event/getListJudul">Kalender Event</a>
						</li>
						<!-- /Misidentifikasi -->	

						
						<!--  Hubungan Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Lokasi Budaya') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>Lokasi_Budaya/getListLokasi">Lokasi Budaya</a>
						</li>
						<!-- /System Work -->					

						<!-- Donate -->
						<!-- /Donate -->
						
					</ul>
					
					</div>
					
				</div>
				<!-- /Lower Header -->
				
				
			</header>
			<!-- /Header -->