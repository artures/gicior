<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Human Reseources Admin System - Add employee</title>

<link href="..\..\css\HR.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.grey #emp_no {
	background-color: #CCC;
}
</style>
</head>

<body>
  <div class="header">
  <h1>HUMAN RESOURCES ADMIN SYSTEM </h1> 
  
  <!-- end .header --></div>
<div class="container">

  <div class="content" >
    <h1>You can change your password below.</h1> 

	<div align="center">
	<?php echo form_open('login/assign_pass'); ?>
    
	<hr style="width:50%;"/>
    
    <table class="login">	

					<?php	
			if($emp_no)
			{
				foreach ($emp_no as $r) 
				{
					
				
				?>
						
   	
    <tr>
    	<td><label for="eID">Employee ID:</label></td>
        <td class="grey"><input class="grey" type="text"  id="emp_no" name="emp_no"  value="<?php echo $r->emp_no; ?>" readonly="readonly"> </td>	
    </tr>   

        <tr>
    	<td><label for="password">Password:</label></td>	
        <td><input type="password"   name="password1"  > </td>	
    </tr>
    <tr>
    	<td><label for="password2">Confirm Password:</label></td>
        <td><input type="password"   name="password2"  > </td>	
    </tr>

    <tr>
    	<td></td>
        <td><input value="Update" name="submit"  type="submit" class="green"><input  type="button" value="Back" class="green" onClick="history.back();"></td>
    </tr>             
 
    </table>
    
    <?php
     } 
				
			}
			
			?>  
    
    </form>
    
    <?php echo validation_errors(); ?>
    <!-- end .content --></div>
    </div></div>
  <div class="footer">
    <p>Artur Sroka - University of Westminster @2012</p>
    <!-- end .footer --></div>
 
</body>
</html>
