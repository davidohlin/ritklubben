<?php

namespace App;

use Sober\Controller\Controller;
use DateTime;
use DateTimeZone;

class Dates extends Controller
{

	/*
	 * Returns array of dates
	 * @return array
	 */
	public function dates()
	{	
		$dates = get_field('dates');
		$arr = [];

		foreach ($dates as $key => $value) {
			$arr[$key]['weekday'] = self::getWeekday(date('l', strtotime($value['date'])));
			$arr[$key]['date'] = date('j', strtotime($value['date']));
			$arr[$key]['month'] = self::getMonth(date('F', strtotime($value['date'])));
			$arr[$key]['time_starts'] = $value['time_starts'];
			$arr[$key]['time_ends'] = $value['time_ends'];
			$arr[$key]['location'] = $value['location'];
			$arr[$key]['has_passed'] = self::dateHasPassed($value['date']);
		}

		return $arr;
	}

	/*
     * Returns true if the date has passed
     * @return boolean
     */
	private function dateHasPassed($date)
	{
		$timezone = new DateTimeZone('Europe/Stockholm');
		$now = new DateTime('now', $timezone);
		$now = $now->format('m/d/Y');
		
		return $now > $date;
	}

	/*
	 * Get the weekday from a date string
	 * @return string
	 */
	private function getWeekday($weekday)
	{
		$weekdays = array(
			'Monday' => 'Måndag', 
			'Tuesday' => 'Tisdag', 
			'Wednesday' => 'Onsdag',
			'Thursday' => 'Torsdag',
			'Friday' => 'Fredag', 
			'Saturday' => 'Lördag',
			'Sunday' => 'Söndag'
		);

		return $weekdays[$weekday];
	}

	/*
	 * Get the month from a date string
	 * @return string
	 */
	private function getMonth($month)
	{
		$months = array(
			'January' => 'Januari', 
			'February' => 'Februari', 
			'Mars' => 'Mars', 
			'April' => 'April',
			'May' => 'Maj',
			'June' => 'Juni', 
			'July' => 'Juli',
			'August' => 'Augusti',
			'September' => 'September',
			'October' => 'Oktober',
			'November' => 'November',
			'December' => 'December',
		);

		return $months[$month];

	}

}
