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
			$arr[$key]['date'] = $value['date'];
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
		$now = $now->format('Y-m-d H:i:s');

		return $now > $date;
	}

}
