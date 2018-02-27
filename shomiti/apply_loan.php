<?php
require_once("connection/connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Loan Application</title>
</head>
<body>







<div class="header">
<h2>Please fill-in the required information, So that our team can get in touch with you. </h2>
</div>



<form action="" method="POST">



<input type="text" name="c_name" class="form-control" placeholder="Enter Your Full Name">


<br><br>

<input type="text" name="c_address" class="form-control" placeholder="Enter Your Full Address">


<br><br>

                                        
<input type="text" class="datepicker form-control" required
id="single_cal2" aria-describedby="inputSuccess2Status1"
name="c_dob" placeholder="Date Of Birth (DD-MM-YYYY)">


<br><br>

<select class="form-control show-tick" name="c_gender" required>
<option value="" disabled selected>Select Your Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>


<br><br>

<input type="text" class="form-control" required 
id="single_cal2" aria-describedby="inputSuccess2Status1" name="c_phone" placeholder="Phone Number">



<br><br>

<input type="text" name="c_org_name" class="form-control" placeholder="Name of Your Working Organization">


<br><br>

<input type="text" name="c_org_address" class="form-control" placeholder="Address of Your Working Organization">


<br><br>

<input type="text" class="form-control" required 
id="single_cal2" aria-describedby="inputSuccess2Status1" name="c_monthly_income" placeholder="Monthly Income">




<br><br>
    


<input type="text" class="form-control" required
id="single_cal2" aria-describedby="inputSuccess2Status1" name="c_email" placeholder="Contact Email">


<br><br>

<input name="c_nid" class="form-control no-resize" placeholder="National ID"></input>


<br><br>

<select class="form-control show-tick" name="c_loan_type" required>
<option value="" disabled selected>Choose your loan type</option>
<option value="Car loan">Car Loan</option>
<option value="Home Loan">Home Loan</option>
<option value="Personal Loan">Personal Loan</option>
</select>



<br><br>


<input type="text" name="c_exp_loan" class="form-control" placeholder="Your Expected Loan Amount">


<br><br>

<input type="text" name="c_exp_loan_term" class="form-control" placeholder="Your Expected Loan Term (Year)">


<br><br>


<input type="text" name="c_loan_reason" class="form-control" placeholder="Reason Behind Claimed Loan">


<br><br>

<button type="submit" name="apply_client"
class="btn btn-primary m-t-15 waves-effect">Submit
</button>



</form>

</body>
</html>





<?php

	if (isset($_POST['apply_client'])) 
	{
	    $c_name = $_POST['c_name'];
	    $c_address = $_POST['c_address'];
	    $date = date_create($_POST['c_dob']);
	    $c_dob = date_format($date, "Y-m-d");
	    $c_gender = $_POST['c_gender'];
	    $c_phone = $_POST['c_phone'];	    
	    $c_org_name = $_POST['c_org_name'];
	    $c_org_address = $_POST['c_org_address'];
	    $c_monthly_income = $_POST['c_monthly_income'];
	    $c_email = $_POST['c_email'];
	    $c_nid = $_POST['c_nid'];
	    $c_loan_type = $_POST['c_loan_type'];
	    $c_exp_loan = $_POST['c_exp_loan'];
	    $c_exp_loan_term = $_POST['c_exp_loan_term'];
	    $c_loan_reason = $_POST['c_loan_reason'];
	    
	    $sql="INSERT INTO `applied_client`( `c_name`, `c_address`, `c_dob`, `c_gender`, `c_phone`, `c_org_name`, `c_org_address`, `c_monthly_income`, `c_email`, `c_loan_type`, `c_exp_loan`, `c_exp_loan_term`, `c_loan_reason`) VALUES ('$c_name','$c_address','$c_dob','$c_gender','$c_phone','$c_org_name','$c_org_address','$c_monthly_income','$c_email','$c_loan_type','$c_exp_loan','$c_exp_loan_term','$c_loan_reason')";

	    $done = mysqli_query($con, $sql);
		// echo mysql_error();

	    if ($done) 
	    {
	        echo "<script> a
	        		alert('Submitted !');
	        		document.location.href='apply_loan.php';
	        	</script>";
	    } 
	    else 
	    {
	        echo mysqli_error($con);

	    }

	}
?>
