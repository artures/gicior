<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Find extends CI_Controller {

function index () 
	{
	$this->load->view('search_view'); // loads default search  view
	}	 
	 
function findemp()
	{		
		$this->load->model('search_model');
		$data['rows'] = $this->search_model->getEmployees(); // load emploayees from database according to data from inputs
		
		if (count($data['rows'])!=0 ) { // if data returned contains rows, load view and pass data to it
		$this->load->view('result_view', $data);	
		}
		else {$this->load->view('search_view');} // otherwise reload view
	}
function findemp_adv()
	{
		$data['error'] = 0;
		$this->load->view('search_view_adv');
		$this->load->model('search_model');
		
		$data['rows_adv'] = $this->search_model->getEmployees_adv(); // load emploayees from database according to data from inputs
		if(!$data['rows_adv'])
		{
		$data['error'] = 8;	
		$this->load->view('result_view_adv', $data);
		}
		else {
			$this->load->view('result_view_adv', $data);
			}
	
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */