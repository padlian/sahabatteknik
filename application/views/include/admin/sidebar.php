<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
          <li>
              <a href="<?php echo base_url(); ?>admin"><i class="fa fa-dashboard" aria-hidden="true"></i><span>Dashboard</span></a>
           </li>

               <li class="treeview">
                  <a href="#">
                    <i class="fa fa-list-alt"></i></i> <span>Menu</span><i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>admin/"><i class="fa fa-circle-o text-aqua"></i>Sub Menu</a></li>
                    <li><a href="<?php echo base_url();?>admin/"><i class="fa fa-circle-o text-aqua"></i>Sub Menu</a></li>
                  </ul>
               </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>