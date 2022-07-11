<?php
class Clients_model extends CI_Model{
   
   	public function __construct()
	{
		parent::__construct();
	}

    function get_all_client_spoc_list()
    {
		$this->db->select('*')
		        ->from('users')
		->order_by("id", "desc");
		$query = $this->db->get();
        return $query->result_array();
    }
    
    function add_client_spoc($data)
    {
		$this->db->insert('users', $data);
		return true;
    }

    function get_doc_list($user_id){
        $this->db->select('*');
        $this->db->from('documents');
        $this->db->where('user_id',$user_id);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }


	




}	
?>