<?php

class Search_model extends CI_Model {
	
		function getEmployees() {
			
			
			$fname = $this->input->get('firstname');
			$sname = $this->input->get('lastname');
			$dept = $this->input->get('dept');
			$jobt = $this->input->get('jobtitle');
			
			if ($fname || $sname || $dept || $jobt )
			{
			$this->db->from('employees');
			if ($fname) {$this->db->where('first_name', $fname);}
			if ($sname){$this->db->where('last_name', $sname);}
			$this->db->join('titles', 'employees.emp_no= titles.emp_no');
			if ($jobt){$this->db->where('title', $jobt);}
			$this->db->join('dept_emp', 'employees.emp_no= dept_emp.emp_no'  );
			$this->db->join('departments', 'dept_emp.dept_no= departments.dept_no' );
			if ($dept){$this->db->where('dept_name', $dept);}
						
			
			
		
			
			
			
			$query = $this->db->get();	

			
					if ($query->num_rows() > 0 ){
							foreach ( $query -> result() as $row) {
								$entry = array();
								$entry['firstname'] = $row->first_name;
								$entry['lastname'] = $row->last_name;
								$entry['jobtitle'] = $row->title;
								$entry['dept'] = $row->dept_name;
								$entry['deptid'] = $row->dept_no;
								if($entry['jobtitle'] == "manager") {
									$entry['ismanager'] = 1;
								} else {
									$entry['ismanager'] = 0;	
								}
				

        					$data[] = $entry;
								
								} 				
						return json_encode(array("count" => count($data), "results" =>$data)); break;
						
						}
					
			}
					else { }		
		}
			

			
			
	function getEmployees_adv() {
				
			
			$fname = $this->input->post('firstname');
			$sname = $this->input->post('lastname');
			$emp_ID = $this->input->post('empID');
			$dept = $this->input->post('dept');
			$jobt = $this->input->post('jobtitle');
			$sal = $this->input->post('sal');
			
			if (!empty($fname) || !empty($sname) || !empty($dept) || !empty($jobt) || !empty($sal) || !empty($emp_ID)    )
			{
			$this->db->from('employees');
			if ($fname) {$this->db->where('first_name', $fname);}
			if ($sname){$this->db->where('last_name', $sname);}
			if($emp_ID){$this->db->where('emp_no', $emp_ID);}
			$this->db->join('titles', 'employees.emp_no= titles.emp_no');
			if ($jobt){$this->db->where('title', $jobt);}
			$this->db->join('dept_emp', 'employees.emp_no= dept_emp.emp_no');
			$this->db->join('departments', 'dept_emp.dept_no= departments.dept_no');
			if ($dept){$this->db->where('dept_name', $dept);}
			
			
			$this->db->join('salaries', 'employees.emp_no = salaries.emp_no');
			
			if($sal){$this->db->where('salary', $sal);}
			

			
			$query = $this->db->get();

			
			if ($query->num_rows() > 0 ){
					foreach ( $query -> result() as $row) {
						$data[] = $row;
						
						} 				
				return array("count" => count($data), "results" =>$data); // returns number of results and results 
				
			}
		}
		
		
	}
			
			
	
		
		
	
	
	}
			