<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="<?php echo base_url(); ?>assets/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->

        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Online  <i class="fa fa-circle text-success"></i> 
          <!-- The user image in the navbar-->
          <!-- <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="user-image" alt="User Image"> -->
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          
        </a>
      <li>
        <a href="<?php echo base_url('Auth/logout'); ?>"><i class="fa fa-sign-out"></i> </a>
      </li>
      </li>
    </ul>
  </div>
</nav>