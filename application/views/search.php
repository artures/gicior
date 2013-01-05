<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Human Reseources Admin System - Basic Search</title>

<link href="HR.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="header">
  <h1>HUMAN RESOURCES ADMIN SYSTEM </h1> 
  
  <!-- end .header --></div>
<div class="container">

  <div class="content" >
    <h1>Basic search</h1> 

   	
    <form action="/1284183/index.php/login" method="GET">
    <table class="login">
    <tr>
    	<td><label for="fname">First Name:</label></td>
        <td><input type="text"  id="fname" name="fname" tabindex="1" > </td>	
    </tr>
    <tr>
    	<td><label for="lastname">Surname:</label></td>
        <td><input type="text"  id="lastname" name="lastname" tabindex="1" > </td>	
    </tr>
    <tr>
    	<td><label for="title">Title:</label></td>
        <td><input type="text"  id="title" name="title" tabindex="1" > </td>	
    </tr>

    <tr>
    	<td><label for="dept">Department:</label></td>
        <td> 
        <select name="dept" id="dept">
  		<option value="0">Select department:</option>
  		<option value="1">Marketing</option>
 		<option value="2">Finance</option>
        <option value="3">Human Resources</option>
        <option value="4">Production</option>
        <option value="5">Development</option>
        <option value="6">Quality Management</option>
        <option value="7">Sales</option>
        <option value="8">Research</option>
        <option value="9">Customer Service</option>
  	</select> </td>
    </tr>  
    
    
    <tr>
    	<td><label for="gender">Sex:</label></td>
        <td> 
        <select name="sex" id="sex">
  		<option value="0">Select Gender:</option>
  		<option value="1">Male</option>
 		<option value="2">Female</option>
  	</select> </td>
    </tr>
        <tr>
    	<td></td>
        <td><input value="Search" name="submit"  type="submit" class="green"></td>
    </tr>  
    
        
    </table>
    
    </form>
    
    
    <!-- end .content --></div>
  <div class="footer">
    <p>Artur Sroka - University of Westminster @2012</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
