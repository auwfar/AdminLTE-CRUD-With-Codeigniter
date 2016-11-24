<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Pegawai</h3>

  <form id="form-tambah-pegawai" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-phone-alt"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-home"></i>
      </span>
      <select name="kota" class="form-control select2" aria-describedby="sizing-addon2">
        <?php
        foreach ($dataKota as $kota) {
          ?>
          <option value="<?php echo $kota->id; ?>">
            <?php echo $kota->nama; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="input-group form-group" style="display: inline-block;">
      <span class="input-group-addon" id="sizing-addon2">
      <i class="glyphicon glyphicon-tag"></i>
      </span>
      <span class="input-group-addon">
          <input type="radio" name="jk" value="1" id="laki" class="minimal">
      <label for="laki">Laki-laki</label>
        </span>
        <span class="input-group-addon">
          <input type="radio" name="jk" value="2" id="perempuan" class="minimal"> 
      <label for="perempuan">Perempuan</label>
        </span>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-briefcase"></i>
      </span>
      <select name="posisi" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
        <?php
        foreach ($dataPosisi as $posisi) {
          ?>
          <option value="<?php echo $posisi->id; ?>">
            <?php echo $posisi->nama; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>


<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>