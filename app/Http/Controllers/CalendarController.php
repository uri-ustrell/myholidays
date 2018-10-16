<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class CalendarController extends Controller
{

	public function get_all_DEPT(Store $session){
		$mem = new Member();
		$mems = $mem->getMembers($session);
		return view('calendar.main',['mems' => $mems]);
	}
}
