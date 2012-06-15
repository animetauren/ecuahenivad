<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bienvenido extends CI_Controller {

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
	public function index()
	{
		$this->load->library('user_agent');

		if($this->agent->is_mobile())
    {
        $this->load_mobile();   
    }   
    else
    {
        $this->load_web();
    }

	
}

	public function load_mobile()
  {
  	$this->template->set_layout('default_m')->build('mobile/m_es');
	}

	public function load_web()
	{
      $this->template->set_layout('default_es')->build('welcome_es');
	}
}	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */