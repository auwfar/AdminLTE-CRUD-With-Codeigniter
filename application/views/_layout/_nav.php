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
          
        </a>
      <li>
        <a href="<?php echo base_url('Auth/logout'); ?>"><i class="fa fa-sign-out"></i> </a>
      </li>
      </li>
    </ul>
  </div>
</nav>