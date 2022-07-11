<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *	Admin redirect to app Folder
	 */
	public function index()
	{
		// $this->load->view('app');
			redirect(base_url('app'));
	}
}
