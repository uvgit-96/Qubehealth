<section class="content">
   <!-- For Messages -->
   <?php $this->load->view('app/includes/_messages.php') ?>
   <div class="card">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Documents Setting</h3>
         </div>
         <div class="d-inline-block float-right" style="margin-bottom: 22px;">
            <div class="d-inline-block float-right">
               <a href="<?php echo  base_url('users'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Users List</a>
            </div>
         </div>
      </div>
      <div class="card-body table-responsive">
         <table id="example1" class="table table-bordered table-hover">
            <thead>
               <tr>
                  <th width="50">Sr. No</th>
                  <th>Uploaded date time</th>
                  <th>View/Download</th>
               </tr>
            </thead>
            <tbody>
               <?php if(count($doc_list)>0){
                  $i=1; foreach($doc_list as $doc_list_val){
                  ?>	
               <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $doc_list_val['uploaded_on'];?></td>
                  <td><a target="_blank" href="<?php echo base_url().'uploads/users_doc/'.$doc_list_val['filename'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></i>&nbsp;<a  href="<?php echo base_url().'uploads/users_doc/'.$doc_list_val['filename'];?>" download><i class="fa fa-download" aria-hidden="true"></i></a></td>
               </tr>
               <?php $i++; } } else { ?> <tr><td colspan="3" class="text-center">No documents uploaded till yet!</td></tr> <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</section>
