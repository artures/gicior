<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Human Reseources Admin System - Add employee</title>

<link href="..\..\css\HR.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="header">
  <h1>HUMAN RESOURCES ADMIN SYSTEM </h1> 
  
  <!-- end .header --></div>
<div class="container">

  <div class="content" >
    <h1>Create employee profile</h1> 

   	<hr style="width:50%;"/>
    <?php echo form_open('manager/create'); ?>
    <table class="login">
        <tr>
    	<td><label for="eID">Employee ID:</label></td>
        <td><input type="text"  id="emp_no" name="emp_no" tabindex="1" > </td>	
    </tr>  
    <tr>
    	<td><label for="fname">First Name:</label></td>
        <td><input type="text"  id="first_name" name="first_name" tabindex="2" > </td>	
    </tr>
    <tr>
    	<td><label for="lastname">Surname:</label></td>
        <td><input type="text"  id="last_name" name="last_name" tabindex="3" > </td>	
    </tr>
    <tr>
        <td><label for="DOB">Birth Date:</label> </td>
        <td><input type="text" name="birth_date" value="yyyy-mm-dd" ></td>
	</tr>
    <tr>
        <td><label for="hire_date">Hire Date:</label> </td>
        <td><input type="text" name="hire_date" value="yyyy-mm-dd" ></td>
	</tr>
 
   <tr>
    <td>Salary:</td>
    <td><input type=text id="sal" name='salary' > </td>
  </tr>
   <tr>
    	<td><label for="dept_no">Department:</label></td>
        <td><select name="dept_no" width="10" >
        	<option value=""></option>
              <option value="d009">Customer Service</option>
              <option value="d005">Development</option>
              <option value="d002">Finance</option>
              <option value="d003">Human Resources</option>
              <option value="d001">Marketing</option>
              <option value="d004">Production</option>
              <option value="d006">Quality Management</option>
              <option value="d008">Research</option>
              <option value="d007">Sales</option>
            </select>
		</td>	
    </tr>
        <tr>
    	<td><label for="title">Job title:</label></td>
        <td><select name="title" >
        <option value=""></option>
              <option value="Staff">Staff</option>
              <option value="Senior Staff">Senior Staff</option>
              <option value="Assistant Engineer">Assistant Engineer</option>
              <option value="Engineer">Engineer</option>
              <option value="Senior Engineer">Senior Engineer</option>
              <option value="Technique Leader">Technique Leader</option>
              <option value="Manager">Manager</option>
            </select>
 		</td>	
    </tr>


    <tr>
    	<td><label for="gender">Gender:</label></td>
        <td><select name="gender" >
        	<option value=""></option>
              <option value="M">Male</option>
              <option value="F">Female</option> </td>	
    </tr>
    <tr>
    	<td></td>
        <td><input value="submit" name="submit"  type="submit" class="green"><input  type="button" value="Back" class="green" onClick="history.back();"></td>
    </tr>             
    
        
    </table>
    

    
    </form>
     <?php if ($error==5) {?>
	<h2> <?php echo ' The profile for ' . $this->input->post('first_name') . ' ' . $this->input->post('last_name') . ' ID: ' . $this->input->post('emp_no') . ' have been created succesfully' ;  ?> </h2>
<?php	} ?>
<?php if ($error==9) {?>
	<h1>Something went wrong cannot update database</h1>
<?php	} ?>
    <?php echo validation_errors(); ?>
    <!-- end .content --></div>  <!-- end .container --></div>
  <div class="footer">
    <p>Artur Sroka - University of Westminster @2012</p>
    <!-- end .footer --></div>

</body>
</html>
