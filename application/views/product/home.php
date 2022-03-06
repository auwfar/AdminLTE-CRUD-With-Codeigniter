<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
      <!-- <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-posisi"><i class="glyphicon glyphicon-plus-sign"></i> add Data</button> -->
      Product
    </div>

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Price</th>
          <th style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody id="data-product">

      </tbody>
    </table>
  </div>
</div>



<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPosisi', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Product';
$data['url'] = 'Product/import';
echo show_my_modal('modals/modal_import', 'import-posisi', $data);
?>