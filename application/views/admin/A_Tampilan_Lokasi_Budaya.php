<?php

/* Global Variables */

$candidate['page-title'] = 'Lokasi Budaya'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Lokasi Budaya'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headeradmin.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Lokasi Budaya </h1>
		<p class="breadcrumb">admin/Lokasi Budaya/</p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<a href="DisplayFormTambah" class="button button-arrow">Tambah Konten</a>
							<table width="200" border="2">
							<tr>
								<th width="7.5%">No.</th>
								<th width="50%">Nama Lokasi</th>
								<!-- <th width="20%">Pilihan A</th>
								<th width="20%">Pilihan B</th> -->
								<th width="35%">Aksi</th>
							</tr>
							<?php 
							$no=1;
							foreach ($query as $row) {
								 ?>
							<tr>
								<th width="7.5%"><?php echo $no;?></th>
								<td width="50%"><?php echo "$row->nama_lokasi"; ?></td>
								<td width="35%">
								<a href="getIsi/<?php echo "$row->id_loc";?>" class="button">Baca</a>
								<a href="DisplayFormUpdate/<?php echo "$row->id_loc";?>" class="button">Edit</a>
								<a href="DeleteData/<?php echo "$row->id_loc";?>" onclick="return confirm('Anda yakin akan menghapus Soal ini?')" class="button">Hapus</a>
								</td>
							</tr>
							<?php
							$no++;
						}
					 ?>
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