<section class="content-header">
	<?php
	if ($judul != "Beranda") {
		# code...
	} else {

		# code...
	?>
		<h1>
			<center>
				<strong>"Selamat Datang"</strong> <br><?php echo $userdata->field_nama; ?>
			</center>
		</h1>
	<?php

	}


	?>
	<?php

	if ($judul != "Beranda") {
		# code...
	?>


		<a href="<?php echo base_url('Home'); ?>">
			<button type="submit" class="btn btn-danger">Back</button></a>

	<?php
	} else {
		# code...
	}


	?>
</section>