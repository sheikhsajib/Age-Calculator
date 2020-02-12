<!DOCTYPE html>
<html>
	<head>
		<title>Age Calculator</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
<link rel="stylesheet" href="style.css" />
	<body>
	<?php		date_default_timezone_set('Asia/Dhaka');
$nameErr = $dateErr =$nameErr2 = $dateErr2 = $required = $all_required = '';

if(isset($_POST['submit_1']) == "POST"){

		$person_1 	 = $_POST["person_1"];
		$dateOfBirth = $_POST['birth_date'];
		$today		 = date('d-M-Y H:i:s T');
		$diff		 = date_diff(date_create($dateOfBirth), date_create($today));
		
		$year 	= $diff->format('%y');
		$month  = $diff->format('%m');
		$day 	= $diff->format('%d');
		$hour 	= $diff->format('%h');
		$min 	= $diff->format('%i');
			
			$now = time();
			$your_date = strtotime($dateOfBirth);
			$datediff = $now - $your_date;
			//count total time		
		$totalMonth	= $diff->format('%y')*12 + $diff->format('%m');
		$totalDays	= round($datediff / (60 * 60 * 24));
		$totalHours	= round($datediff / (60*60));
		$totalMin	= round($datediff / 60);
		$totalSec	= round($datediff) ;

		
		
	if (empty($person_1) ) {
		$nameErr 	= "Enter Name";
		$required	= "required";

	} 
	else if( empty($dateOfBirth)){
		$dateErr	= "Select a date";
		$required	= "required";
	}
	else { ?>
		
	<div class="container">
		<div class="row wow flip">
			<div class="col-sm-6">
			<?php
			echo " <h3 class='text-center'>Hi <span class='text-success'>$person_1,</span></h3>   
				You are " ;
				if( $year > 1){
					echo " $year years "; }
					else{
						echo " $year year ";
					}
				if( $month > 1){
					echo " $month months "; }
					else{
						echo "$month month ";
					}
					 
				if( $day > 1){
					echo " $day days "; }
					else{
						echo "$day day ";
					}	 
				if( $hour > 1){
					echo " $hour hours "; }
					else{
						echo "$hour hour ";
					}	 
				if( $min > 1){
					echo " $min minutes "; }
					else{
						echo "$min minute ";
					}
					echo " Old. <br/> Or  <br/>
					Your are in this world for ". number_format($totalMonth)." Months <br/>
					Or you can say ". number_format($totalDays)." Days <br/>
					Or other way  ". number_format($totalHours)." hours <br/>
					Or in Minute ". number_format($totalMin)." Minutes <br/>
					Finally in ". number_format($totalSec)." Seconds <br/>
					
					"; ?>
			</div>
		</div>
	</div>
	<?php	}	
	
	}
	


	if(isset($_POST['submit_all'])){
	//Person_1 age calculate
		$person_1	 = $_POST['person_1'];
		$dateOfBirth = $_POST['birth_date'];
		$today		 = date('d-M-Y H:i:s T');
		$diff		 = date_diff(date_create($dateOfBirth), date_create($today));

		$p1y 	= $diff->format('%y');
		$p1m  	= $diff->format('%m');
		$p1d 	= $diff->format('%d');
		$p1h 	= $diff->format('%h');
		$p1min	= $diff->format('%i');

		$now = time();
			$your_date = strtotime($dateOfBirth);
			$datediff = $now - $your_date;
			//count total time		
		$totalMonth	= $diff->format('%y')*12 + $diff->format('%m');
		$totalDays	= round($datediff / (60 * 60 * 24));
		$totalHours	= round($datediff / (60*60));
		$totalMin	= round($datediff / 60);
		$totalSec	= round($datediff) ;

		//Person_2 is counting here
		$person_2	 = $_POST['person_2'];
		$birth_date_2 = $_POST['birth_date_2'];
		$today		 = date('d-M-Y H:i:s T');
		$diff_2		 = date_diff(date_create($birth_date_2), date_create($today));
		
			$now2 = time();
			$person_2_date = strtotime($birth_date_2);
			$datediff_2 = $now2 - $person_2_date;
			//count total time		
		$totalMonth2	= $diff_2->format('%y')*12 + $diff_2->format('%m');
		$totalDays2		= round($datediff_2 / (60 * 60 * 24));
		$totalHours2		= round($datediff_2 / (60*60));
		$totalMin2		= round($datediff_2 / 60);
		$totalSec2		= round($datediff_2) ;
		
		$p2y 	= $diff_2->format('%y');
		$p2m  	= $diff_2->format('%m');
		$p2d 	= $diff_2->format('%d');
		$p2h 	= $diff_2->format('%h');
		$p2min 	= $diff_2->format('%i');


	if (empty($person_1)) {
		$all_required	= "required";
		$nameErr 		= "Enter Your Name";
	}
	else if (empty($dateOfBirth)){
		$all_required	= "required";
		$dateErr		= "Select Your Birthdate";
	}
	else if (empty($person_2)){
		$all_required	= "required";
		$nameErr2		= "Enter Your Friend Name";
	}
	else if (empty($birth_date_2)){
		$all_required	= "required";
		$dateErr2		= "Select Your Friend's Birthdate";
	}
	else {
		?>
	
	<div class="container">
		<div class="row wow flip">
			<div class="col-sm-6">
			<?php
			echo " <h3 class='text-center'>Mr. <span class='text-success'>$person_1,</span></h3>   
			
				You are " ;
				if( $p1y > 1){
					echo " $p1y years "; }
					else{
						echo " $p1y year ";
					}
				if( $p1m > 1){
					echo " $p1m months "; }
					else{
						echo "$p1m month ";
					}
					 
				if( $p1d > 1){
					echo " $p1d days "; }
					else{
						echo "$p1d day ";
					}	 
				if( $p1h > 1){
					echo " $p1h hours "; }
					else{
						echo "$p1h hour ";
					}	 
				if( $p1min > 1){
					echo " $p1min minutes "; }
					else{
						echo "$p1min minute ";
					}
					echo " Old. <br/> Or  <br/>
					Your are in this world for ". number_format($totalMonth)." Months <br/>
					Or you can say ". number_format($totalDays)." Days <br/>
					Or other way  ". number_format($totalHours)." hours <br/>
					Or in Minute ". number_format($totalMin)." Minutes <br/>
					Finally in ". number_format($totalSec)." Seconds <br/>
					
					";  //Person_1 Age Show here ?>
			</div><!-- Person_1 Show here -->
	
			<div class="col-sm-6">

	<?php
			echo " <h3 class='text-center'>Mr. <span class='text-success'>$person_2,</span></h3> 
				You are " ;
				if( $p2y > 1){
					echo " $p2y years "; }
					else{
						echo " $p2y year ";
					}
				if( $p2m > 1){
					echo " $p2m months "; }
					else{
						echo "$p2m month ";
					}
					 
				if( $p2d > 1){
					echo " $p2d days "; }
					else{
						echo "$p2d day ";
					}	 
				if( $p2h > 1){
					echo " $p2h hours "; }
					else{
						echo "$p2h hour ";
					}	 
				if( $p2min > 1){
					echo " $p2min minutes "; }
					else{
						echo "$p2min minute ";
					}
					echo " Old. <br/> Or  <br/>
					Your are in this world for ". number_format($totalMonth2)." Months <br/>
					Or you can say ". number_format($totalDays2)." Days <br/>
					Or other way  ". number_format($totalHours2)." hours <br/>
					Or in Minute ". number_format($totalMin2)." Minutes <br/>
					Finally in ". number_format($totalSec2)." Seconds <br/>
					
					";  //Person_2 Age Show here ?>
			</div><!-- Person_2 Show here -->
		</div> <!-- row -->
	</div> <!-- container -->
	
	<?php

//Total Result Between Two Person
		$date1_is_big	= date_diff(date_create($dateOfBirth), date_create($birth_date_2));
		
		$date2_is_big	= date_diff(date_create($birth_date_2), date_create($dateOfBirth));
		
		$year1 	= $date1_is_big->format('%y');
		$month1 = $date1_is_big->format('%m');
		$day1 	= $date1_is_big->format('%d');
		$hour1 	= $date1_is_big->format('%h');
		$min1 	= $date1_is_big->format('%i');	
		
		$year2 	= $date2_is_big->format('%y');
		$month2 = $date2_is_big->format('%m');
		$day2 	= $date2_is_big->format('%d');
		$hour2 	= $date2_is_big->format('%h');
		$min2 	= $date2_is_big->format('%i');

	//person_1 is big
		$p1_sec	= $totalSec - $totalSec2 ;
		$p1_min	= $p1_sec / 60;
		$p1_h	= $p1_min / 60;
		$p1_d	= $p1_h / 24;
		$p1_m	= $p1_d /30;
		
	//person_2 is big	
		$p2_sec	= $totalSec2 - $totalSec ;
		$p2_min	= $p2_sec / 60;
		$p2_h	= $p2_min / 60;
		$p2_d	= $p2_h / 24;
		$p2_m	= $p2_d /30;
		
		
		
		
		
		
		if($totalSec > $totalSec2){ ?>
			
			<div class="full wow fadeInUp mt-4 bg-light">
				<div class="container">
					<div class="row">
			<h2 class='m-auto text-center'> <?php echo "Final Result $person_1 is older" ?>  </h2>
			<div class="col-12 m auto text-center">
			<?php
			echo " $person_1 is " ;
			if( $year1 > 1){
				echo " $year1 years "; }
				else{
					echo " $year1 year ";
				}
			if( $month1 > 1){
				echo " $month1 months "; }
				else{
					echo "$month1 month ";
				}
				 
			if( $day1 > 1){
				echo " $day1 days "; }
				else{
					echo "$day1 day ";
				}	 
		/*	if( $hour1 > 1){
				echo " $hour1 hours "; }
				else{
					echo "$hour1 hour ";
				}	 
			if( $min1 > 1){
				echo " $min1 minutes "; }
				else{
					echo "$min1 minute ";
				}
		*/
				
		echo " Older than $person_2 <br /> 
		or $person_1 is more ". number_format($p1_d). " days older <br />
		or More enjoy the earth for ". number_format($p1_h). " hours <br />
		or More experienced about the world for ". number_format($p1_min). " Minutes <br />
		or More take breath for ". number_format($p1_sec). " Seconds <br /> than $person_2" 	;
						?>	
						</div>
					</div>
				</div>
			</div>
			<?php 
		}
		
		
		
		else{ ?>
			
			<div class="full wow fadeInUp mt-4 bg-light">
				<div class="container">
					<div class="row">
			<h2 class='m-auto text-center'> <?php echo "Final Result $person_2 is older" ?>  </h2>
			<div class="col-12 m auto text-center">
			<?php
			echo " $person_2 is " ;
			if( $year2 > 1){
				echo " $year2 years "; }
				else{
					echo " $year2 year ";
				}
			if( $month2 > 1){
				echo " $month2 months "; }
				else{
					echo "$month2 month ";
				}
				 
			if( $day2 > 1){
				echo " $day2 days "; }
				else{
					echo "$day2 day ";
				}	 
		/*	if( $hour2 > 1){
				echo " $hour2 hours "; }
				else{
					echo "$hour2 hour ";
				}	 
			if( $min2 > 1){
				echo " $min2 minutes "; }
				else{
					echo "$min2 minute ";
				}
		*/
		
		echo " Older than $person_1 <br /> 
		So $person_2 is more ". number_format($p2_d). " days older <br />
		or More enjoy the earth for ". number_format($p2_h). " hours <br />
		or More experienced about the world for ". number_format($p2_min). " Minutes <br />
		or More take breath for ". number_format($p2_sec). " Seconds <br /> than $person_1" 	;
		
			?>	
				</div>
				</div>
			</div>
		</div>
	<?php 

		}
		
	}
?>
<div class="row"> 
	<h4 class=' col-md-7 m-auto bg-success p-3 text-center text-white strong '><strong>
	Don't worry We won't share this result. But you have the opportunity </strong></h4> 
</div>

<?php
	
	}	
	


	?>

