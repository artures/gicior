<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Find extends CI_Controller {

function index () 
	{
	$this->load->view('search_view');
	}	 
	 
function findemp()
	{		
		$this->load->model('search_model');
		$data['rows'] = $this->search_model->getEmployees();
		
		if (count($data['rows'])!=0 ) {
		$this->load->view('result_view', $data);	
		}
		else {$this->load->view('search_view');}
	}
function findemp_adv()
	{
		
		$this->load->view('search_view_adv');
		$this->load->model('search_model');
		
		$data['rows_adv'] = $this->search_model->getEmployees_adv();
		$this->load->view('result_view_adv', $data);	
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */