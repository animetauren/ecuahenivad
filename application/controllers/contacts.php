<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name',  'required|min_length[3]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|');
		$this->form_validation->set_rules('message', 'Message', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->set_layout('default')->build('web/contact');
		}
		else
		{
			$this->template->set_layout('default')->build('web/formsuccess');
		}
		// $this->template->set_layout('default')->build('contact');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */