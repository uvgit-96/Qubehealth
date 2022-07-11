<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends My_Controller {
	
	public function __construct(){
		parent::__construct();
		user_auth_check(); // check login auth
		date_default_timezone_set('Asia/Kolkata');
		$this->load->model('app/User_model', 'user_model');
	}
	
	public function index(){
		$data['cssAssets'] = ['assets/plugins/toastr/toastr.min.css'];
	    $data['jsAssets'] = ['assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/plugins/toastr/toastr.min.js','assets/dist/js/document.js'];
		$data['doc_list'] = $this->user_model->get_doc_list();
		$data['title'] = 'Documents';
		loadViews('users/documents', $data);
	}


	public function upload_doc(){
		 $fdData = $_FILES;
     	 $path = "uploads/users_doc/";
         $dname = explode(".", $fdData['doc']['name']);
         $ext = end($dname);
         $new_name = $this->session->userdata('user_id').'_'.time().".".$ext;
         $k = "doc";
         $doc = docupload($k, $path, $new_name);
         $data_insert = array(
         	'user_id' => $this->session->userdata('user_id'),
         	'filename' => $new_name,
         	'uploaded_on' => date("Y-m-d H:i:s")
         );

         $this->user_model->insert_doc($data_insert);
         $doc_list = $this->user_model->get_doc_list();

            $i=1; 
            $html="";
            foreach($doc_list as $doc_list_val){
                 	$file_path = base_url().'uploads/users_doc/'.$doc_list_val['filename'];
               $html.="<tr>
	                  <td>".$i."</td>
	                  <td>".$doc_list_val['uploaded_on']."</td>
	                  <td><a target='_blank' href='".$file_path."'><i class='fa fa-eye' aria-hidden='true'></i></a></i>&nbsp;<a  href='".$file_path."' download><i class='fa fa-download' aria-hidden='true'></i></a></td>
                   </tr>";
                $i++; 
            }

            echo $html;

	}

}

?>
