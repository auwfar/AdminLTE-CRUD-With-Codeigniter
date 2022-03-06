<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
    <?php echo $userdata->field_nama; ?> <br>
    <?php echo $userdata->field_member_id; ?> <br>
    <?php echo $userdata->field_branch; ?> <br>
    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-3">
    
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <!-- <th style="text-align: center;">Aksi</th> -->
          <th>Date</th>
          <th>Keterangan</th>
          <th colspan="2" style="text-align: center;">Mutasi</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <tbody id="data-mutasi">

      </tbody>
    </table>
  </div>
</div>

<!--  -->

<div id="tempat-modal"></div>


<?php
$data['judul'] = 'Mutasi';
$data['url'] = 'Mutasi/import';
echo show_my_modal('modals/modal_import', 'import-mutasi', $data);
?>