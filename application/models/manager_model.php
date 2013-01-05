<?php

class Manager_model extends CI_Model {
	
		function validate(){

			$this->db->where('emp_no',$this->input->post('emp_no'));
			$this->db->where('password',sha1($this->input->post('password')));//sha1/md5 later
			$query = $this->db->get('dept_manager');
			
			if($query->num_rows == 1) {
				
				return true;
				
			}
			
			
		}
		
		
			
		
		function create_emp(){ 

		$new_emp_insert_data = array (
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'emp_no' => $this->input->post('emp_no'),
		'gender' => $this->input->post('gender')
		
		);
			
		$employee = $this->db->insert('employees', $new_emp_insert_data);	
		return $employee; // returns true if db updated
		}
		
		
		

		
		
		
		
		function update_emp(){
				
			 

		$update_emp_insert_data = array (
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'gender' => $this->input->post('gender')
		
		
		
		//missing hire date and dob as they are not required		
		);
		
		$emp_ID = $this->input->post('emp_no');
		$this->db->where('emp_no', $emp_ID);	
		$update = $this->db->update('employees', $update_emp_insert_data);	
		//update salaries 
		//update depart_emp
		return $update; // returns true if db updated
		}
				
				
		function load_emp()
		{
			$emp_ID = $this->input->post('emp_no');
			
			
			if ($emp_ID)
			{
			$this->db->select('emp_no, first_name, last_name, gender')->from('employees')->where('emp_no', $emp_ID);
			
			

			$query = $this->db->get();

			
			if ($query->num_rows() > 0 ){
					foreach ( $query -> result() as $row) {
						$data[] = $row;
						
						} 				
				return $data;
				
			}
		}
		
		
	}
	
	
	
	
	
	}
