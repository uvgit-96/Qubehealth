<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

	//============ Verify Contact============
    function Verify_contact($contact)
    {
    	 $query = $this->db->get_where('ci_admin', array('contact' => $contact));
         return $result = $query->row_array();
    }

    function update_otp($contact,$otp){
		 $this->db->set(array(
	            'otp'=>$otp
	            ));
	    $this->db->where('contact',$contact);
	    $this->db->update('ci_admin');
	    return true;
    }

    function otp_verification($contact,$otp){
        $result = $this->db->get_where('ci_admin', array('contact' => $contact,'otp'=>$otp));
        if($result->num_rows() > 0){
            return true;
        }
        else {
            return false;
        }
    }

    function update_otp_blank($contact){
         $this->db->set(array(
                'otp'=>''
                ));
        $this->db->where('contact',$contact);
        $this->db->update('ci_admin');
        return true;
    }

 

}

?>