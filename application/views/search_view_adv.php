<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Human Reseources Admin System -Search</title>

<link href="..\..\css\HR.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.container .content form table td {
	text-align: left;
	float: none;
}
</style>
</head>

<body>
  <div class="header">
  <h1>HUMAN RESOURCES ADMIN SYSTEM - Advanced Search</h1> 
  
  <!-- end .header --></div>
<div class="container">

  <div class="content" >
    

            <form action="../find/findemp_adv" method="POST">
					<table width="50%" >
  <tr>
    <td>First name:  </td>
    <td><input type=text id="fn" name='firstname'> </td>
  </tr>
  <tr>
    <td>Last name: </td>
    <td><input type=text id="ln" name='lastname'> </td>
  </tr>
<!--    <tr>
    <td>Employee ID:</td>
    <td><input type=text id="emp_no" name='empID'> </td>
  </tr> -->
  <tr>
    <td>Department Name: </td>
    <td><input type=text id="dt" name='dept'> </td>
  </tr>
  <tr>
    <td>Current job Title:</td>
    <td><input type=text id="jt" name='jobtitle'> </td>
  </tr>
   <tr>
    <td>Salary:</td>
    <td><input type=text id="sal" name='sal'> </td>
  </tr>
  
  
  <tr>
    <td></td>
    <td><input value="Search" type="submit" id="search" class="green"><input  type="button" value="Back" class="green" onClick="history.back();"></td>
  </tr>
</table>
                    
                    
                    

            </form>
            </div>
            
            
    
    
    

</div>

</body>
</html>