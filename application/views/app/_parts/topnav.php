<?php if(!isset($topnav)): ?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
         <a class="nav-link" data-widget="navbar-search" href="#" role="button">
         <i class="fas fa-search"></i>
         </a>
         <div class="navbar-search-block">
            <form class="form-inline">
               <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                     <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                     </button>
                     <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                     <i class="fas fa-times"></i>
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-widget="fullscreen" href="#" role="button">
         <i class="fas fa-expand-arrows-alt"></i>
         </a>
      </li>
      <!-- User profile Dropdown Menu -->
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
         <img src="<?= base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="user-image" class="rounded-circle">
         <span class="d-none d-sm-inline-block ml-1 font-weight-medium"><?php echo $this->session->userdata('name');?></span>
         <i class="right fas fa-angle-down"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Settings</span>
            <div class="dropdown-divider"></div>
            <?php 

            if($this->session->has_userdata('is_user_login')){
               $logout_url = base_url().'app/users/logout';
            } else {
               $logout_url = base_url().'app/auth/logout';
            }
            ?>
            <a href="<?php echo $logout_url; ?>" class="nav-link text-center"><span style="font-size: 14px;"><b>Logout</b></span>&nbsp;<i class="fa fa-power-off" aria-hidden="true" style="color: red;"></i></a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer"></a>
         </div>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
         <i class="fa fa-cog"></i>
         </a>
      </li>
   </ul>
</nav>
<!-- /.navbar -->
<?php endif; ?>