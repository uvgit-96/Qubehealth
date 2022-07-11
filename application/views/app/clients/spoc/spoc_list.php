<section class="content">
		<!-- For Messages -->
   		<?php $this->load->view('app/includes/_messages.php') ?>
		<div class="card">
			<div class="card-header">
				<div class="d-inline-block">
					<h3 class="card-title"><i class="fa fa-list"></i>&nbsp; User Setting</h3>
				</div>
				<div class="d-inline-block float-right">
					<a href="<?php echo  base_url('users/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New User</a>
				</div>
			</div>

			<div class="card-body table-responsive">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50">Sr. No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>View Documents</th>
						</tr>
					</thead>
					<tbody>
						<?php $l=1;
								if(count($records)>0){
							 foreach($records as $record): ?>
							<tr>
								<td><?php echo  $l; ?></td>
								<td><?php echo  $record['name']; ?></td>
								<td><?php echo  $record['email']; ?></td>
								<td><?php echo  $record['contact']; ?></td>
								<td><a href="<?php echo base_url().'users/view_documents/'.$record['id'];?>"><i class="fa fa-eye"></a></td>
							</tr>
						<?php $l++; endforeach; 

					} else { ?>
						<tr>
							<td class="text-center" colspan="5">No Users Found!</td>
						</tr>
					<?php } ?>	
					</tbody>
				</table>
			</div>
		</div>
	</section>
