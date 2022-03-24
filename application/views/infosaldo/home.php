<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>
<div class="box">
  <div class="box-header">   

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class=" bg-white">
      <div class="inner">
        <table class="table">
          <caption>List of users saldo</caption>
          <!-- <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead> -->
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Nama Lengkap</td>
              <td>:</td>
              <td><?php echo $dataInfosaldo->field_nama_customer; ?></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Rekening</td>
              <td>:</td>
              <td><?php echo $dataInfosaldo->field_rekening; ?></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>No Id Member</td>
              <td>:</td>
              <td><?php echo $dataInfosaldo->field_member_id; ?></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Saldo</td>
              <td>:</td>
              <td><?php echo $dataInfosaldo->field_total_saldo; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>


<?php
$data['judul'] = 'Infosaldo';
$data['url'] = 'Infosaldo/import';
echo show_my_modal('modals/modal_import', 'import-infosaldo', $data);
?>