<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	//============ Verify Contact============
    function Verify_contact($contact)
    {
    	 $query = $this->db->get_where('users', array('contact' => $contact));
         return $result = $query->row_array();
    }

    function update_otp($contact,$otp){
		 $this->db->set(array(
	            'otp'=>$otp
	            ));
	    $this->db->where('contact',$contact);
	    $this->db->update('users');
	    return true;
    }

    function otp_verification($contact,$otp){
        $query = $this->db->get_where('users', array('contact' => $contact,'otp'=>$otp));
        return $result = $query->row_array();
    }

    function update_otp_blank($contact){
         $this->db->set(array(
                'otp'=>''
                ));
        $this->db->where('contact',$contact);
        $this->db->update('users');
        return true;
    }

    function get_doc_list(){
        $this->db->select('*');
        $this->db->from('documents');
        $this->db->where('user_id',$this->session->userdata('user_id'));
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    function insert_doc($data){
    $this->db->insert('documents',$data);
   }

 

}

?>