<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class MemberController extends Controller
{
	//actions (methods called by @ in Router)
    public function getMembers(Store $session){
    	$member = new Member();
    	$mems = $member->getMembers($session);
    	return view('members.main', ['mems' => $mems]);
    }

    public function getMem(Store $session, Request $request, $name){
    	$member = new Member();
    	$mem = $member->getMem($session, str_replace('-',' ',$name));
    	//return var_dump($mem);
    	return view('calendar.main',['mem' => $mem]);
    }

    public function addMemAdmin(Store $session, Request $request){
    	$this->validate($request, [
			'userName'=>['required','min:2','max:90',
			'regex:/[\'^£$%&*()}{@#~?><>,|=_+¬]/'],
			'userEmail'=>'required|e-mail',
			'pass'=>'required|min:6|max:16',
			'pass2'=>'required_with:pass|same:pass|min:6|max:16'
		]);
    	$member = new Member();
    	$newMem = [
    		'id' => count($member->getMembers($session)),
    		'name' => $request->input('userName'),
    		'email' => $request->input('userEmail'),
    		'department' => $request->input('dptm'),
    		'hired' => $request->input('hired'),
    		'vacations' => $request->input('vacations')
    	];
    	$member->addMemAdmin($session, $newMem);
    	$mems = $member->getMembers($session);
    	return view('members.main', ['mems' => $mems, 'newMem'=>$newMem]);
    }

    public function editMemAdmin(Store $session, Request $request){
    	$this->validate($request, [
			'userName'=>['required','min:2','max:90',
			'regex:/[\'^£$%&*()}{@#~?><>,|=_+¬]/'],
			'userEmail'=>'required|e-mail',
			'pass'=>'required|min:6|max:16',
			'pass2'=>'required_with:pass|same:pass|min:6|max:16'
		]);
    	$member = new Member();
    	$changeMem = [
    		'id' => count($member->getMembers($session)),
    		'name' => $request->input('userName'),
    		'email' => $request->input('userEmail'),
    		'department' => $request->input('dptm'),
    		'hired' => $request->input('hired'),
    		'vacations' => $request->input('vacations')
    	];
    	$member->editMem($session, $changeMem);
    	return redirect()
			->route('user.profile')
			->with('userInfo', $request->input('userName') .'\'s data have been updated succesfuly');
    }
}