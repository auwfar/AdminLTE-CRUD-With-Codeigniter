<!DOCTYPE html>
<html>

<head>
  <title>Menu</title>
  <!-- meta -->
  
  <?php echo @$_meta; ?>

  <!-- css -->
  <?php echo @$_css; ?>

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#provinsi").change(function() {
        var url = "<?php echo site_url('profile/add_ajax_kab'); ?>/" + $(this).val();
        $('#kabupaten').load(url);
        return false;
      })

      $("#kabupaten").change(function() {
        var url = "<?php echo site_url('profile/add_ajax_kec'); ?>/" + $(this).val();
        $('#kecamatan').load(url);
        return false;
      })

      $("#kecamatan").change(function() {
        var url = "<?php echo site_url('profile/add_ajax_des'); ?>/" + $(this).val();
        $('#desa').load(url);
        return false;
      })
    });
  </script>
</head>

<!-- <body class="hold-transition skin-blue sidebar-mini"> -->

<body class="skin-blue sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <!-- header -->
    <?php echo @$_header; ?>
    <!-- nav -->

    <!-- sidebar -->
    <?php echo @$_sidebar; ?>

    <!-- content -->
    <?php echo @$_content; ?>
    <!-- headerContent -->
    <!-- mainContent -->

    <!-- footer -->
    <?php echo @$_footer; ?>

    <div class="control-sidebar-bg"></div>
  </div>

  <!-- js -->
  <?php echo @$_js; ?>
</body>

</html>