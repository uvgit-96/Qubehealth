<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!--print error messages-->
    <?php if($this->session->flashdata('errors')): ?>
      <!-- <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <?= $this->session->flashdata('errors')?>
      </div> -->

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('errors'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <?php endif; ?>


    <!--print custom error message-->
    <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?php echo $this->session->flashdata('error'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif; ?>


    <!--print custom success message-->
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; 

    $this->session->unset_userdata('success');
    $this->session->unset_userdata('errors');
    ?>
