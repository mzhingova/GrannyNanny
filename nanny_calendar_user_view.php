﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calendar</title>
	<!-- Override CSS file - add your own CSS rules -->
	<link rel="stylesheet" href="assets/css/nanny_calendar.css">
	
</head>
<body>
	<div class="container">
		<?php include 'includes/header.php';?>
		<div class="content">
			
			<?php
			$pageTitle = 'Calendar';
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			
			$conn = new mysqli('localhost', 'root', '', 'grannynanny');
			if (!$conn) {
				die('Could not connect: ' . mysql_error());
				exit;
			}
			$conn ->set_charset("utf8");
			$nannyID=$_GET['id'];
			$results_query = mysqli_query($conn,"SELECT * FROM parenuser where userid = '$nannyID' ");
			
			while($row = mysqli_fetch_array($results_query)) {
			
			echo '<h1>Календарът на '.$row['firstname'].' '.$row['lastname'].'</h1>';
			?>
			<div class="description">
				<h3>Оцветените в червено дати не са свободни.</h3>
			</div>
			<?php
			echo "<div class='booking'>Ако искате да ангажирате това nanny  натиснете <a   href='book_nanny_form.php?id=".$nannyID."'>Тук</a></div>";
			
			}
			

			/* draws a calendar */
			function draw_calendar($month,$year){

				/* draw table */
				$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

				/* table headings */
				$headings = array('Неделя','Понеделник','Вторник','Сряда','Четвъртък','Петък','Събота');
				$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
				
				/* days and weeks vars now ... */
				$running_day = date('w',mktime(0,0,0,$month,1,$year));
				$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
				$days_in_this_week = 1;
				$day_counter = 0;
				$dates_array = array();

				/* row for week one */
				$calendar.= '<tr class="calendar-row">';
				
				/* print "blank" days until the first of the current week */
				for($x = 0; $x < $running_day; $x++):
					$calendar.= '<td class="calendar-day-np"> </td>';
				$days_in_this_week++;
				endfor;
				
				/* keep going with days.... */
				for($list_day = 1; $list_day <= $days_in_month; $list_day++):
					$calendar.= '<td class="calendar-day">';
				
				/* add in the day number */
				$calendar.= '<div class="day-number">'.$list_day.'</div>';
				
				/*Connection to the database*/
				$conn = new mysqli('localhost', 'root', '', 'grannynanny');
				if (!$conn) {
					die('Could not connect: ' . mysql_error());
					exit;
				}
				$conn ->set_charset("utf8");
				
				$nannyID = $_GET["id"];
				$results_query = mysqli_query($conn,"SELECT * FROM booking where nannyID = '$nannyID' and status='accepted' ");
				
				while($row = mysqli_fetch_array($results_query)) 
				{
					$bookingID=$row['bookingID'];
					
					$start_date_query_result = $row['startDate'];
					$start_date = explode(" ", $start_date_query_result);
					$end_date_query_result = $row['endDate'];
					$end_date = explode(" ", $end_date_query_result);
					
					$row_cnt = mysqli_num_rows($results_query);
					
					$month_with_words = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
					$months_with_digits   = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
					$month_with_digits = str_replace($month_with_words, $months_with_digits, $start_date[1]);
					$month_with_digits_to = str_replace($month_with_words, $months_with_digits, $end_date[1]);
					
					
					if (($list_day >= $start_date[2] && $list_day<=$end_date[2]) && ($month >= $month_with_digits && $month <= $month_with_digits_to) && ($month_with_digits == $month_with_digits_to) && ($year >= $start_date[3] && $year <= $end_date[3])):
						$calendar .= str_repeat('<div class="booked"></div>',1);
					endif;

					if($month_with_digits != $month_with_digits_to):

					$start_month_days = cal_days_in_month(CAL_GREGORIAN, $month_with_digits, $year);
					$end_month_days = cal_days_in_month(CAL_GREGORIAN, $month_with_digits_to, $year);
					$month_count = $month_with_digits_to-$month_with_digits;
					

					if($month_count == 1)
					{
						if($list_day >= $start_date[2] && $list_day <= $start_month_days && $month == $month_with_digits ):
							$calendar .= str_repeat('<div class="booked"></div>',1);
						endif;
						if($list_day >= 1 && $list_day <= $end_date[2] && $month == $month_with_digits_to ):
							$calendar .= str_repeat('<div class="booked"></div>',1);
						endif;

					}

					if($month_count > 1)
					{
												
						for($i = ($month_with_digits+1); $i < $month_with_digits_to; $i++ ):
						$temp_month_days = cal_days_in_month(CAL_GREGORIAN, $i, $year);
						

						if($list_day >= 1 && $list_day <= $temp_month_days && $month == $i):
							$calendar .= str_repeat('<div class="booked"></div>',1);
							endif;
						endfor;


						if($list_day >= $start_date[2] && $list_day <= $start_month_days && $month == $month_with_digits ):
							$calendar .= str_repeat('<div class="booked"></div>',1);
						endif;

						if($list_day >= 1 && $list_day <= $end_date[2] && $month == $month_with_digits_to ):
							$calendar .= str_repeat('<div class="booked"></div>',1);
						endif;

					}

					endif;	
					
				}
				$calendar.= '</td>';
				if($running_day == 6):
					$calendar.= '</tr>';
				if(($day_counter+1) != $days_in_month):
					$calendar.= '<tr class="calendar-row">';
				endif;
				$running_day = -1;
				$days_in_this_week = 0;
				endif;
				$days_in_this_week++; $running_day++; $day_counter++;
				endfor;
				
				/* finish the rest of the days in the week */
				if($days_in_this_week < 8):
					for($x = 1; $x <= (8 - $days_in_this_week); $x++):
						$calendar.= '<td class="calendar-day-np"> </td>';
					endfor;
					endif;
					
					/* final row */
					$calendar.= '</tr>';
					
					/* end the table */
					$calendar.= '</table>';
					
					/* all done, return result */
					return $calendar;
				}
				$today = getdate();
				

					/* display current month */
				echo '<h2>' . $today['mon']. "/" . $today['year']. '</h2>';
				echo draw_calendar($today['mon'],$today['year']);


					/* display next month */
				if ($today['mon']== 12){
				echo '<br><h2>' . "1/" . ($today['year']+1) . '</h2>';
				echo draw_calendar(1,$today['year']+1);
				} else {
				echo '<br><h2>' . ($today['mon']+1) . "/" . $today['year']. '</h2>';
				echo draw_calendar($today['mon']+1,$today['year']);
				}

					/*display after next month */
				if (($today['mon']+1)== 12){
				echo '<br><h2>' . "1/" . ($today['year']+1). '</h2>';
				echo draw_calendar(1,$today['year']+1);			

				} else if ($today['mon']== 12){
				echo '<br><h2>' . "2/" . ($today['year']+1). '</h2>';
				echo draw_calendar(2,$today['year']+1);	
				} else {
				echo '<br><h2>' . ($today['mon']+2) . "/" . $today['year']. '</h2>';
				echo draw_calendar($today['mon']+2,$today['year']);
				}
				
				
				?>
			</div>
		</div>
		<div class="container">
			<?php include 'includes/footer.php';?>
		</div>
	</body>
	</html>
