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
        echo number_format($mutasi->field_debit_saldo,3);
      } elseif ($mutasi->field_type_saldo == '100') {
        echo number_format( $mutasi->field_kredit_saldo,3)." Gram"; 
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
    <td><?php echo number_format($mutasi->field_total_saldo,3); ?></td>
    <!-- <td class="text-center" style="min-width:230px;">
    </td> -->
  </tr>
<?php
  $no++;
}
?>