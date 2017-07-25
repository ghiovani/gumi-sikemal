<?php

/* Global Variables */

$candidate['page-title'] = 'Informasi Kuliner'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Informasi Kuliner'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headeradmin.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Kuliner Malang</h1>
		<p class="breadcrumb">admin/Kuliner/</p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<a href="DisplayFormTambah" class="button button-arrow">Tambah Konten</a>
							<table width="200" border="2">
							<tr>
								<th width="7.5%">Tanggal</th>
								<th width="7.5%">Pukul</th>
								<th width="50%">Judul</th>
								<!-- <th width="20%">Pilihan A</th>
								<th width="20%">Pilihan B</th> -->
								<th width="35%">Aksi</th>
							</tr>
							<?php 
							$no=1;
							foreach ($query as $row) {
								 ?>
							<tr>
								<th width="7.5%"><?php echo "$row->tanggal";?></th>
								<td width="7.5%"><?php echo "$row->jam";?></td>
								<td width="50%"><?php echo "$row->judul"; ?></td>
								<td width="35%">
								<a href="getIsi/<?php echo "$row->id_post";?>" class="button">Baca</a>
								<a href="DisplayFormUpdate/<?php echo "$row->id_post";?>" class="button">Edit</a>
								<a href="DeleteData/<?php echo "$row->id_post";?>" onclick="return confirm('Anda yakin akan menghapus Soal ini?')" class="button">Hapus</a>
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