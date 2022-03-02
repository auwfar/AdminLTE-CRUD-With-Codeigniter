<?php
$no = 1;
foreach ($dataPricegold as $gold) {
?>
  <tr>
    <td><?php echo $gold->field_datetime_gold; ?></td>
    <td><?php echo $gold->field_name; ?></td>
    <td> Sell &ensp;
      <b> <?php echo 'Rp. ' . number_format($gold->field_sell, 0, ",", "."); ?></b> <br> Buyback &ensp;
      <b> <?php echo 'Rp. ' . number_format($gold->field_buyback, 0, ",", "."); ?></b>
    </td>
    <td> <b> <?php if ($gold->field_rasio == 'Naik') {
                echo '<div class="glyphicon glyphicon-arrow-up btn btn-info"> </div>'.' Rp '. number_format($gold->field_fluktuasi, 0, ",", ".");
              } elseif ($gold->field_rasio == 'Turun') {
                echo '<div class="glyphicon glyphicon-arrow-down btn btn-danger"> </div>' .' Rp '. number_format($gold->field_fluktuasi, 0, ",", ".");
              } else {
                echo '<div class="glyphicon glyphicon-align-justify btn btn-warning"></div>'.' Rp '. number_format($gold->field_fluktuasi, 0, ",", ".") ;
              }            
              ?>
      </b></td>
    <td class="text-center" style="min-width:70px;">
      <button class="btn btn-info detail-dataPricegold" data-id="<?php echo $gold->field_gold_id; ?>"><i class="glyphicon glyphicon-info-sign"></i></button>
    </td>
  </tr>
<?php
  $no++;
}
?>