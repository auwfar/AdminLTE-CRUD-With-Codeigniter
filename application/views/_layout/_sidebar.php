<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->field_photo; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->field_nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <!-- <li class="header">LIST MENU</li> -->
      <!-- Optionally, you can add icons to the links -->

      <!-- <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li> -->

      <li <?php if ($page == 'profile') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Profile'); ?>">
          <i class="fa fa-user"></i>
          <span>Data <?php echo $userdata->field_nama; ?></span>
        </a>
      </li>

      <!-- <li <?php if ($page == 'posisi') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Data Posisi</span>
        </a>
      </li> -->
      <!-- <li <?php if ($page == 'product') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Product'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Data Product</span>
        </a>
      </li> -->
      <li>
        <a href="<?php echo base_url('Auth/logout'); ?>">
          <i class="fa fa-sign-out"></i>
          <span>Sign Out</span>
        </a>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
