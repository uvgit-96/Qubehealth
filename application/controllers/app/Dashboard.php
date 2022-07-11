<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {
	
	public function __construct(){
		parent::__construct();
		auth_check(); // check login auth
	}
	
	public function index(){
		$data['title'] = 'Dashboard 1';
		loadViews('dashboard/index', $data);
	}

}

?>
