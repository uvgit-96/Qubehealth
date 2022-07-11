<section class="content">
   <!-- For Messages -->
   <?php $this->load->view('app/includes/_messages.php') ?>
   <div class="card">
      <div class="card-header">
         <div class="d-inline-block">
            <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Documents Setting</h3>
         </div>
         <div class="d-inline-block float-right" style="margin-bottom: 22px;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus"></i> Add New Documents
            </button>
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
<!-- The Modal -->
<div class="modal fade" id="myModal">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Upload Documents</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <form  class="form-horizontal"  enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="novalidate" id="upload_docs">
            <div class="modal-body">
               <input type="file" name="doc" id="doc">
            </div>
            <div class="form-group">
                  <div class="col-md-12 text-center">
                     <input type="submit" name="submit" value="Add Documents" class="btn btn-primary pull-right">
                  </div>
               </div>
         </form>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>