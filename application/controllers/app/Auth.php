<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('app/auth_model', 'auth_model');
	}
	public function index(){
		if($this->session->has_userdata('is_admin_login')){
			redirect('app/dashboard');
		}
		else{
			redirect('master');
		}
	}

	//--------------------------------------------------------------
	public function login(){
			$data['title'] = 'Login';
			$this->load->view('app/auth/login' , $data);
	}

	public function change_number(){
			$session_data = array("is_contact_verify",
				"contact"
			);
		    $this->session->unset_userdata($session_data);
		    redirect('master');
	}

	public function verify_contact(){
		$contact = $this->input->post('contact');
		$result = $this->auth_model->Verify_contact($contact);
		if($result!=NULL){
			$opt_generate = otp_generate(4);
			$this->auth_model->update_otp($contact,$opt_generate);
			$send_sms = send_sms($contact,$opt_generate);// sending OTP
			if($send_sms){
				$session_data = array(
					"is_contact_verify" => true,
					"contact" => $contact,
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
			$contact = $this->session->userdata('contact');
			$result = $this->auth_model->otp_verification($contact,$otp);
			if($result){
			   $this->auth_model->update_otp_blank($contact);
               $this->session->unset_userdata('contact');
               $admin_data = array(
									'is_admin_login' => TRUE
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
		redirect(base_url('master'), 'refresh');
	}

	public function api(){
		$fields = array(
		    "sender_id" => "FSTSMS",
		    "message" => "This is Test message",
		    "language" => "english",
		    "route" => "p",
		    "numbers" => "7045855443",
		    "flash" => "1"
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($fields),
		  CURLOPT_HTTPHEADER => array(
		    "authorization: M8JeUGXx1YROgbKmCwNP9jhrAo07l5EndQB3IyZ6t4ucfzkqLsLxtuOKm4E7SrGkhTsNjZ80JMF2qypV",
		    "accept: */*",
		    "cache-control: no-cache",
		    "content-type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		//var_dump($curl);
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}

    }
}  // end class


?>
