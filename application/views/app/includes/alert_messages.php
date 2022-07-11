<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script type="text/javascript">
    <?php if ($this->session->flashdata('success')) {?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php } else if ($this->session->flashdata('error')) {?>
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php } else if ($this->session->flashdata('errors')) {?>
        toastr.error("<?php echo $this->session->flashdata('errors'); ?>");
    <?php } else if ($this->session->flashdata('warning')) {?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php } else if ($this->session->flashdata('info')) {?>
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php }?>      


    <?php if($this->session->flashdata('error_array')){ 
        $error_array = $this->session->flashdata('error_array');
        foreach($error_array as $error_array_val) { ?>
            toastr.error("<?php echo $error_array_val; ?>");
     <?php }  } ?>  
</script>

<?php 
    $this->session->unset_userdata('success');
    $this->session->unset_userdata('errors');
    $this->session->unset_userdata('error');
    $this->session->unset_userdata('warning');
    $this->session->unset_userdata('info');
    $this->session->unset_userdata('error_array');
?>