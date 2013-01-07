<?php

class Manager_model extends CI_Model {
	
		function validate(){

			$this->db->where('emp_no',$this->input->post('emp_no'));
			$this->db->where('password',sha1($this->input->post('password')));//sha1 password encryption
			$query = $this->db->get('dept_manager');
			
			if($query->num_rows == 1) {
				
				return true; // return tru if password correct
				
			}
			
			
		}
		
		function check_password(){
			$this->db->where('emp_no',$this->input->post('emp_no'));
			$this->db->where('password', 'NULL');//if password is empty
			
			$query2 = $this->db->get('dept_manager');
				if( $query2->num_rows>= 1)
				{
					return true; // return false if found a row with empno and empty password from  managers table - trigger redirect to password_view
					
				}	
			
			
			}
		
		
		
		function update_password(){ 
		
		$update_password_data = array (
		'password' => sha1($this->input->post('password1'))
						
		);
		
		$emp_ID = $this->input->post('emp_no');
		$this->db->where('emp_no', $emp_ID);	
		$update = $this->db->update('dept_manager', $update_password_data);	

		return $update; // returns true if db updated
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
		
	
		);
		
		$emp_ID = $this->input->post('emp_no');
		$this->db->where('emp_no', $emp_ID);	
		$update = $this->db->update('employees', $update_emp_insert_data);	

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
			function load_emp_no()
		{
			$emp_ID = $this->input->post('emp_no');
			
			
			if ($emp_ID)
			{
			$this->db->select('emp_no')->from('dept_manager')->where('emp_no', $emp_ID)->where('password', NULL);;

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
