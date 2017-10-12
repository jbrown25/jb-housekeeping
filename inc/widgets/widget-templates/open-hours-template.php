<?php
      if(!function_exists('jbGetHours')){
            function jbGetHours($openHour, $closeHour){
                  $hoursLabels = array(
                  'closed' => __('CLOSED', 'jb-housekeeping'),
                  'twelve_am' => __('12:00AM', 'jb-housekeeping'),
                  'twelve_thirty_am' => __('12:30AM', 'jb-housekeeping'),
                  'one_am' => __('1:00AM', 'jb-housekeeping'),
                  'one_thirty_am' => __('1:30AM', 'jb-housekeeping'),
                  'two_am' => __('2:00AM', 'jb-housekeeping'),
                  'two_thirty_am' => __('2:30AM', 'jb-housekeeping'),
                  'three_am' => __('3:00AM', 'jb-housekeeping'),
                  'three_thirty_am' => __('3:30AM', 'jb-housekeeping'),
                  'four_am' => __('4:00AM', 'jb-housekeeping'),
                  'four_thirty_am' => __('4:30AM', 'jb-housekeeping'),
                  'five_am' => __('5:00AM', 'jb-housekeeping'),
                  'five_thirty_am' => __('5:30AM', 'jb-housekeeping'),
                  'six_am' => __('6:00AM', 'jb-housekeeping'),
                  'six_thirty_am' => __('6:30AM', 'jb-housekeeping'),
                  'seven_am' => __('7:00AM', 'jb-housekeeping'),
                  'seven_thirty_am' => __('7:30AM', 'jb-housekeeping'),
                  'eight_am' => __('8:00AM', 'jb-housekeeping'),
                  'eight_thirty_am' => __('8:30AM', 'jb-housekeeping'),
                  'nine_am' => __('9:00AM', 'jb-housekeeping'),
                  'nine_thirty_am' => __('9:30AM', 'jb-housekeeping'),
                  'ten_am' => __('10:00AM', 'jb-housekeeping'),
                  'ten_thirty_am' => __('10:30AM', 'jb-housekeeping'),
                  'eleven_am' => __('11:00AM', 'jb-housekeeping'),
                  'eleven_thirty_am' => __('11:30AM', 'jb-housekeeping'),
                  'twelve_pm' => __('12:00PM', 'jb-housekeeping'),
                  'twelve_thirty_pm' => __('12:30PM', 'jb-housekeeping'),
                  'one_pm' => __('1:00PM', 'jb-housekeeping'),
                  'one_thirty_pm' => __('1:30PM', 'jb-housekeeping'),
                  'two_pm' => __('2:00PM', 'jb-housekeeping'),
                  'two_thirty_pm' => __('2:30PM', 'jb-housekeeping'),
                  'three_pm' => __('3:00PM', 'jb-housekeeping'),
                  'three_thirty_pm' => __('3:30PM', 'jb-housekeeping'),
                  'four_pm' => __('4:00PM', 'jb-housekeeping'),
                  'four_thirty_pm' => __('4:30PM', 'jb-housekeeping'),
                  'five_pm' => __('5:00PM', 'jb-housekeeping'),
                  'five_thirty_pm' => __('5:30PM', 'jb-housekeeping'),
                  'six_pm' => __('6:00PM', 'jb-housekeeping'),
                  'six_thirty_pm' => __('6:30PM', 'jb-housekeeping'),
                  'seven_pm' => __('7:00PM', 'jb-housekeeping'),
                  'seven_thirty_pm' => __('7:30PM', 'jb-housekeeping'),
                  'eight_pm' => __('8:00PM', 'jb-housekeeping'),
                  'eight_thirty_pm' => __('8:30PM', 'jb-housekeeping'),
                  'nine_pm' => __('9:00PM', 'jb-housekeeping'),
                  'nine_thirty_pm' => __('9:30PM', 'jb-housekeeping'),
                  'ten_pm' => __('10:00PM', 'jb-housekeeping'),
                  'ten_thirty_pm' => __('10:30PM', 'jb-housekeeping'),
                  'eleven_pm' => __('11:00PM', 'jb-housekeeping'),
                  'eleven_thirty_pm' => __('11:30PM', 'jb-housekeeping')
              );

                  if($openHour === 'closed' || $closeHour === 'closed') return 'CLOSED';
                  return $hoursLabels[$openHour] . ' to ' . $hoursLabels[$closeHour];
            }
      }
?>

<h3><?php echo $instance['hours_heading']; ?></h3>
<div class="hours">
	<table>
		<tr>
			<td>Monday</td>
			<td><?php echo jbGetHours($instance['monday_open'], $instance['monday_close']); ?></td>
		</tr>
		<tr>
			<td>Tuesday</td>
			<td><?php echo jbGetHours($instance['tuesday_open'], $instance['tuesday_close']); ?></td>
		</tr>
		<tr>
			<td>Wednesday</td>
			<td><?php echo jbGetHours($instance['wednesday_open'], $instance['wednesday_close']); ?></td>
		</tr>
		<tr>
			<td>Thursday</td>
			<td><?php echo jbGetHours($instance['thursday_open'], $instance['thursday_close']); ?></td>
		</tr>
		<tr>
			<td>Friday</td>
			<td><?php echo jbGetHours($instance['friday_open'], $instance['friday_close']); ?></td>
		</tr>
		<tr>
			<td>Saturday</td>
			<td><?php echo jbGetHours($instance['saturday_open'], $instance['saturday_close']); ?></td>
		</tr>
		<tr>
			<td>Sunday</td>
			<td><?php echo jbGetHours($instance['sunday_open'], $instance['sunday_close']); ?></td>
		</tr>
	</table>
</div>