<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>
saldo
<div class="box">
  <div class="box-header">
    

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Kota</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-kota">
      
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_kota; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataKota', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Kota';
  $data['url'] = 'Kota/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>