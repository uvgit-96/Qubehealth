<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * This function is used to print the content of any data
 */
    if (!function_exists('pre')) {
        function pre($data)
        {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            exit();
        }
    }

    /**
     * This function used to get the CI instance
     */
    if(!function_exists('get_instance'))
    {
        function get_instance()
        {
            $CI = &get_instance();
        }
    }


    //check auth
    if (!function_exists('auth_check')) {
        function auth_check()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            if(!$ci->session->has_userdata('is_admin_login'))
            {
                redirect('master', 'refresh');
            }
        }
    }

     //check auth
    if (!function_exists('user_auth_check')){
        function user_auth_check()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            if(!$ci->session->has_userdata('is_user_login'))
            {
                redirect('user', 'refresh');
            }
        }
    }


    // -----------------------------------------------------------------------------
    // Get General Setting
    if (!function_exists('get_general_settings')) {
        function get_general_settings()
        {
            $ci =& get_instance();
            $ci->load->model('app/setting_model');
            return $ci->setting_model->get_general_settings();
        }
    }

    // -----------------------------------------------------------------------------
    //get recaptcha
    if (!function_exists('generate_recaptcha')) {
        function generate_recaptcha()
        {
            $ci =& get_instance();
            if ($ci->recaptcha_status) {
                $ci->load->library('recaptcha');
                echo '<div class="form-group mt-2">';
                echo $ci->recaptcha->getWidget();
                echo $ci->recaptcha->getScriptTag();
                echo ' </div>';
            }
        }
    }

    // ----------------------------------------------------------------------------
    //print old form data
    if (!function_exists('old')) {
        function old($field)
        {
            $ci =& get_instance();
            // return html_escape($ci->session->flashdata('form_data')[$field]);
            $text = isset($ci->session->flashdata('form_data')[$field]) ? $ci->session->flashdata('form_data')[$field] : '';
            return html_escape($text);
        }
    }

    // --------------------------------------------------------------------------------
    if (!function_exists('date_time')) {
        function date_time($datetime)
        {
           return date('F j, Y',strtotime($datetime));
        }
    }

    // --------------------------------------------------------------------------------
    // limit the no of characters
    if (!function_exists('text_limit')) {
        function text_limit($x, $length)
        {
          if(strlen($x)<=$length)
          {
            echo $x;
          }
          else
          {
            $y=substr($x,0,$length) . '...';
            echo $y;
          }
        }
    }

    if ( ! function_exists('opt_generate'))
    {
       function otp_generate($n) {
            $generator = "1357902468";
            $result = "";
            for ($i = 1; $i <= $n; $i++) {
                $result .= substr($generator, (rand()%(strlen($generator))), 1);
            }
            return $result;
        }   
    }

    // function for file docupload
    if(!function_exists('docupload')){  
            function docupload($file_name="",$file_path="",$new_name = ''){

                 $CI = &get_instance();
                 $upload_data['success'] ="";
                 $upload_data['error'] = "";
                 $config['upload_path']          = $file_path;
                 $config['allowed_types']        = '*';
                 if ($new_name != '') {
                    $config['file_name'] = $new_name;
                 } 
                 $CI->load->library('upload', $config);   
                 $CI->upload->initialize($config);
    
                if ( ! $CI->upload->do_upload($file_name)) {
                     $upload_data['error'] = $CI->upload->display_errors();
                }
                else {
                     $upload_data['success'] = $CI->upload->data();
                     // Continue processing the uploaded data
                }
                return $upload_data;
        
            }
     }


    if ( ! function_exists('send_sms'))
    {
       function send_sms($contact,$otp){

            try {
                //Authorization details.
                $username = "uttamdev";
                $password = "smsindia@123";
                $sid = "CLOUDW";
                // Data for text message. This is the text message data.
                $message = "Hi, Your OTP is ".$otp;
                $data = "user=".$username."&password=".$password."&msisdn=".$contact."&sid=".$sid."&msg=".$message."&fl=0&gwid=2";
                $ch = curl_init('http://cloud.smsindiahub.in/vendorsms/pushsms.aspx?');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch); // This is the result from the API
                curl_close($ch);
                $result2 = json_decode($result,true);
                if($result2['ErrorCode'] == '000'){
                     return TRUE;
                } else {
                     return FALSE;
                }
            } catch (Exception $e) {
                return FALSE;
            }
        }   
    }


 

?>
