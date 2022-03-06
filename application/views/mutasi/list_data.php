<?php
$no = 1;
foreach ($dataMutasi as $mutasi) {
?>
  <tr>
    
    <td><?php echo  date("d M Y", strtotime($mutasi->field_tanggal_saldo)); ?></td>
    <td><?php echo $mutasi->field_no_referensi.'<br>'.$mutasi->field_member_id; ?></td>

    <td>  <?php if ($mutasi->field_type_saldo == '300') {
        echo "B";
      } elseif ($mutasi->field_type_saldo == '200') {
        echo $mutasi->field_debit_saldo;
      } elseif ($mutasi->field_type_saldo == '100') {
        echo $mutasi->field_kredit_saldo;
      }

      ?></td>
    <td>
      <?php if ($mutasi->field_type_saldo == '300') {
        echo "B";
      } elseif ($mutasi->field_type_saldo == '200') {
        echo "D";
      } elseif ($mutasi->field_type_saldo == '100') {
        echo "C";
      }

      ?>
    </td>
    <span class="btn btn-danger"></span>
    <td><?php echo $mutasi->field_total_saldo; ?></td>
    <!-- <td class="text-center" style="min-width:230px;">
    </td> -->
  </tr>
<?php
  $no++;
}
?>