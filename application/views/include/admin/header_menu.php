
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>M</b>A</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>My</b> App</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">

      <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="https://via.placeholder.com/150" class="user-image" alt="User Image">
                  <span class="hidden-xs">
                    Username
                  </span>
                </a>
                  <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                      <img src="https://via.placeholder.com/150" class="img-circle" alt="User Image">
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                   <li class="user-footer">
                    <div class="pull-left">

                      <a href="<?php echo base_url().@$profile_link; ?>" class="btn btn-default btn-flat">Profile</a>
                     </div>

                    <div class="pull-right">
                      <a href="<?php echo base_url().@$logout; ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
      </ul>
    </div>

  </nav>
</header>