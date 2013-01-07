<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Human Reseources Admin System - Menu</title>

<link href="..\..\css\HR.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="header">
  <h1>HUMAN RESOURCES ADMIN SYSTEM </h1> 
  
  <!-- end .header --></div>
<div class="container">

  <div class="content" >
    <h1>Welcome, </h1> 
    <p> <?php print_r($this->session->userdata['emp_no']); ?>, You have succesfully logged in 
    <img src="..\..\css\ssl_icon.png" alt="ssl_icon" name="ssl_icon"  id="ssl_icon" />
    </p>
    
  <div class="links">
  <a href="<?php echo base_url(); ?>index.php/find/findemp_adv" >Advanced Search</a>
  
  <a href="<?php echo base_url(); ?>index.php/manager/register" >Register employee</a>
  
   <a href="<?php echo base_url(); ?>index.php/manager/load"  >Update employee</a>
   
    <a href="<?php echo base_url(); ?>index.php/manager/password_update"  >Change password</a>
  	
   <a href="<?php echo base_url(); ?>index.php/login/logout"  >Logout</a> 
  
  </div>  
  <div align="center">
    <input  type="button" value="Back" class="green" onClick="history.back();">
  </div>  
   	

    
    
    <!-- end .content --></div>

  <!-- end .container --></div>
    <div class="footer">
    <p>Artur Sroka - University of Westminster @2012</p>
    <!-- end .footer --></div>
</body>
</html>
