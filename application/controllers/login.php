<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	function index()
	{
		if($this->session->userdata('is_logged_in'))
		{
		$hello = $this->session->userdata('emp_no');
		$this->load->view('manager_view', $hello);
		}
		else 
		{
		$this->load->view('login_view');
		}
	}
	

		function validate_manager()
		{
			$this->load->model('manager_model');
			$query = $this->manager_model->validate();
				$this->load->library('form_validation');
				$this->form_validation->set_rules('emp_no' , 'Employee ID:110022', 'required|integer');
				$this->form_validation->set_rules('password' , 'Password :123', 'required');
		
				if($this->form_validation->run() == FALSE){
					$this->index();
					
				}	
			
			
			
				if ($query)
				{
					
					$data = array (
						'emp_no'=>$this->input->post('emp_no'),
						'is_logged_in'=> true );
					
					$this->session->set_userdata($data);
					$this->load->view('manager_view');
				}
				
		}

	
	function logout()
	{
	$this->session->set_userdata('is_logged_in', 'false');
    $this->session->unset_userdata('is_logged_in');
    $this->session->sess_destroy();
	redirect('main');	
	}
	
	




	
}

