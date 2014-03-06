<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//change class name to reflect the controller page name
class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}

	public function result()
	{
		$survey = $this->input->post();
		
		if ($this->session->userdata('count')) {
			$count = $this->session->userdata('count');
			$count += 1;
			$this->session->set_userdata('count',$count);
			$survey['count'] = $this->session->userdata('count');
		}
		else
		{
			$this->session->set_userdata('count',1);
			$survey['count'] = $this->session->userdata('count');
		}
		
		$this->load->view('result',$survey);
	}

	public function goback()
	{
		redirect("/");
	}

	public function end()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */