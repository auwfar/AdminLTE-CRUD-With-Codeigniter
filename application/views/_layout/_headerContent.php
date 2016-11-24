<section class="content-header">
	<h1>
	  Halaman <?php echo @$judul; ?>
	  <small><?php echo @$deskripsi; ?></small>
	</h1>
	<ol class="breadcrumb">
	  <?php
	  	for ($i=0; $i<count($this->session->flashdata('segment')); $i++) { 
	  		if ($i == 0) {
	  		?>
				<li><i class="fa fa-dashboard"></i> <?php echo $this->session->flashdata('segment')[$i]; ?></li>
	  		<?php
	  		} elseif ($i == (count($this->session->flashdata('segment'))-1)) {
  			?>
				<li class="active"> <?php echo $this->session->flashdata('segment')[$i]; ?> </li>
	  		<?php
	  		} else {
  			?>
				<li> <?php echo $this->session->flashdata('segment')[$i]; ?> </li>
	  		<?php
	  		}

	  		if ($i == 0 && $i == (count($this->session->flashdata('segment'))-1)) {
	  		?>
				<li class="active"> Here </li>
	  		<?php
	  		}
	  	}
	  ?>
	</ol>
</section>