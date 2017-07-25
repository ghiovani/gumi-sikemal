<?php

/* Global Variables */

$candidate['page-title'] = 'Hasil Pencarian'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Profil'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headeradmin.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Hasil Pencarian</h1>
		<!-- <p class="breadcrumb"><a href="<?php echo base_url(); ?>home">Home</a> / Sejarah</p> -->

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php if($query == NULL) {?>
					<h2>Hasil Tidak Ditemukan</h2>
				<?php }else{ ?>
				<table width="200" border="2">
					<tr>
						<th width="7.5%">Tanggal</th>
						<th width="7.5%">Pukul</th>
						<th width="50%">Judul</th>
						<!-- <th width="20%">Pilihan A</th>
						<th width="20%">Pilihan B</th> -->
						<th width="35%">Aksi</th>
					</tr>	
					<tr>
				
				<?php foreach ($query as $row) { ?>	
						<th width="7.5%"><?php echo "$row->tanggal";?></th>
						<td width="7.5%"><?php echo "$row->jam";?></td>
						<td width="50%"><?php echo "$row->judul"; ?></td>
						<td width="35%">
						<a href="getIsi/<?php echo "$row->id_post";?>" class="button">Baca</a>
						<a href="DisplayFormUpdate/<?php echo "$row->id_post";?>" class="button">Edit</a>
						<a href="DeleteData/<?php echo "$row->id_post";?>" onclick="return confirm('Anda yakin akan menghapus Soal ini?')" class="button">Hapus</a>
						</td>
					</tr>
					<?php } }?>	
				</table>
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