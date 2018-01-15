

<div class="box employee-details">
	<h4>Personal Information</h4>
	<table class="table table-striped table-bordered">

		<tr>
			<td valign="top" width="25%">Name:</td>
			<td valign="top" width="75%">
				<?php echo $employee->firstname . ' ' . $employee->middlename . ' ' .$employee->lastname; ?>
			</td>
		</tr>

		
		<tr>
			<td valign="top" width="25%">Gender:</td>
			<td valign="top" width="75%">
				<?php echo  $employee->gender == 'M' ?  "Male" : "Female"; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Date of Birth:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->date_of_birth, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Age:</td>
			<td valign="top" width="75%">
				<?php echo $employee->age; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Address:</td>
			<td valign="top" width="75%">
				<?php echo $employee->address1 . ' ' . $employee->address2; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Mobile No:</td>
			<td valign="top" width="75%">
				<?php echo $employee->mobile_no; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Telephone No:</td>
			<td valign="top" width="75%">
				<?php echo $employee->telephone_no; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Email:</td>
			<td valign="top" width="75%">
				<?php echo $employee->email; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Remarks:</td>
			<td valign="top" width="75%">
				<?php echo $employee->remarks; ?></td>
		</tr>
	</table>
</div>

<div class="box employee-details">
	<h4>Contract Details</h4>
	<table class="table table-striped">
		<tr>
			<td valign="top" width="25%">Employee No:</td>
			<td valign="top" width="75%">
				<?php echo $employee->employee_no; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Project:</td>
			<td valign="top" width="75%">
				<?php echo $employee->title; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Position:</td>
			<td valign="top" width="75%">
				<?php echo $employee->position; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Employment Status:</td>
			<td valign="top" width="75%"><?php echo $employee->employment_status; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Length of Service:</td>
			<td valign="top" width="75%">
				<?php echo $employee->length_of_service; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Date Hired:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->date_hired, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Date Renew:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->date_renew, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Contract Expiry Date:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->contract_expiry_date, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Contract Remarks:</td>
			<td valign="top" width="75%">
				<?php echo $employee->contract_remarks; ?></td>
		</tr>
	</table>
</div>
<div class="box employee-details">
	<h4>Benefits ID Nos.</h4>
	<table class="table table-striped">
		<tr>
			<td valign="top" width="25%">SSS No.:</td>
			<td valign="top" width="75%">
				<?php echo $employee->sss_no; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">PhilHealth No.:</td>
			<td valign="top" width="75%">
				<?php echo $employee->philhealth_no; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">PAGIBIG No.:</td>
			<td valign="top" width="75%">
				<?php echo $employee->pagibig_no; ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">TIN No.:</td>
			<td valign="top" width="75%">
				<?php echo $employee->tin_no; ?></td>
		</tr>
	</table>
</div>

<div class="box employee-details">
	<h4>Salary Details</h4>
	<table class="table table-striped">
		<tr>
			<td valign="top" width="25%">Daily Rate:</td>
			<td valign="top" width="75%">
				<?php echo nf($employee->daily_rate); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Semi-Monthly Rate:</td>
			<td valign="top" width="75%">
				<?php echo nf($employee->semi_monthly_rate); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Monthly Rate:</td>
			<td valign="top" width="75%">
				<?php echo  nf($employee->monthly_rate); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">E-COLA:</td>
			<td valign="top" width="75%">
				<?php echo nf($employee->e_cola); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Allowance:</td>
			<td valign="top" width="75%">
				<?php echo nf($employee->allowance); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Allowance Mode of Payment:</td>
			<td valign="top" width="75%">
				<?php
				if($employee->allowance_mode_of_payment == 1)
					echo 'Daily';
				else if($employee->allowance_mode_of_payment == 2)
					echo 'Semi-Monthly';
				else  if($employee->allowance_mode_of_payment == 3)								
					echo 'Monthly';
				?>
			</td>
		</tr>
		<tr>
			<td valign="top" width="25%">Allowance Remarks:</td>
			<td valign="top" width="75%">
				<?php echo $employee->allowance_remarks; ?></td>
		</tr>
	</table>
</div>

<div class="box employee-details">
	<h4>Requirements Date Submission</h4>
	<table class="table table-striped">
		<tr>
			<td valign="top" width="25%">NBA Clearance:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->nbi_clearance_date_submitted, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Police Clearance:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->police_clearance_date_submitted, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Barangay Clearance:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->brgy_clearance_date_submitted, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Medical Clearance:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->medical_clearance_date_submitted, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Drug Test Clearance:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->drugtest_clearance_date_submitted, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Date Filed:</td>
			<td valign="top" width="75%">
				<?php echo date_convert_to_php($employee->date_filed_up, "M d, Y"); ?></td>
		</tr>
		<tr>
			<td valign="top" width="25%">Insurance Remarks:</td>
			<td valign="top" width="75%">
				<?php echo $employee->insurance_remarks; ?></td>
		</tr>
	</table>
</div>