<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>User Login</title>
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/android-icon-72x72.png">
      <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/android-icon-72x72.png">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
      <!-- Custom css  -->
      <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/edu_erp.css">
      <style type="text/css">
         /* Chrome, Safari, Edge, Opera */
         input::-webkit-outer-spin-button,
         input::-webkit-inner-spin-button {
         -webkit-appearance: none;
         margin: 0;
         }
         /* Firefox */
         input[type=number] {
         -moz-appearance: textfield;
         }
      </style>
      <script type="text/javascript">
         var baseURL = "<?php echo base_url(); ?>";
      </script>
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="card card-outline card-primary" style="border-top: 3px solid #4CB648;">
            <div class="card-header text-center">
               <img src="<?= base_url($this->general_settings['logo']); ?>" alt="Logo Qube Health" style="width:100%"> <br>
               <a href="<?= base_url('app'); ?>" class="p"><b><?= $this->general_settings['application_name']; ?></b>Users Login</a>
            </div>
            <!-- /.login-logo -->
            <div class="card-body">
               <p class="login-box-msg">Enter mobile</p>
               <p class="ajax_error" style="color: red;"></p>
               <div class="input-group mb-3">
                  <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter mobile no." <?php if($this->session->userdata('is_user_contact_verify') === true){ echo 'value="'.$this->session->userdata('user_contact').'" readonly';}?>>
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                     </div>
                  </div>
               </div>
               <p id="change_number" <?php if($this->session->userdata('is_user_contact_verify') !== true){ echo 'style="display: none;text-align: right;font-size: 13px;text-decoration: underline;margin-top: -16px;margin-bottom: 6px;"';} else { echo 'style="text-align: right;font-size: 13px;text-decoration: underline;margin-top: -16px;margin-bottom: 6px;"';}?>><a href="<?php echo base_url().'app/users/change_number'; ?>" style="cursor: pointer;" >Change number</a></p>
               <div class="input-group mb-3 verify_otp" <?php if($this->session->userdata('is_user_contact_verify') !== true){ echo 'style="display: none;"';}?>>
                  <input type="number" name="otp" id="otp" class="form-control" placeholder="Enter otp">
               </div>
               <div class="row pb-3 pt-2">
                  <div class="col-12 verify_contact_btn" <?php if($this->session->userdata('is_user_contact_verify') === true){ echo 'style="display: none;"';}?>>
                     <input type="submit" name="submit" id="submit" class="btn btn-sm btn-outline-success btn-block" onclick="verify_contact()" value="Verify Contact">
                  </div>
                  <div class="col-12 verify_otp_btn" <?php if($this->session->userdata('is_user_contact_verify') !== true){ echo 'style="display: none;"';}?> >
                     <input type="submit" name="submit" id="submit" class="btn btn-sm btn-outline-success btn-block" onclick="verify_otp()" value="Verify Otp">
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.social-auth-links -->
            </div>
            <?php $this->session->set_flashdata('error', ''); ?>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
      <script type="text/javascript">
         function verify_contact(){
            if($("#contact").val()!=""){
               $.ajax({
                 type: "POST",
                 url: baseURL+'app/users/verify_contact',
                 data: {contact:$("#contact").val()},
                 dataType: "json", 
                 success: function(ajax_response){
                    var newData = JSON.stringify(ajax_response)
                      var obj = JSON.parse(newData);
                      if(obj.status == true){
                        $("#contact").attr('readonly','readonly');
                        $(".verify_otp").show();
                        $(".verify_otp_btn").show();
                        $(".verify_contact_btn").hide();
                        $("#change_number").show();
                      } else {
                        $(".ajax_error").html(obj.msg);
                        $(".ajax_error").show();
                        $(".ajax_error").fadeOut(2500); 
                      }
                 }
               });
            } else {
               $(".ajax_error").html('Please enter contact number!');
               $(".ajax_error").show();
               $(".ajax_error").fadeOut(2500); 
            }
         }
         
         
         function verify_otp(){
            if($("#otp").val()!=""){
               $.ajax({
                 type: "POST",
                 url: baseURL+'app/users/verify_otp',
                 data: {otp:$("#otp").val()},
                 dataType: "json", 
                 success: function(ajax_response2){
                    var newData2 = JSON.stringify(ajax_response2)
                      var obj2 = JSON.parse(newData2);
                      if(obj2.status == true){
                        location.replace(baseURL+'documents');
                      } else {
                        $(".ajax_error").html('Invalid otp number');
                        $(".ajax_error").show();
                        $(".ajax_error").fadeOut(2500); 
                      }
                 }
               });
            } else {
               $(".ajax_error").html('Please enter otp number!');
               $(".ajax_error").show();
               $(".ajax_error").fadeOut(2500); 
            }
         }
      </script>
   </body>
</html>