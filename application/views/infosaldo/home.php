<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>
<div class="box">
  <div class="box-header">
    
    saldo

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="listdata" class="table table-striped">
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


<?php
  $data['judul'] = 'Kota';
  $data['url'] = 'Kota/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>