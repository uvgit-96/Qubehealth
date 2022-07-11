<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <div class="brand-link logo-switch" style="background-color: #fff;">
      <a href="<?= base_url(); ?>" class="">
      <span class="brand-image-xl logo-xs"><img src="https://adminlte.io/docs/3.0/assets/img/logo-xs.png" alt="AdminLTE Docs Logo Small" class=""> </span>
      <span class="brand-image-xs logo-xl img-block"><img style="width: 100%" src="<?= base_url($this->general_settings['logo']); ?>" alt="Edu erp logoe" class=""></span>
      </a>
   </div>
   <!-- Sidebar -->
   <div class="sidebar" style="background: #3C454D;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="<?= base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block"><?= ucwords($this->session->userdata('username')); ?></a>
         </div>
      </div>
      <?php  if($this->session->has_userdata('is_admin_login')){?>
      <nav class="mt-2">
         <!-- nav-legacy {Externallly added} -->
         <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <!--  <li class="nav-item menu-open1">
               <a href="#" class="nav-link active1">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('app/dashboard'); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                     </a>
                  </li>
               </ul>
            </li> -->
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                  <p>
                     Users
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('users'); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Users Manage</p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
         <?php } ?>
         <?php if($this->session->has_userdata('is_user_login')){ ?>
         <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-file" aria-hidden="true"></i>
                  <p>
                     Documents
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('documents'); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Documents Manage</p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
         <?php } ?>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>