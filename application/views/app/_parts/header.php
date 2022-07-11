<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo isset($title)? $title.' - ' : 'Title -' ?> <?php echo $this->general_settings['application_name']; ?></title>

  <link rel="icon" href="<?php echo base_url($this->general_settings['favicon']); ?>" type="image/x-icon">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css"> -->
  <!-- Custom css  -->
   <?php if(isset($cssAssets)){ foreach ($cssAssets as $css ) { ?>
    <link href="<?php echo base_url().$css; ?>" rel="stylesheet" type="text/css" />
  <?php  } } ?>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/edu_erp.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css"> -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/android-icon-72x72.png">
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/android-icon-72x72.png">
  <script type="text/javascript">
     var baseURL = "<?php echo base_url(); ?>";
 </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
