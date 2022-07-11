<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('app/User_model', 'user_model');
	}
	public function index(){
		if($this->session->has_userdata('is_user_login')){
			redirect('app/dashboard');
		}
		else{
			redirect('master');
		}
	}

	//--------------------------------------------------------------
	public function login(){
			$data['title'] = 'Login';
			$this->load->view('app/users/login' , $data);
	}

	public function change_number(){
			$session_data = array("is_user_contact_verify",
				"is_user_contact_verify"
			);
		    $this->session->unset_userdata($session_data);
		    redirect('user');
	}

	public function verify_contact(){
		$contact = $this->input->post('contact');
		$result = $this->user_model->Verify_contact($contact);
		if($result!=NULL){
			$opt_generate = otp_generate(4);
			$this->user_model->update_otp($contact,$opt_generate);
			$send_sms = send_sms($contact,$opt_generate);// sending OTP
			if($send_sms){
				$session_data = array(
					"is_user_contact_verify" => true,
					"user_contact" => $contact,
					"name" => $result['name']
				);
				$this->session->set_userdata($session_data); 
				$response['status'] = true;
		    } else {
		    	$response['status'] = false;
			    $response['msg'] = "Otp is not able to send please contact to admin";
		    }
		} else {
			$response['status'] = false;
			$response['msg'] = "Invalid contact number!";
		}
		echo json_encode($response);
	}

	public function verify_otp(){
	if($this->input->post('otp')){
			$otp = $this->input->post('otp');
			$contact = $this->session->userdata('user_contact');
			$result = $this->user_model->otp_verification($contact,$otp);
			if($result!=NULL){
			   $this->user_model->update_otp_blank($contact);
               $this->session->unset_userdata('user_contact');
               $admin_data = array(
									'is_user_login' => TRUE,
									'user_id' => $result['id']
								);
			   $this->session->set_userdata($admin_data);
			   $response['status'] = true;
			} else {
				$response['status'] = false;
			}
			echo json_encode($response);
		}
		else{
			redirect(base_url().'master');
		}
	}

	//-----------------------------------------------------------------------
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('user'), 'refresh');
	}

	}  // end class


?>
