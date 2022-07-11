<style type="text/css">
   input[type=number]::-webkit-inner-spin-button, 
   input[type=number]::-webkit-outer-spin-button { 
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;
   margin: 0; 
   }
</style>
<section class="content">
   <div class="card card-default">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"> <i class="fa fa-plus"></i>
               Add New Users 
            </h3>
         </div>
         <div class="d-inline-block float-right">
            <a href="<?= base_url('users'); ?>" class="btn btn-success"><i class="fa fa-list"></i>  Users List</a>
         </div>
      </div>
      <div class="card-body">
         <?php $this->load->view('app/includes/_messages.php') ?>
         <?php echo form_open_multipart(base_url('app/clients/spoc_add'), 'class="form-horizontal"');  ?>
         <div class="form-group">
            <label for="name" class="col-md-2 control-label">Spoc Name</label>
            <div class="col-md-12">
               <input type="text" name="name" class="form-control" id="name" placeholder="Enter Spoc Name">
            </div>
         </div>
         <div class="form-group">
            <label for="email" class="col-md-2 control-label">Spoc Email</label>
            <div class="col-md-12">
               <input type="email" name="email" class="form-control" id="email" placeholder="Enter Spoc Email">
            </div>
         </div>
         <div class="form-group">
            <label for="contact" class="col-md-2 control-label">Spoc Contact</label>
            <div class="col-md-12">
               <input type="number" name="contact" class="form-control" id="contact" placeholder="Enter Spoc Contact">
            </div>
         </div>
      </div>
      <div class="form-group">
         <div class="col-md-12 text-center">
            <input type="submit" name="submit" value="Add Users" class="btn btn-success pull-right">
         </div>
      </div>
      <?php echo form_close( ); ?>
   </div>
   <!-- /.box-body -->
   </div>
</section>
