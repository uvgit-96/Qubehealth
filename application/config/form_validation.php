<?php
$config = array(
  // Registeration form in Home / on back end form
        'register' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'trim|alpha_numeric|is_unique[ci_admin.username]|required',
                        'errors'=> array(
                                'required' => '%s is required',
                                'is_unique' => '%s is already exist',
                              ),
                ),
                array(
                        'field' => 'firstname',
                        'label' => 'Firstname',
                        'rules' => 'trim|required',
                        'errors'=> array(
                                'required' => '%s is required.',
                              ),
                ),
                array(
                        'field' => 'lastname',
                        'label' => 'Lastname ',
                        'rules' => 'trim|required',
                        'errors'=> array(
                                'required' => '%s is required.',
                              ),
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|valid_email|is_unique[ci_admin.email]|required',
                        'errors'=> array(
                                'required' => 'You must provide a %s.',
                              ),
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required|min_length[8]'
                ),
                array(
                        'field' => 'confirm_password',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|required|matches[password]'
                ),
                array(
                        'field' => 'terms',
                        'label' => 'Terms and conditions',
                        'rules' => 'trim|required',
                        'errors' => array(
                          'required'=>'Please accepect %s '
                        ),
                )
        ),
        'login' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'trim|required',
                        'errors'=> array(
                            'required' => 'Kindly enter %s or Email Id'
                        ),
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required'
                )
        )
);


 ?>
