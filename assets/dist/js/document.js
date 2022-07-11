$('#upload_docs').submit(function(e){
		e.preventDefault(); 
		console.log($("#doc").val());
if($("#doc").val()!=''){
	     $.ajax({
	         url:baseURL+ 'app/Documents/upload_doc',
	         type:"post",
	         data:new FormData(this),
	         processData:false,
	         contentType:false,
	         cache:false,
	         async:false,
	         beforeSend: function() {    
		         $("tbody").html(borderSpinnerSuccess);
		        },
	          success: function(resp){
	            $('#myModal').modal('hide');
	            toastr.success("Document added successfully!");
	            $("tbody").html('');
	            $("tbody").html(resp);
	       },
			    error: function (jqXHR, exception) {
			        ajax_error(jqXHR, exception);
			    },
	     });
} else {
	toastr.error("Please select documents");
}
}); 

$('#myModal').on('hidden.bs.modal', function () {
   $("#doc").val('');
})