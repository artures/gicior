<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		
	}
	 
	 	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != true)
		{
		echo 'Permision denied. Please log in <a href="http://www.ecwm604.us/w1284183/index.php/">Login</a> ';
		
		die();
		}	
	}
	function menu() // manager area menu
	{
		$hello = $this->session->userdata('emp_no');
		$this->load->view('manager_view', $hello);
	
	}
	

	
	function register() // loads create new employee view
	{
		$data['error']= 0;	
		$this->load->view('register_view',$data);
	
	}
	function create()  // creates new employee includes form validation
	{
		$data['error']= 0;
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name' , 'Name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name' , 'Surname', 'trim|required|alpha');
		$this->form_validation->set_rules('emp_no' , 'Employee number', 'trim|required|exact_length[6]|integer|is_unique[employees.emp_no]');
		$this->form_validation->set_rules('gender' , 'Gender', 'trim|required|exact_length[1]|alpha');
		$this->form_validation->set_rules('title' , 'Title', 'required');
		$this->form_validation->set_rules('dept_no' , 'Department', 'required');
		$this->form_validation->set_rules('salary' , 'Salary', 'required|integer');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('register_view',$data);
			
		}
		else
		
		{
			$this->load->model('manager_model'); 
			$query=$this->manager_model->create_emp();							
			if (!$query) // in case of failure display error
				{
					
					$data['error']=9; 
					$this->load->view('register_view',$data);
					
				}
					
				else 
				{
				$data['error']=5;
				$this->load->view('register_view',$data);
				
				}
			// load manager model where db gets updated
			
		}
			
				
		
		
		
	
	
	}
	
		function load() // loads employee data into update view
		{
			$this->load->library('form_validation');
	
			$this->form_validation->set_rules('emp_no' , 'Employee number', 'trim|required|integer|min_length[5]|max_length[6]');
	
			if($this->form_validation->run() == FALSE){
				$this->load->view('load_view');
				
			}
			else
			{
				$this->load->model('manager_model');
				$data['loaded'] = $this->manager_model->load_emp();
				$this->load->view('update_view', $data);
					
			}

	
		}
	
	function update() // updates employee data function includes form validation
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name' , 'Name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name' , 'Surname', 'trim|required|alpha');
		$this->form_validation->set_rules('emp_no' , 'Employee number', 'trim|required|min_length[5]|max_length[6]|integer');
		$this->form_validation->set_rules('gender' , 'Gender', 'trim|required|exact_length[1]|alpha');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('update_view');
			
		}
		else
		{
		
			
			$this->load->model('manager_model'); // load manager model where db gets updated
			if  ($query=$this->manager_model->update_emp())
			{
				$this->load->view('success_view');
			}
			else 
			{
				$this->load->view('update_view');
				
			}
				
		}
		
		
	
	
	}	
	
	
	function password_update() // change password for manager
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password1' , 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password2' , 'Password Confirmed', 'trim|required|min_length[3]|matches[password1]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('password_view');
			
		}
		else
		{
			$this->load->model('manager_model'); // load manager model where db gets updated
			if  ($query=$this->manager_model->update_password())
			{
				
		
			redirect('login/logout');	
				
			}
			else 
			{
				$this->load->view('password_view');
			}
		
		
		}
	
	}	
	
	
	
	
	
}

