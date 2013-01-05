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
    <h1>Update employee profile</h1> 

	<div align="center"><h1>Please edit loaded Details</h1> 
	<?php echo form_open('manager/update'); ?>
    
	<hr style="width:50%;"/>
    
    <table class="login">	
			<?php	
			if($loaded)
			{
				foreach ($loaded as $r) 
				{
					
				
				?>
				
   	
    <tr>
    	<td><label for="eID">Employee ID:</label></td>
        <td class="grey"><input class="grey" type="text"  id="emp_no" name="emp_no"  value="<?php echo $r->emp_no; ?>" readonly="readonly"> </td>	
    </tr>   
        <tr>
    	<td><label for="fname">First Name:</label></td>
        <td><input type="text"  id="first_name" name="first_name" value="<?php echo $r->first_name; ?>" > </td>	
    </tr>
    <tr>
    	<td><label for="lastname">Surname:</label></td>
        <td><input type="text"  id="last_name" name="last_name" value="<?php echo $r->last_name; ?>" > </td>	
    </tr>
    

    <tr>
    	<td><label for="gender">Gender:</label></td>
        <td><input type="text"  id="gender" name="gender"  value="<?php echo $r->gender;  ?>"> </td>	
    </tr> 
    

    <tr>
    	<td></td>
        <td><input value="Update" name="submit"  type="submit" class="green"><input  type="button" value="Back" class="green" onClick="history.back();"></td>
    </tr>             
    <?php
     } 
				
			}
			else {echo 'no results <input  type="button" value="Back" class="green" onClick="history.back();">';}
			?>   
    </table>
    

    
    </form>
    
    <?php echo validation_errors(); ?>
    <!-- end .content --></div></div>
  <div class="footer">
    <p>Artur Sroka - University of Westminster @2012</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
/*
<!--    <tr>
    	<td><label for="fname">First Name:</label></td>
        <td><input type="text"  id="first_name" name="first_name" tabindex="1" > </td>	
    </tr>
    <tr>
    	<td><label for="lastname">Surname:</label></td>
        <td><input type="text"  id="last_name" name="last_name" tabindex="1" > </td>	
    </tr>
    

    <tr>
    	<td><label for="gender">Gender:</label></td>
        <td><input type="text"  id="gender" name="gender" tabindex="2" > </td>	
    </tr> -->