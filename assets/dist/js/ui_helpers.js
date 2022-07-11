
// Border Spinners
var borderSpinnerPrimary    = '<div class="spinner-border text-primary m-1" role="status"> <span class="sr-only">Loading...</span> </div>';
var borderSpinnerPrimary_3x = '<div class="spinner-border text-primary m-1" style="width: 3rem; height: 3rem;" role="status"> <span class="sr-only">Loading...</span> </div>';
var borderSpinnerPrimary_5x = '<div class="spinner-border text-primary m-1" style="width: 5rem; height: 5rem;" role="status"> <span class="sr-only">Loading...</span> </div>';

var borderSpinnerSuccess    = '<div class="spinner-border text-success m-1" role="status"> <span class="sr-only">Loading...</span> </div>';
var borderSpinnerSuccess_3x = '<div class="spinner-border text-success m-1" style="width: 3rem; height: 3rem;" role="status"> <span class="sr-only">Loading...</span> </div>';
var borderSpinnerSuccess_5x = '<div class="spinner-border text-success m-1" style="width: 5rem; height: 5rem;" role="status"> <span class="sr-only">Loading...</span> </div>';

var borderSpinnerWarning    = '<div class="spinner-border text-warning m-1" role="status"> <span class="sr-only">Loading...</span> </div>';
var borderSpinnerWarning_3x = '<div class="spinner-border text-warning m-1" style="width: 3rem; height: 3rem;" role="status"> <span class="sr-only">Loading...</span> </div>';
var borderSpinnerWarning_5x = '<div class="spinner-border text-warning m-1" style="width: 5rem; height: 5rem;" role="status"> <span class="sr-only">Loading...</span> </div>';

// Growing spinner
var growingSpinnerPrimary     = '<div class="spinner-grow text-primary m-1" role="status">  <span class="sr-only">Loading...</span> </div>';
var growingSpinnerPrimary_3x  = '<div class="spinner-grow text-primary m-1" style="width: 3rem; height: 3rem;" role="status">  <span class="sr-only">Loading...</span> </div>';
var growingSpinnerPrimary_5x  = '<div class="spinner-grow text-primary m-1" style="width: 5rem; height: 5rem;" role="status">  <span class="sr-only">Loading...</span> </div>';

var growingSpinnerSuccess     = '<div class="spinner-grow text-success m-1" role="status">  <span class="sr-only">Loading...</span> </div>';
var growingSpinnerSuccess_3x  = '<div class="spinner-grow text-success m-1" style="width: 3rem; height: 3rem;" role="status">  <span class="sr-only">Loading...</span> </div>';
var growingSpinnerSuccess_5x  = '<div class="spinner-grow text-success m-1" style="width: 5rem; height: 5rem;" role="status">  <span class="sr-only">Loading...</span> </div>';

var growingSpinnerWarning     = '<div class="spinner-grow text-warning m-1" role="status">  <span class="sr-only">Loading...</span> </div>';
var growingSpinnerWarning_3x  = '<div class="spinner-grow text-warning m-1" style="width: 3rem; height: 3rem;" role="status">  <span class="sr-only">Loading...</span> </div>';
var growingSpinnerWarning_5x  = '<div class="spinner-grow text-warning m-1" style="width: 5rem; height: 5rem;" role="status">  <span class="sr-only">Loading...</span> </div>';


// Buttons loading || Please wait

var preLoding    = '<button class="btn btn-primary" type="button" disabled> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading... </button>';


// Datatable loader

var tablePreloader = '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> ';


function ajax_error(jqXHR, exception){
 var msg = '';
 if (jqXHR.status === 0) {
        msg = 'Not connect.\n Verify Network.';
    } else if (jqXHR.status == 404) {
        msg = 'Requested page not found. [404]';
    } else if (jqXHR.status == 500) {
        msg = 'Internal Server Error [500].';
    } else if (exception === 'parsererror') {
        msg = 'Requested JSON parse failed.';
    } else if (exception === 'timeout') {
        msg = 'Time out error.';
    } else if (exception === 'abort') {
        msg = 'Ajax request aborted.';
    } else {
        msg = 'Uncaught Error.\n' + jqXHR.responseText;
    }
    alert(msg);
}

function export_data(url, file_name) {
    $.ajax({
        url: base_url + url,
        type: 'POST',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'binary',
        xhrFields: {
            'responseType': 'blob'
        },
        beforeSend: function() {
            $('#data_export_loader').show();
            $('#export_btn').prop('disabled', true);
        },
        complete: function() {
            $('#data_export_loader').hide();
            $('#export_btn').prop('disabled', false);
        },
        success: function(response) {
            var today = new Date()
            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(response);
            a.href = url;
            a.download = file_name + date + '.xlsx';
            document.body.append(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
            //toastr.success('Data download Successfully !'); 
        },
        error: function(jqXHR,exceptionr) {
            ajax_error(jqXHR,exceptionr);
        }
    });

}

function c2c_call(from,to){
      $.ajax({
                    url:base_url+'app/common/c2c_call',
                    method:"POST",
                    data:{from:from,to,to},
                    success:function(result){
                     var obj = JSON.parse(result);
                     if(obj.status){
                         alert(obj.message);
                     } else {
                         alert("Something went wrong please try again later!");
                     }
                    },
                    error: function(jqXHR,exceptionr) {
                     ajax_error(jqXHR,exceptionr);
                  }
             })
}