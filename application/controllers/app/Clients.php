<?php
class Clients extends MY_Controller
{
    function __construct(){

        parent::__construct();
        auth_check();
		$this->load->model('app/clients_model', 'admin_roles');
    }

	public function spoc_list(){
		$data['title'] = 'Users Manage';
		$data['records'] = $this->admin_roles->get_all_client_spoc_list();
        loadViews('clients/spoc/spoc_list', $data);
	}

	public function spoc_add(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('name', 'Client Name', 'required');
			$this->form_validation->set_rules('email', 'Client Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('contact', 'Client Contact', 'required|min_length[10]|max_length[10]|is_unique[users.contact]');	
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('app/clients/spoc_add'),'refresh');
			}
			else{
				$data = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'contact' => $this->input->post('contact'),
					'created_at' => date("Y-m-d H:i:s"),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_roles->add_client_spoc($data);
				if($result){
					$this->session->set_flashdata('success', 'Users has been added successfully!');
					redirect(base_url('app/clients/spoc_list'));
				}
			}
		}
		else{
			$data['title'] = 'Add Users';
            loadViews('clients/spoc/spoc_add', $data);
		}
	}

	public function view_documents($user_id){
		$data['title'] = 'View Documents';
		$data['doc_list'] = $this->admin_roles->get_doc_list($user_id);
        loadViews('clients/spoc/documents', $data);
	}




	


}

?>
