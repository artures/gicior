<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Human Reseources Admin System - Login</title>

<link href="..\..\css\HR.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="header">
  <h1>HUMAN RESOURCES ADMIN SYSTEM </h1> 
  
  <!-- end .header --></div>
<div class="container">

  <div class="content" >
    <h1>Secure Sign In <img src="..\..\css\ssl_icon.png" alt="ssl_icon" name="ssl_icon"  id="ssl_icon" /></h1> 

    
   
   	<?php if ($error==2) {?>
	<h1>Your password have been assigned, please log in.</h1>
<?php	} ?>	
    <form action="validate_manager" method="POST">
    <table class="login">
    <tr>
    	<td><label for="eID">Employee ID:</label></td>
        <td><input type="text"  id="emp_no" name="emp_no" tabindex="1" > </td>	
    </tr>
    <tr>
    	<td><label for="Password">Password:</label></td>
        <td><input type="password" name="password" id="password" tabindex="2"></td>
    </tr>
    <tr>
    	<td></td>
        <td><input value="Login" name="submit"  type="submit" class="green"><input  type="button" value="Back" class="green" onClick="history.back();"></td>
    </tr>  
      
    
  
        
    </table>
    
    </form>
     <p> <a href="<?php echo base_url(); ?>index.php/login/new_pass" >If you havent got your password, please click here</a></p>
<?php if ($error==1) {?>
	<p>Your username / password are incorrect.</p>
<?php	} ?>


	

<?php echo validation_errors(); ?>
    
    <!-- end .content --></div>

  <!-- end .container --></div>
    <div class="footer">
    <p>Artur Sroka - University of Westminster @2012</p>
    <!-- end .footer --></div>
</body>
</html>
