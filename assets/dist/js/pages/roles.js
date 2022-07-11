// Roles & permissions module js
// Role status Change
$("body").on("change",".tgl_checkbox",function(){
  // $.post('<?=base_url("admin/admin_roles/change_status")?>',
  $.post(baseURL+"app/admin_roles/change_status",
  {
    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
    id : $(this).data('id'),
    status : $(this).is(':checked') == true ? 1:0
  },
  function(data){
    $.notify("Status Changed Successfully", "success");
  });
});


// Roles individual permissions
