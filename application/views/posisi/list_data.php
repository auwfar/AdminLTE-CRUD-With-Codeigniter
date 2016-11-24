<?php
  $no = 1;
  foreach ($dataPosisi as $posisi) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $posisi->nama; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPosisi" data-id="<?php echo $posisi->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-posisi" data-id="<?php echo $posisi->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        <button class="btn btn-info detail-dataPosisi" data-id="<?php echo $posisi->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>