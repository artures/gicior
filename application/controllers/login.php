<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	function index()
	{
		if($this->session->userdata('is_logged_in'))
		{
		
		$this->load->view('manager_view');
		}
		else 
		{
		$data['error']=0;	
		$this->load->view('login_view',$data);
		}
	}
	

		function validate_manager()
		{
				
			$this->load->model('manager_model');
			$query = $this->manager_model->validate();
				$this->load->library('form_validation');
				$this->form_validation->set_rules('emp_no' , 'Employee ID:110022', 'required|integer');
				$this->form_validation->set_rules('password' , 'Password :123', 'required|min_length[3]');
		
				if($this->form_validation->run() == FALSE)
				{
					
					$this->index();
				
				}	
			
				else {
			
				if (!$query)
				{
					$data['error']=1; 
					$this->load->view('login_view',$data);
					
				}
					
				else {
					$data = array (
						'emp_no'=>$this->input->post('emp_no'),
						'is_logged_in'=> true );
					
					$this->session->set_userdata($data);
					$this->load->view('manager_view');
					
				
				} 
				
		}

		}
	
		
		
		
		function new_pass()
		{	$data['error']=0;
			$this->load->library('form_validation');
	
			$this->form_validation->set_rules('emp_no' , 'Employee number', 'trim|required|min_length[5]|max_length[6]');
	
			if($this->form_validation->run() == FALSE){
				$this->load->view('new_pass_view', $data);
				
			}
			else
			{
				$data['error']= 0;
				$this->load->model('manager_model');
				if($data['emp_no'] = $this->manager_model->load_emp_no())
				{
				$this->load->view('assign_view', $data);
				}
				else
				{
					$data['error']= 3;
					$this->load->view('new_pass_view', $data);}
				}

	
		}
	
		function assign_pass()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password1' , 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password2' , 'Password Confirmed', 'trim|required|min_length[3]|matches[password1]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('assign_view', $data);
			
		}	
		else
		{
			$this->load->model('manager_model'); // load manager model where db gets updated
			if  ($query=$this->manager_model->update_password())
			{
				
			$data['error']=2;
			$this->load->view('login_view',$data);	
				
			}
			else 
			{
				$data['error']=3;
				$this->load->view('assign_view',$data);
			}
		
		
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