<br />
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
	<div class="container bg-light p-2 wow bounceInUp">
		
		<div class="row">
		
			<div class="col-sm-6 mb-4">
		<p> Your Name * </p>
		<input type="text" name='person_1' placeholder="Name" <?php echo "$required $all_required";?> />
		<p class="text-danger"> <?php echo " $nameErr ";?> </p>
		<br/>
		
		<p> Date of Birth * </p>
		<input type="date" name='birth_date' <?php echo "$required $all_required";?> /> 
		<p class="text-danger"> <?php echo " $dateErr ";?> </p>
		<br/>

		<input  class="btn-success" type="submit" value='Calculate Yours Age' name='submit_1' /> <br/>
	
			</div>
			
			<div class="col-sm-6">
		<p> Your Friend's Name * </p>
		<input type="text" name='person_2' placeholder= "Friend's Name " <?php echo "$all_required";?> />
		<p class="text-danger"> <?php echo " $nameErr2 ";?> </p>
		<br />
		
		<p> Your Friend's Date of birth * </p>
		<input type="date" name='birth_date_2' <?php echo "$all_required";?> />
		<p class="text-danger">  <?php echo " $dateErr2 ";?> </p>
		<br /><br />
		
			</div>
		</div>
		<div class="row">
			<input class='m-auto btn btn-success p-2' type="submit" value='Compare Age' name='submit_all' /> 
		</div>
	</div>


	
	</form>
	
	
	
	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript"> 
wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
</script>
	</body>
</html>