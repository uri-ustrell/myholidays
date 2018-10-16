<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class MemberController extends Controller
{
	//actions (methods called by @ in Router)
    public function getMembers(Store $session){
    	$mem = new Member();
    	$mems = $mem->getMembers($session);
    	return view('members.main', ['mems' => $mems]);
    }
}