<?php
$no = 1;
foreach ($dataProduct as $product) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $product->field_product_name; ?></td>
    <td> <b> <?php echo 'Rp. ' . number_format($product->field_price, 2, ",", "."); ?></b></td>
    <td class="text-center" style="min-width:70px;">
      <button class="btn btn-info detail-dataProduct" data-id="<?php echo $product->field_product_id; ?>"><i class="glyphicon glyphicon-info-sign"></i></button>
    </td>
  </tr>
<?php
  $no++;
}
?>